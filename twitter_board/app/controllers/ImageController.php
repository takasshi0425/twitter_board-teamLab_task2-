<?php
define("Consumer_Key", "7ZkCPLbcqxujtYRrSM07Dgd35"); //Consumer Key (API Key)
define("Consumer_Secret", "5qGEnBqfR64JPg0WAAotBuX955amMUx0vTlA3gm762Zo2DDjnc");//Consumer Secret (API Secret)
require "twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class ImageController extends ControllerBase
{
  public function indexAction(){

  }

  public function changeAction(){  //画像の変更 （迷走中、できていません）

    if ($this->request->hasFiles()) {
      $img = $this->request->getUploadedFiles();
      foreach ($files as $file) {
        echo $file->getName(), ' ', $file->getSize(), '\n';
      }
      $image = base64_encode(file_get_contents("$img"));
      $image_connection = new TwitterOauth(Consumer_Key, Consumer_Secret, $this->session->get("access_oauth"), $this->session->get("access_secret"));
      $result = $image_connection->post("account/update_profile_image".["image"=>$image]);
      echo "$result";
    }else{
      echo "error";
    }
  }
}
