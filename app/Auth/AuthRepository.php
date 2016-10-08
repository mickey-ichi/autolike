<?php

    class AuthRepository
    {
        /**
         * @var MongoCollection
         */
        protected $profileCollection;

        /**
         * AuthRepository constructor.
         *
         * @param $profileCollection
         */
        public function __construct($profileCollection)
        {
            $this->profileCollection = $profileCollection;
        }

        /**
         * @param $token
         * @return array|null
         */
        public function findProfileByToken($token)
        {
            return $this->profileCollection->findOne(['token' => $token]);
        }

        /**
         * @param $profileId
         * @return array|null
         */
        public function findProfileById($profileId)
        {
            return $this->profileCollection->findOne(['id' => $profileId]);
        }

        /**
         * @param $profile
         * @return array|bool
         */
        public function saveProfile($profile)
        {
            return $this->profileCollection->insert($profile);
        }

        /**
         * @param $profileId
         * @param $profile
         * @return bool
         */
        public function updateProfile($profileId, $profile)
        {
            return $this->profileCollection->update(['id' => $profileId], ['$set' => $profile]);
        }
    }