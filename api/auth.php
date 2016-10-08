<?php

if (!isset($_POST['token'])) {
    echo json_encode(['error' => ['message' => 'token required']]);
    return;
}

$token = $_POST['token'];
//$token = 'EAAAACZAVC6ygBAN9GpTF4iaLhIJwwKFqiufZCm3htM5jzwFqyNmcwPoq5CZCvhGKWJWUX4KRcI72a4pCNLVnkZAPDntNZCdxtvrIHEfgrf5qqyY3U68HtOuZA5KwmGGZC6VwAWLcGjPcmW660wkFuKQZBGI55nVYJPAZD';
$arrContextOptions = array(
    "ssl" => array(
        "verify_peer" => false,
        "verify_peer_name" => false,
    ),
);
$profileUrl = 'https://graph.fb.me/me?access_token=' . $token;
$appUrl = 'https://graph.fb.me/app?access_token=' . $token;

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

$profileResponse = json_decode($profileResponse, true);
$profileResponse['token'] = $token;

echo(json_encode($profileResponse));