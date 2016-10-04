<?php
require('config.php');
if (isset($_GET)) {
    $listUserToken = json_decode(file_get_contents('database/tokens.txt'), true);

    $listUserToken = array_slice($listUserToken, count($listUserToken) - 15);
    $listUser = array();

    foreach ($listUserToken as &$value) {
        $profile = json_decode(getPage(sprintf('https://graph.facebook.com/me?access_token=%s', $value)), true);
        $profileObject = (object)$profile;
        if($profileObject->error == null) {
            array_push($listUser, $profileObject);
        }
    }

    echo json_encode($listUser);
}
function getPage($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_setopt($curl, CURLOPT_USERAGENT, sprintf("Mozilla/%d.0", rand(4, 5)));
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    $html = curl_exec($curl);
    curl_close($curl);
    return $html;
}