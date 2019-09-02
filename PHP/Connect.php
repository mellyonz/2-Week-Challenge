<?php
  include("Server/Connection.php");
  class Connect implements Connection
  {
    function __construct() {
      try {
        require 'Server/ServerAddress.php';
        $this->conn = new PDO($address, $user, $pass, $options);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $_SESSION['console'] .= '\n' . "Connected successfully"; 
        }
      catch(Exception $e){
          $_SESSION['console'] .= '\n' . $e->getMessage();
        }
    }
    
    public function queryConnection($query) {
      $stmt = $this->conn->query($query);
      return $stmt->fetchAll();
    }
  }
?>