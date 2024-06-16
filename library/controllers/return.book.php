<?php

require 'database.php';
$config = require 'config.php';


$db = new Database($config);


if (isset($_POST['return-button'])) {

    $bookId = $_POST['bookId'];


    $db->returnBook($bookId);


    header("Location: /");
    exit();
}
