<?php
  include "Session.php";
  class Login
  {
    var $username = "";
    var $password = "";
    public function __construct() {
      $this->username = $_POST['username'];
      $this->password = $_POST['password'];
    }
    
    public function Login(){
      $valid = true;
      if($valid) {
          $_SESSION['loginLogout'] = "<script>document.getElementById('login').style.display = 'none';</script>";
          $_SESSION['login_user'] = $this->username;
          header("location: http://localhost/2-Week-Challenge/EmployeeSearch.php");
        }else {
          $_SESSION['console'] .= '\n' . ": Your Login Name or Password is invalid";
          $_SESSION['errorLogin'] = "Your Login Name or Password is invalid";
          header("location: http://localhost/2-Week-Challenge/EmployeeSearch.php");
      }
    }
  }
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    //reset error
    $_SESSION['errorLogin'] = "";
    //username and password sent from form 
    $loginScript = new Login();
    //function for checking the password
    $loginScript->Login();
  }
?>