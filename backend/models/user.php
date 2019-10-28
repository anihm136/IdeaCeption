<?php
class User {
  private $conn;
  private $table = 'users';

  public $id;
  public $name;
  public $email;
  public $passwd;
  public $user_status;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function userAuth() {
    $query = 'SELECT passwd FROM ' .$this->table. ' WHERE name=:name OR email=:email';

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name',$this->name);
    $stmt->bindParam(':email',$this->email);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$res) {
      echo "User does not exist";
    } elseif ($this->passwd !== $res['passwd']) {
      echo "Wrong password";
    } else {
      echo "User Authorised";
    }
  }

  public function signUp() {
    $query = 'INSERT INTO ' .$this->table. ' (name, email, passwd) VALUES (:name, :email, :passwd)';

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':passwd', $this->passwd);
    try {
      $stmt->execute();
      echo "User created";
    } catch (PDOException $e) {
      // echo "CODE: ".$e->getCode();
      if ($e->getCode() == 23000) {
        echo "Username or email already exists";
      } else {
        throw($e);
      }
    }
  }

}
?>
