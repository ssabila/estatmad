<?php
// Database configuration
class Database {
    private $host = 'localhost';
    private $db_name = 'projec15_estatmad';
    private $username = 'projec15_root';
    private $password = '@kaesquare123';
    private $conn = null;

    public function getConnection() {
        if ($this->conn === null) {
            try {
                $this->conn = new PDO(
                    "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8",
                    $this->username,
                    $this->password,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            } catch(PDOException $e) {
                die("Connection error: " . $e->getMessage());
            }
        }
        return $this->conn;
    }
}
?>
