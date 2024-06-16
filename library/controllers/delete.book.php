<?php


require "Database.php";
$config = require "config.php";


$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db->beginTransaction();
    
    try {

        $query = "DELETE FROM borrowed WHERE bookId = :id";
        $params = [":id" => $_POST["id"]];
        $db->execute($query, $params);
        

        $query = "DELETE FROM books WHERE id = :id";
        $db->execute($query, $params);
        

        $db->commit();
        
    } catch (Exception $e) {

        $db->rollBack();
        throw $e;
    }
}


header("Location: /");
exit();
