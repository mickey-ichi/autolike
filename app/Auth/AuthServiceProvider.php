<?php

    require __DIR__ . '/AuthRepository.php';
    require __DIR__ . '/../Config/Config.php';

    class AuthServiceProvider
    {
        /**
         * @var AuthRepository
         */
        protected $authRepository;

        /**
         * AuthServiceProvider constructor.
         */
        public function __construct()
        {
            $m = new MongoClient();
            $db = $m->autoLike;
            $this->authRepository = new AuthRepository($db->profile);
        }

        /**
         * @return AuthRepository
         */
        public function getAuthRepository()
        {
            return $this->authRepository;
        }

    }