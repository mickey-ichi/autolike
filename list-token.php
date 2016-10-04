<?php
require('config.php');
if (isset($_GET)) {
    $listUserToken = json_decode(file_get_contents('database/tokens.txt'), true);

    $listUserToken = array_slice($listUserToken, count($listUserToken) - $config['limit']);

    echo json_encode($listUserToken);
}
