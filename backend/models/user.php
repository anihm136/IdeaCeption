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
    $query = 'SELECT * FROM ' .$this->table. ' WHERE name=:name OR email=:email';

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name',$this->name);
    $stmt->bindParam(':email',$this->email);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$res) {
      echo 0;
    } elseif ($this->passwd !== $res['passwd']) {
      echo 1;
    } else {
      session_start();
      $user_obj = array("id"=>$res['id'], "name"=>$res['name'], "status"=>$res['user_status']);
      $_SESSION["current_user"] = $user_obj;
      echo json_encode($_SESSION['current_user']);
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
