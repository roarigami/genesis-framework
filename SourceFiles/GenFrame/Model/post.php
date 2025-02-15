<?php
declare(strict_types=1);

namespace CrudFrame\Model;
class Post

{

  protected $dbc

  public function storePost($imgUrl, $data) {

    $data['thumbnail'] = $imgUrl;
    $sql = sprintf(
            "INSERT INTO %s (%s) VALUES(%s)",
            "posts",
            ":" . implode(', :', array_keys($data))
      );

      try {

        $stmt = $this->dbc->prepare($sql);
        $stmt->execute($data);

        ob_start();
        session_start();
        $SESSION['post_success_flash'] = "Post added successfully!";

        header("Location: /home")

      } catch(\Throwable $th) {
          die($th->message)
      }


  }





}
