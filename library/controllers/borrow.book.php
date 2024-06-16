<?php

require 'database.php';
$config = require 'config.php';

$db = new Database($config);

if (isset($_POST['borrow-button'])) {

    $bookId = $_POST['bookId'];


    $db->borrowBook($bookId);

    header("Location: /");
    exit();
}


$title = "Borrowed Books";

