<!-- login validation by searching for unique user table created in register -->

<?php
    require_once('config.php');

    if(isset($_POST['login']))
    {
      if(isset($_POST["username"])){
        $Username = mysqli_real_escape_string($conn,$_POST['username']);
      }

      if(isset($_POST["password"])){
        $Password = mysqli_real_escape_string($conn,$_POST['password']);
      }

      $finder = $Username.$Password;

      $sql = "SHOW TABLES";
      $result = mysqli_query($conn, $sql);


      if($result){
        while($row = $result->fetch_assoc()){
          if($row["Tables_in_mintask"] == $finder){
            header('Location: Calendar.php');
            exit();
          }
        }
      }
      else {
        header('Location: MinLog.html');
        exit();
    }
  }
?>
