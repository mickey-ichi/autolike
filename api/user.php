<?php
require __DIR__ . '/../app/User/UserServiceProvider.php';

if (isset($_GET)) {
    $userServiceProvider = new UserServiceProvider();
    $userRepo = $userServiceProvider->getUserRepository();

    $users = $userRepo->findTopProfile();
    echo json_encode($users);
    return;
}
