<?php
    $dsn = 'mysql:host=localhost;dbname=brass_shoppe';
    $username = 'root';
    $password = null;

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $$error_message = $e->getMessager();
        include('database_error.php');
        exit();
    }
    ?>