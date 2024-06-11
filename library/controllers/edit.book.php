
<?php

// Include necessary files
require "Validator.php";
require "Database.php";

// Load configuration
$config = require("config.php");

// Create a new instance of the Database class
$db = new Database($config);

// Initialize variables
$errors = [];
$title = "";
$author = "";
$year = "";
$id = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST["id"] ?? "";
    $title = $_POST["title"] ?? "";
    $author = $_POST["author"] ?? "";
    $year = $_POST["year"] ?? "";

    // Validate form data
    if (!Validator::string($title, min: 1, max: 255)) {
        $errors["title"] = "Title cannot be empty or too long";
    }
    if (!Validator::string($author, min: 1, max: 255)) {
        $errors["author"] = "Author cannot be empty or too long";
    }
    if (!Validator::number($year, min: 1, max: 2030)) {
        $errors["year"] = "Invalid Year";
    }

    // If there are no errors, update the book record
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

        // Redirect to homepage after successful update
        header("Location: /");
        exit();
    }
} elseif (isset($_GET["id"])) {
    // If the page is accessed via GET with an "id" parameter,
    // fetch the book data from the database and populate the form
    $id = $_GET["id"];
    $query = "SELECT * FROM books WHERE id = :id";
    $params = [":id" => $id];
    $book = $db->execute($query, $params)->fetch();

    // Populate form fields with book data
    $title = $book["title"];
    $author = $book["author"];
    $year = $book["year"];
}

// Display the edit book form
$title = "Edit Book";
require "views/edit.book.view.php";
