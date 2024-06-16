<?php


require "Validator.php";
require "Database.php";


$config = require "config.php";


$db = new Database($config);


$errors = [];
$title = "";
$author = "";
$year = "";
$id = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"] ?? "";
    $title = $_POST["title"] ?? "";
    $author = $_POST["author"] ?? "";
    $year = $_POST["year"] ?? "";


    if (!Validator::string($title, 1, 255)) {
        $errors["title"] = "Title cannot be empty or too long";
    }
    if (!Validator::string($author, 1, 255)) {
        $errors["author"] = "Author cannot be empty or too long";
    }
    if (!Validator::number($year, 1, 2024)) {
        $errors["year"] = "Invalid Year";
    }


    if (empty($errors)) {
        $query = "UPDATE books
                  SET title = :title, author = :author, year = :year
                  WHERE id = :id";
        $params = [
            ":title" => $title,
            ":author" => $author,
            ":year" => $year,
            ":id" => $id
        ];
        $db->execute($query, $params);

        header("Location: /");
        exit();
    }
} elseif (isset($_GET["id"])) {

    $id = $_GET["id"];
    $query = "SELECT * FROM books WHERE id = :id";
    $params = [":id" => $id];
    $book = $db->execute($query, $params)->fetch();


    if ($book) {
        $title = $book["title"];
        $author = $book["author"];
        $year = $book["year"];
    } else {

        header("Location: /");
        exit();
    }
}


$title = "Edit Book";
require "views/edit.book.view.php";
