<?php
    class User {
        private $conn;
        private $table = 'accounts';
        
        public $id;
        public $name;
        public $email;
        public $passwd;
        public $user_status;

        public function __construct($db) {
            $this->conn = $db;
        }

        public function userAuth() {
            // echo $this->name;
            // echo gettype($this->name);
            $query = 'SELECT passwd FROM ' .$this->table. ' WHERE name=:name OR email=:email';
            // $query = 'SELECT passwd FROM '.$this->table.' WHERE id=1 OR id=2';

            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name',$this->name);
            $stmt->bindParam(':email',$this->email);
            $stmt->execute();
            if (!$stmt) {
                echo "User does not exist";
            } elseif ($this->passwd !== $stmt->fetch(PDO::FETCH_ASSOC)['passwd']) {
                echo "Wrong password";
            } else {
                echo "User Authorised";
            }
            // var_dump($stmt->fetchAll(PDO::FETCH_OBJ));
            echo $stmt->fetch(PDO::FETCH_ASSOC)['passwd'];
        }
    }
?>