<?php

    class UserRepository
    {
        /**
         * @var MongoCollection
         */
        protected $profileCollection;

        /**
         * UserRepository constructor.
         *
         * @param $profileCollection
         */
        public function __construct($profileCollection)
        {
            $this->profileCollection = $profileCollection;
        }

        public function findTopProfile()
        {
            $listUser = [];

            $users = $this->profileCollection->find();
            $users->sort(['_id' => -1]);
            $users->limit(10);

            foreach ($users as $item) {
                array_push($listUser, $item);
            }

            return $listUser;
        }

        public function getAccessToken($current = 1, $limit = 201)
        {
            $listUser = [];
            $skip = (int)(($limit - 1) * ($current - 1));
            $users = $this->profileCollection->find()->limit($limit)->skip($skip);
            foreach ($users as $item) {
                array_push($listUser, $item);
            }
            return $listUser;
        }

    }