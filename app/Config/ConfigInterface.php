<?php

    interface ConfigInterface
    {
        public function getConfig($key);

        public function setConfig($key, $value);
    }