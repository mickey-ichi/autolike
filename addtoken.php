<?php
if (isset($_POST['list_'])) {
    $tokens = array();
    foreach (explode("\n", trim($_POST['list_'])) as $token) {
        $me = @file_get_contents(sprintf('https://graph.fb.me/me?access_token=%s', $token));
        $live = $t = count(explode("\n", trim($_POST['list_'])));
        if (@$me['id']) {
            array_push($tokens, trim($token));
        } else {
            $live--;
        }

    }
    $p = (array)json_decode(file_get_contents('database/tokens.txt'), true);
    $fp = fopen('database/tokens.txt', 'w+');
    fwrite($fp, json_encode(array_merge($tokens, $p)));
    fclose($fp);
    echo sprintf('
total token: <b>%d</b> | token added: <b>%d</b>
<hr>
', $t, $live);
}

?>
<form method="POST">
    <textarea name="list_" rows="20" cols="70" placeholder="Press list access token"></textarea>
    <p></p>
    <input type="submit"/>