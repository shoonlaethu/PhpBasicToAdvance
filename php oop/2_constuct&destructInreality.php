<?php
class Database {
    private $connection;

    // Constructor: Initialize the database connection
    public function __construct($host, $username, $password, $dbname) {
        $this->connection = new mysqli($host, $username, $password, $dbname);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }

        echo "Connected successfully to the database.\n";
    }

    // Method to query the database
    public function query($sql) {
        $result = $this->connection->query($sql);

        if ($result === FALSE) {
            echo "Error: " . $this->connection->error . "\n";
        } else {
            return $result;
        }
    }

    // Destructor: Close the database connection
    public function __destruct() {
        if ($this->connection) {
            $this->connection->close();
            echo "Database connection closed.\n";
        }
    }
}

// Usage
$host = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Create an instance of the Database class
$db = new Database($host, $username, $password, $dbname);

// Perform a query
$sql = "SELECT * FROM users";
$result = $db->query($sql);

if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row["username"] . "\n";
    }
}

// The destructor is called automatically at the end of the script
