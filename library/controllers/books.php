<?php
// Start the session if it's not already active
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Redirect to login page if user is not authenticated
if (!isset($_SESSION["user"])) {
    header("Location: /login");
    exit();
}

// Include required files
require "Database.php";
$config = require "config.php";

// Initialize the database connection
$db = new Database($config);

// Prepare the query to fetch books
$query = "SELECT * FROM books";
$params = [];

// Check if an ID is provided in the GET request
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $query .= " WHERE id = :id";
    $params[":id"] = $_GET["id"];
}

// Execute the query and fetch all books
$books = $db->execute($query, $params)->fetchAll();

// Set the page title and include the view
$title = "Books";
require "views/books.view.php";
