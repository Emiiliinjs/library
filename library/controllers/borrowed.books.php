<?php

if (!$_SESSION["user"]) {
  header("Location: /login");
  die();
}

require "Database.php";

$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM borrowed";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
  $id = $_GET["id"];
  $query .= " WHERE id=:id";
  $params[":id"] = $id;
};

$books = $db
          ->execute($query, $params)
          ->fetchAll();

          $title = "Borrowed Books";
require "views/borrowed.books.view.php";