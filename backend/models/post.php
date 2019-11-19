<?php
class Post {
  private $conn;
  private $table = 'post';

  public $id;
  public $name;
  public $title;
  public $time;
  public $content;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function postUp(){
    $query = 'INSERT INTO ' .$this->table. ' (name, title, time,content) VALUES (:name, :title, :time,:content)';

    // $hashed_pass = password_hash($this->passwd, PASSWORD_BCRYPT);
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':title', $this->title);
    $stmt->bindParam(':time', $this->time);
    $stmt->bindParam(':content', $this->content);

    try {
        $stmt->execute();
        // session_start();
        $post_obj = array("id"=>$this->id, "name"=>$this->name, "title"=>$this->title,"time"=>$this->time,"content"=>$this->content);
        $_SESSION["recent_post"] = $post_obj;
        echo json_encode($_SESSION["recent_post"]);
      } catch (PDOException $e) {
        //  echo "CODE: ".$e->getCode();
         if ($e->getCode() == 23000) {
             echo 0;
        } else {
          echo -1;
        }
        }
  }
}

  ?>