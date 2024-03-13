<?php
include("dbConnection.php"); // Include the file where $conn is defined

function postData($name, $email, $company, $telephone, $message, $marketing)
{
    global $conn; // Access the $conn variable defined in dbConnection.php

    try {
        // Prepare the SQL statement
        $sql = $conn->prepare("INSERT INTO contact (name, company, email, telephone, message, marketing) VALUES (:name, :company, :email, :telephone, :message, :marketing)");

        // Bind parameters
        $sql->bindParam(":name", $name, PDO::PARAM_STR);
        $sql->bindParam(":email", $email, PDO::PARAM_STR);
        $sql->bindParam(":company", $company, PDO::PARAM_STR); // Changed from 'company_name' to 'company'
        $sql->bindParam(":telephone", $telephone, PDO::PARAM_STR);
        $sql->bindParam(":message", $message, PDO::PARAM_STR);
        $sql->bindParam(":marketing", $marketing, PDO::PARAM_STR);

        // Execute the query
        $sql->execute();
        
        return true;
    } catch (PDOException $pe) {
        echo 'Unable to send data ' . $pe->getMessage();
        return false; // Return false to indicate failure
    }
}
