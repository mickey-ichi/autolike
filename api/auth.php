<?php

    require __DIR__ . '/../app/Auth/AuthServiceProvider.php';

    if (!isset($_POST['token'])) {
        echo json_encode(['error' => ['message' => 'token required']]);
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
        echo json_encode(['error' => ['message' => 'token invalid']]);
        return;
    }

    $appResponse = @file_get_contents($appUrl, false, stream_context_create($arrContextOptions));
    if ($appResponse === false) {
        echo json_encode(['error' => ['message' => 'app invalid']]);
        return;
    }

    $profile = $authRepo->findProfileById($profileResponse['id']);
    $profileResponse = json_decode($profileResponse, true);
    $profileResponse['token'] = $token;

    if (!$profile) {
        $authRepo->saveProfile($profile);
    } else {
        $authRepo->updateProfile($profile['id'], $profileResponse);
    };

    $profile = $authRepo->findProfileById($profileResponse['id']);
    echo json_encode($profile);


