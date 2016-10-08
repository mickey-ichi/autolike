<?php

    require __DIR__ . '/../app/Auth/AuthServiceProvider.php';

    if (!isset($_POST['token'])) {
        echo json_encode(['error' => ['message' => 'Nhập Mã Access Token']]);
        return;
    }

    $token = $_POST['token'];

    $authServiceProvider = new AuthServiceProvider();
    $authRepo = $authServiceProvider->getAuthRepository();

    $profileUrl = 'https://graph.fb.me/me?access_token=' . $token;
    $appUrl = 'https://graph.fb.me/app?access_token=' . $token;

    $arrContextOptions = [
        "ssl" => [
            "verify_peer"      => false,
            "verify_peer_name" => false,
        ],
    ];

    $profileResponse = @file_get_contents($profileUrl, false, stream_context_create($arrContextOptions));
    if ($profileResponse === false) {
        echo json_encode(['error' => ['message' => 'Mã Access Token không khả dụng hoặc đã hết hạn']]);
        return;
    }

    $appResponse = @file_get_contents($appUrl, false, stream_context_create($arrContextOptions));
    if ($appResponse === false) {
        echo json_encode(['error' => ['message' => 'Sai App Facebook, vui lòng thử lại']]);
        return;
    }
    $profileResponse = json_decode($profileResponse, true);
    $profileResponse['token'] = $token;
    $profile = $authRepo->findProfileById($profileResponse['id']);

    if (!$profile) {
        $authRepo->saveProfile($profileResponse);
    } else {
        $authRepo->updateProfile($profile['id'], $profileResponse);
    };

    $profile = $authRepo->findProfileById($profileResponse['id']);
    echo json_encode($profile);


