<?php
    class Database {
        private $hostname = "localhost";
        private $dbname = "ideaception"; 
        private $user = "root";
        private $password = "";
        private $conn;

        public function connect() {
            $this->conn = null;

            try {
                $this->conn = new PDO("mysql:host=".$this->hostname.";dbname=".$this->dbname, $this->user, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOExeption $e) {
                echo 'Connection error: '.$e->getMessage();
            }
            return $this->conn;
        }
    }
?>