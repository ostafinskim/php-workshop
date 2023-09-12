<?php 

    $config = require('config/config.php');
    $db = new Database($config['database']);

    $title = "Create a new note";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
                'body' => $_POST['body'],
                'user_id' => 1
            ]);
            header('Location: /notes');
            exit;
        }

    }

    require 'views/note-create.view.php';