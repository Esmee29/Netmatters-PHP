<?php
require_once 'config.env';
try {
    $conn = new PDO("mysql:host=".$host.";dbname=".$dbname, $username, $password);
} catch (PDOException $e) {
    die("Could not connect to the database ".$dbname.": " . $e->getMessage());
}
?>
