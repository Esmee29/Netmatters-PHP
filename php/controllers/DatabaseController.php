
<?php

require_once 'vendor/autoload.php'; // Include Composer's autoloader

use Dotenv\Dotenv;

class DatabaseController {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . '/../../'); // Adjust the path as per your project structure
        $dotenv->load();

        try {
            $this->host = $_ENV['MySQL_DB_HOST'];
            $this->username = $_ENV['MySQL_DB_NAME'];
            $this->password = $_ENV['MySQL_DB_PASSWORD'];
            $this->database = $_ENV['MySQL_DB_USER_NAME'];
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage() . "<br>";
            exit;
        }
    }

    /**
     * Connects to the database.
     * It creates a new PDO connection to the database.
     * It sets the error mode to exception.
     * It returns true if the connection is successful.
     */
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
    
    /**
     * Disconnects from the database.
     */
    public function disconnect() {
        $this->connection = null;
    }

    /**
     * Executes a query on the database.
     * It prepares the query and executes it.
     * It returns the result of the query execution.
     * It catches the exception and prints the error message.
     *
     * @param string $query The query to be executed.
     * @return mixed The result of the query execution.
     */
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