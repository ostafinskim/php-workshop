<?php

    $config = require('config/config.php');
    $db = new Database($config['database']);

    $title = 'My Notes';

    $notes = $db->query('select * from notes where user_id = 1 or user_id = 2')->get();

    require "views/notes.view.php";
        