var el = document.getElementById("removeScore");
el.onclick = function(){
  var xhttp = new XMLHttpRequest();
  var r = confirm("Are you sure you want to delete your score");
  if (r == true) {
    window.location.href = "PHP/DeleteAllScore.php";
  }
}