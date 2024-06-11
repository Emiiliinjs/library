<?php

require "Database.php";
$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM books WHERE id = :id";
$params = [":id" => $_GET["id"]];

$book = $db->execute($query, $params)->fetch();

if ($book) {
    $title = "Book";
    require "views/show.book.view.php";
} else {
    echo "No book found with the given ID.";
}