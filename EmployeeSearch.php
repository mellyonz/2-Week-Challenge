<?php
  include "PHP/Session.php";
  //var_dump($_SESSION['language']);
  //echo "$_SESSION['loginLogout']";
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Baghchal Gaming Community Social Media site">
  <meta name="keywords" content="Social,Media,Baghchal,Community">
  <meta name="author" content="Kieran Abelen">
  <title>Bagh-Chal Community - Leaderboard</title>
  <!-- BOOSTRAP-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
  <!-- LOGO AND TITLE -->
  <div id="banner">
    <h1>Search Database</h1>
    
    <!-- If the user isn't logged in show the username and password input-->
    <form id="login" action="PHP/Login.php" method="post">
      <p>Username</p><input type="text" name="username"><br><br>
      <p>Password</p><input type="password" name="password"><br><br>
      <input id="subbtn" class="btn btn-warning" type="submit" value="Submit">
      <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $_SESSION['errorLogin']; ?></div>
    </form>
      
    <!-- If the user is logged in show the sign out button -->
    <!-- LOGOUT BUTTON -->
    <div id="logout"><h2 ><a href = "PHP/Logout.php"><?php echo 'Logout'?></a></h2></div>
    <!-- Hide or show the login or logout -->
    <?php
      echo $_SESSION['loginLogout'];
      //echo "<script>document.getElementById('myDIV').style.display = 'none';</script>";
    ?>
  </div>

  <div id="main">
    <div id="content">
      <form id="search" action="PHP/Search.php" method="GET">
        <label>Employee Name:&nbsp;</label><input type="text" name="employee"><br><br>
        <label>Department:&nbsp;</label>
        <select name="department">
          <option value="">Any</option>
          <option value="Computing">Computing</option>
          <option value="Nursing">Nursing</option>
          <option value="Engineering">ARA</option>
        </select><br><br>
        <label>Age Range:&nbsp;</label><input type="number" name="ageLow" min="1" max="100"><label>-</label><input type="number" name="ageHigh" min="1" max="100"><br><br>
        <label>Manager Name:&nbsp;</label><input type="text" name="manager"><br><br>
        <input id="srchbtn" class="btn btn-warning" type="submit" value="Search">
        <input id="rstbtn" class="btn btn-warning" type="submit" value="Reset" />
        <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $_SESSION['errorSearch']; ?></div>
      </form>
      
      <table class="table">
        <thead class="thead-dark">
          <th scope="col">Employee Id</th>
          <th scope="col">Employee Name</th>
          <th scope="col">Age</th>
          <th scope="col">Gender</th>
          <th scope="col">Department</th>
          <th scope="col">Manager</th>
          <th scope="col">Salary</th>
          <th scope="col">Date of Joining</th>
        </thead>
        <?php
          if($_GET){
              echo $_GET['table'];      
          }
        ?>
      </table>
    </div >
 </div>

  <footer>
  </footer>
</body>
</html>
<?php
  logToBrowserConsole($_SESSION['console']);
?>