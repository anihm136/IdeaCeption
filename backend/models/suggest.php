<?php
Class Suggest {
  private $conn;
  private $table = 'comments';

  public $id;
  public $post_id;
  public $comment;
  public $user;
  public $time;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function comment(){
    $query = 'INSERT INTO ' .$this->table. ' (post_id, comment, user) VALUES (:post_id, :comment, :user)';

    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':post_id', $this->post_id);
    $stmt->bindParam(':comment', $this->comment);
    $stmt->bindParam(':user', $this->user);

    try {
      $stmt->execute();
      $this->id =  $this->conn->lastInsertId();
    } catch (PDOException $e) {
      if ($e->getCode() == 23000) {
        echo $e->getMessage();
        $stmt->debugDumpParams();
      } else {
        echo -1;
      }
    }
  }

}
?>
