<?php
  include "Session.php";
  include "ConnectionStream.php";
  $_SESSION['lowerLimit'] = 0;
  $_SESSION['upperLimit'] = 100;
  $_SESSION['where'] = "";
  $_SESSION['sort'] = "ORDER BY `userScore` DESC";
  $_SESSION['console'] .= '\nReset';
  header("location: http://localhost/ScoreboardAssignment2/Leaderboard.php");
?>