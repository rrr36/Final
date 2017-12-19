<?php
    $dsn = 'mysql:host=sql1.njit.edu;dbname=rrr36';
    $username = 'rrr36';
    $password = 'RV1oUgoVS';
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>