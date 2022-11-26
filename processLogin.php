<?php

    require_once('config.php');

    if(isset($_POST['login']))
    {
        $UserName = mysqli_real_escape_string($conn,$_POST['username']);
        $Password = mysqli_real_escape_string($conn,$_POST['password']);

      $sql = "SELECT * FROM login WHERE Username='$UserName' AND Password='$Password'";
      $result = mysqli_query($conn,$sql);

      if (mysqli_num_rows($result) === 1) {

          $row = mysqli_fetch_assoc($result);

          if ($row['Username'] === $UserName && $row['Password'] === $Password) {

          header('Location: Calendar.html');
          exit();
        }
      }
      else {
        header('Location: Register.html');
        exit();
      }

  }
?>
