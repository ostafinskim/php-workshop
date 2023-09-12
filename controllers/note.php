<?php

$config = require('config/config.php');
$db = new Database($config['database']);

$title = 'Note';

$note = $db->query('select * from notes where id = :id', ['id' => $_GET['id']])->fetch();

require "views/note.view.php";