<?php
class Post {
  private $conn;
  private $table = 'ideas';

  public $id;
  public $name;
  public $title;
  public $time;
  public $content;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function postUp(){
    $query = 'INSERT INTO ' .$this->table. ' (name, title,content) VALUES (:name, :title,:content)';

    // $hashed_pass = password_hash($this->passwd, PASSWORD_BCRYPT);
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':title', $this->title);
    // $stmt->bindParam(':time', $this->time);
    $stmt->bindParam(':content', $this->content);

    try {
        $stmt->execute();
        $post_obj = array("id"=>$this->id, "name"=>$this->name, "title"=>$this->title,"content"=>$this->content);
        $_SESSION["recent_post"] = $post_obj;
        echo json_encode($_SESSION["recent_post"]);
      } catch (PDOException $e) {
         if ($e->getCode() == 23000) {
             echo 0;
        } else {
          echo -1;
        }
        }
  }
}

  ?>
