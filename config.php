<!-- called by process php files to reduce redundency -->
<!-- creates initial database connection -->
<?php
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'mintask';

  $conn = mysqli_connect($db_host, $db_user, $db_password, $db_db);

  if(!$conn){
    die("Connection failed.");
  }
?>
