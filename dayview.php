<html>
<body>

  <form action="dayview.php" method="post">
  <input type = "submit" name = "back" value = "Back to Calendar"></button>
  </form>

<?php

require_once('config.php');

if(isset($_POST["submit"])){
  if(isset($_POST["day"])){
    $day = intval($_POST["day"]);

    echo "<h1>November ".$day.", 2022</h1>";

    $user = mysqli_real_escape_string($conn,$_POST['user']);

    $query = "SELECT title, descrip FROM $user WHERE day = $day";

    $result = mysqli_query($conn, $query);

    echo "<table>";
    while($row = mysqli_fetch_array($result)){
      echo "hi";
      echo($row['title']);
      //echo "<tr><td>".htmlspecialchars($row['title'])."</td><td>".htmlspecialchars($row['descrip'])."</td></tr>";
      }
    echo "</table>";
    }
    else{
      echo "Please select a day!";
    }
  }

if(isset($_POST["back"])){
  header("Location: http://localhost:8888/Calendar.php");
}

?>

</body>
</html>
