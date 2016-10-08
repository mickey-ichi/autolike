<?php
    include __DIR__ . '/ConfigInterface.php';

    class Config implements ConfigInterface
    {
        /**
         * @var []
         */
        protected $config = [
            'profileUrl' => 'https://graph.fb.me/me?access_token=%token%',
            'appUrl'     => 'https://graph.fb.me/app?access_token=%token%',
        ];

        public function __construct()
        {
            $this->config = [];
        }

        /**
         * @param $key
         * @return mixed
         */
        public function getConfig($key)
        {
            return $this->config[$key];
        }

        /**
         * @param $key
         * @param $value
         */
        public function setConfig($key, $value)
        {
            $this->config[$key] = $value;
        }
    }