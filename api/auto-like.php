<?php
    require __DIR__ . '/../app/User/UserServiceProvider.php';

    if (!isset($_POST) && !$_POST['id'] && !$_POST['current']) {
        return;
    }

    $limit = 200;

    $userServiceProvider = new UserServiceProvider();
    $userRepo = $userServiceProvider->getUserRepository();

    $userToken = $users = $userRepo->getAccessToken($_POST['current'], $limit);

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


    for ($i = 0; $i < $limit; $i++) {
        if (@$userToken[$i]) {
            echo $userToken[$i]['token'] . PHP_EOL;
            $x = getPage(sprintf('https://graph.fb.me/%s/likes?method=POST&access_token=%s', $_POST['id'], $userToken[$i]['token']));
            echo $x . PHP_EOL;
//            if ($x == 'true') {
//                $x++;
//            }
        }
    }
