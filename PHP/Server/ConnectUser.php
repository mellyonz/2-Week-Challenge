<?php
  interface ConnectUser
  {
    public function login($username, $password);
    public function loginActive();
  }

?>