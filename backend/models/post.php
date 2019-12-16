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

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':title', $this->title);
    $stmt->bindParam(':content', $this->content);

    try {
        $stmt->execute();
  $this->id =  $this->conn->lastInsertId();
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

  public function getPosts($pagenum, $num_per_page) {
    $query = 'SELECT COUNT(id) FROM ' .$this->table;
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    $num_entries = $res["COUNT(id)"];
    settype($num_entries, "integer"); 
    settype($pagenum, "integer"); 
    settype($num_per_page, "integer"); 

    $query = 'SELECT * FROM ' .$this->table. ' ORDER BY time DESC LIMIT :limit OFFSET :offset';
    $stmt = $this->conn->prepare($query);
    $offset = ($pagenum - 1) * $num_per_page ;
    $stmt->bindParam(':limit', $num_per_page, PDO::PARAM_INT);
    $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
    try {
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      echo json_encode($res);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

  }

  public function getPost($id)
  {
    $query = 'SELECT * FROM ' . $this->table. ' WHERE id = ?';
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(1, $id);
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$res) {
      // echo 0;
    } else {
      $this->id = $id;
      $this->name = $res['name'];
      $this->title = $res['title'];
      $this->content = $res['content'];
      $this->time = $res['time'];
      // echo json_encode($this);
    }
  }

 /*  public function getAuthor($id) { */
    // $query = 'SELECT name FROM ' . $this->table. ' WHERE id = ?';
    // $stmt = $this->conn->prepare($query);
    // $stmt->bindParam(1, $id);
    // $stmt->execute();
    // $res = $stmt->fetch(PDO::FETCH_ASSOC);
//
    // if (!$res) {
      // // echo 0;
    // } else {
      // echo res['name'];
    // }
//
  /* } */
  
}

  ?>
