<?php
  include_once("Connect.php");
  class Functions
  {

    public function getEmployee($where) {

      $connect = new Connect();
      $queryConstuctor = "
        SELECT *
        FROM `ems`.`Employee`
        $where;";
      return $connect->queryConnection($queryConstuctor);
    }
  }
?>