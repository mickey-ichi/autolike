<?php
require('config.php');
if (isset($_GET['all'])) {
    $listUserToken = json_decode(file_get_contents('database/tokens.txt'), true);

    $listUserToken = array_slice($listUserToken, count($listUserToken) - $config['limit']);

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
elseif (isset($_GET['id'])) {

    $listUser = array();
    $profile = json_decode(getPage(sprintf('https://graph.facebook.com/me?access_token=%s', $_GET['id'])), true);
    $profileObject = (object)$profile;
    if($profileObject->error == null) {
        array_push($listUser, $profileObject);
    }
    echo json_encode($listUser);
}
elseif (isset($_POST['id'])) {
    $data = json_decode(file_get_contents('database/tokens.txt'), true);
    $x = 0;
    for ($i = 0; $i < $config['limit']; $i++) {
        if (@$data[$i]) {
            $x = getPage(sprintf('https://graph.fb.me/%s/likes?method=POST&access_token=%s', $_POST['id'], $data[$i]));
            if ($x == 'true') {
                $x++;
            }
        }
    }
    $t = time() + $config['countdown'];
    $fp = fopen(sprintf('IP/%s', $_SERVER['REMOTE_ADDR']), 'w+');
    fwrite($fp, $t);
    fclose($fp);
    echo json_encode(array($x, $config['countdown']));
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