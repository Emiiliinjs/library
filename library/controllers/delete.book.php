<?php


require "Database.php";
$config = require("config.php");

$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Start a transaction
    $db->beginTransaction();
    
    try {
        // Delete the related rows from the borrowed table
        $query = "DELETE FROM borrowed WHERE bookId = :id";
        $params = [ ":id" => $_POST["id"]];
        $db->execute($query, $params);
        
        // Delete the book
        $query = "DELETE FROM books WHERE id = :id";
        $db->execute($query, $params);
        
        // Commit the transaction
        $db->commit();
        
    } catch (Exception $e) {
        // Rollback the transaction if something failed
        $db->rollBack();
        throw $e;
    }
}

header("Location: /");
die();
