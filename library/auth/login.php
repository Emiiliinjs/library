<?php


guest();

require "Validator.php";
require "Database.php";
$config = require("config.php");

$db = new Database($config);


$errors = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (!Validator::email($_POST["email"])) {
    $errors["email"] = "Nepareizs epasta formāts";
  }


  if (empty($errors)) {
    $query = "SELECT * FROM users WHERE email = :email";
    $params = [":email" => $_POST["email"]];
    $user = $db->execute($query, $params)->fetch();


    if (!$user || !password_verify($_POST["password"], $user["password"])) {
      $errors["email"] = "Nepareizi ievadīts epasts vai parole";
    }
  }


  if (empty($errors)) {
    $_SESSION["user"] = true;
    $_SESSION["email"] = $_POST["email"];
    header("Location: /");
    exit();
  }
}


$title = "Login";


require "views/login.view.php";


unset($_SESSION["flash"]);
