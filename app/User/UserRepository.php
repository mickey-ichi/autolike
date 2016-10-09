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
            $users->sort(array('_id' => -1 ));
            $users->limit(10);

            foreach ($users as $item) {
                array_push($listUser, $item);
            }

            return $listUser;
        }

    }