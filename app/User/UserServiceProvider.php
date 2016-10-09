<?php

require __DIR__ . '/UserRepository.php';
require __DIR__ . '/../Config/Config.php';

class UserServiceProvider
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserServiceProvider constructor.
     */
    public function __construct()
    {
        $m = new MongoClient();
        $db = $m->autoLike;
        $this->userRepository = new UserRepository($db->profile);
    }

    /**
     * @return UserRepository
     */
    public function getUserRepository()
    {
        return $this->userRepository;
    }

}