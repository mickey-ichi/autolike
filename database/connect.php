<?php

    $m = new MongoClient();

// database
    $db = $m->autoLike;

// list collection
    $profileCollection = $db->profile;
    $appCollection = $db->app;

