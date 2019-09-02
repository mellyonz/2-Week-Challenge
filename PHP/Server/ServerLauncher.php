<?php
  include 'ConnectServer.php';
  class ServerLauncher 
  {
    public function startServer(){
      try {
        require 'ServerAddress.php';
        $conn = new PDO($address, $user, $pass, $options);
        $conn->exec(file_get_contents("http://localhost/2-Week-Challenge/PHP/Server/Database.sql"));
        $conn->exec(file_get_contents("http://localhost/2-Week-Challenge/PHP/Server/DatabaseInformation.sql"));
        $_SESSION['console'] .= '\n' . "Server Started";
      } catch (Exception $e) {
        $_SESSION['console'] .= $e->getMessage();
      }
    }
  }
?>