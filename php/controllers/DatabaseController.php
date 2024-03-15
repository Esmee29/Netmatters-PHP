<?php

class DatabaseController {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function disconnect() {
        $this->connection = null;
    }

    public function query($query) {
        try {
            $statement = $this->connection->prepare($query);
            if ($statement === false) {
                throw new PDOException('Failed to prepare statement');
            }

            $success = $statement->execute();
            if ($success === false) {
                throw new PDOException('Failed to execute statement');
            }
            
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error selecting data: " . $e->getMessage();
        }
    }
}
?>