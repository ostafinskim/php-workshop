<?php 

    require 'Validator.php';
    
    $config = require('config/config.php');
    $db = new Database($config['database']);

    $title = "Create a new note";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            

            if (!Validator::string($_POST['body'],1,1000)) {
                $errors['body'] = 'Note body must be between 1 and 1000 characters long.';
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