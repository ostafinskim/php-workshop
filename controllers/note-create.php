<?php 

    $config = require('config/config.php');
    $db = new Database($config['database']);

    $title = "Create a new note";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];

        if (strlen($_POST['body']) === 0) {
            $errors['body'] = 'The note is required.';
        } 

        if (strlen($_POST['body']) > 1000) {
            $errors['body'] = 'The note must be less than 255 characters.';
        }

        if ( empty($errors) ) {
            $db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', [
                'body' => $_POST['body'],
                'user_id' => 1
            ]);
            header('Location: /notes');
            exit;
        }
    }

    require 'views/note-create.view.php';