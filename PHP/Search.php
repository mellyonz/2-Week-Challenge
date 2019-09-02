<?php
  include "Session.php";
  include "Functions.php";
  class Search extends Functions
  {
    public function initSearch(){
      $employee = "";
      $department = "";
      $ageLow = 0;
      $ageHigh = 100;
      $manager = "";
      
      if($_GET['employee'] !== ""){
        $_SESSION['console'] .= '\n' . 'Employee name entered: ' . $_GET['employee'];
        $employee = $_GET['employee'];
      }
      if($_GET['department'] !== ""){
        $_SESSION['console'] .= '\n' . 'Department selected: ' . $_GET['department'];
        $department = $_GET['department'];
      }
      if($_GET['ageLow'] !== ""){
        $_SESSION['console'] .= '\n' . 'Lower age entered: ' . $_GET['ageLow'];
         $ageLow = $_GET['ageLow'];
      }
      if($_GET['ageHigh'] !== ""){
        $_SESSION['console'] .= '\n' . 'Higher age entered: ' . $_GET['ageHigh'];
        $ageHigh = $_GET['ageHigh'];
      }
      if($_GET['manager'] !== ""){
        $_SESSION['console'] .= '\n' . 'Manager entered: ' . $_GET['manager'];
        $manager = $_GET['manager'];
      }
      
      $where = "
        WHERE `EmployeeName` LIKE '%$employee%'
        AND `Department` LIKE '%$department%'
        AND `Age` BETWEEN $ageLow AND $ageHigh
        AND `Manager` LIKE '%$manager%';";

       #$_SESSION['console'] .= '\n' . 'Query: ' . $where;

      $employee = parent::getEmployee($where);
      
      $count = 0;
      $table;
      $rankOrder;
      
      foreach($employee as $key=>$value) {
        $EmployeeID = $employee[$key]["EmployeeID"];
        $EmployeeName = $employee[$key]["EmployeeName"];
        $Age = $employee[$key]["Age"];
        $Gender = $employee[$key]["Gender"];
        $Department = $employee[$key]["Department"];
        $Manager = $employee[$key]["Manager"];
        $Salary = $employee[$key]["Salary"];
        $DateJoined = $employee[$key]["DateJoined"];

        $table .= "<tr> <td>$EmployeeID</td> <td>$EmployeeName</td> <td>$Age</td> <td>$Gender</td> <td>$Department</td> <td>$Manager</td> <td>$Salary</td> <td>$DateJoined</td> </tr>";
      }
      $_SESSION['console'] .= '\n' . 'Table generated';
      header("location: http://localhost/2-Week-Challenge/EmployeeSearch.php?table=". $table);
    }
  }
    if($_SERVER["REQUEST_METHOD"] == "GET") {
    $search = new Search();
    $search->initSearch();
  }
?>