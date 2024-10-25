<?php
class Database {
    private $host = 'localhost';
    private $dbname = 'bd_ieela';
    private $username = 'root';
    private $password = '';
    private $conn;

    // Method to get the database connection
    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $this->conn;
    }
}
?>
