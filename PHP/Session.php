<?php
  //test session validation
  //session_id( 'newID' );
  session_start();
  //check the userName and active user information
  include("SessionManagment.php");
  //Clear Session Database 
  //session_unset(); session_destroy();
  //$_SESSION['loginLogout'] = "<script>document.getElementById('login').style.display = 'none';</script>";
 
  class Session implements SessionManagment
  {
    function sessionStart(){
     if (!isset($_SESSION['serverStarted'])){
        $_SESSION['console'] = "Log Start";
        $_SESSION['serverStarted'] = true;
        $_SESSION['login_user'] = "";
        $_SESSION['errorLogin'] = "";
        $_SESSION['errorSearch'] = "";
        include("Server/ServerLauncher.php");
        $server = new ServerLauncher();
        $server->startServer();
        $_SESSION['loginLogout'] = "<script>document.getElementById('logout').style.display = 'none';</script>";
      }
      //set varables if not logged in
      if (!isset($_SESSION['login_user'])){
        $_SESSION['loginLogout'] = "<script>document.getElementById('login').style.display = 'none';</script>";
      }
      //console started
      function logToBrowserConsole ( $msg ) {
          echo "<script>console.log( \"PHP LOG: $msg\" );</script>";
      }
    }
    function sessionClose(){
      session_unset(); session_destroy();
      header("location: http://localhost/2-Week-Challenge/EmployeeSearch.php");
    }
  }
  $session = new Session();
  $session->sessionStart();
?>