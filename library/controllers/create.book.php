<?php

require "Database.php";
require "Validator.php";
$config = require "config.php";

$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = [];


    if (!Validator::string($_POST["title"], 1, 255)) {
        $errors["title"] = "Title cannot be empty or too long";
    }


    if (!Validator::string($_POST["author"], 1, 255)) {
        $errors["author"] = "Author cannot be empty or too long";
    }


    if (!Validator::number($_POST["year"], 1, 2024)) {
        $errors["year"] = "Invalid year";
    }


    if (!isset($_POST["availability"]) || !Validator::number($_POST["availability"], 0, 1)) {
        $errors["availability"] = "Invalid availability";
    }


    if (empty($errors)) {
        $query = "INSERT INTO books (title, author, year, availability) VALUES (:title, :author, :year, :availability)";
        $params = [
            ":title" => $_POST["title"],
            ":author" => $_POST["author"],
            ":year" => $_POST["year"],
            ":availability" => $_POST["availability"]
        ];
        $db->execute($query, $params);

        header("Location: /");
        exit();
    }
}


$title = "Create Book";


require "views/create.book.view.php";
