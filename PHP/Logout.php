<?php
//session contrains a logout or a end session function
  include "Session.php";  
  class Logout extends Session
  {
    function logout()
    {
      //this will end the session and basicly log the user out since there is no stored username
      parent::sessionClose();
    }
  }
  //new logout
  $logout = new Logout();
  //function for checking the password
  $logout->logout();
?>