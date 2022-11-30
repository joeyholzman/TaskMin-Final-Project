<!-- creates unique table for user with columns for adding new tasks or events -->


<?php

    require_once('config.php');

    if(isset($_POST['register'])){

        if(isset($_POST["username"])){
          $Username = mysqli_real_escape_string($conn,$_POST['username']);
        }

        if(isset($_POST["password"])){
          $Password = mysqli_real_escape_string($conn,$_POST['password']);
        }

        #The table will be titled as the concatentation of the username and password
        $finder = $Username.$Password;

        $query = "CREATE TABLE $finder
        (day int,
        title text,
        descrip text
        )";

        if($Username == "" or $Password == ""){
          echo "Cannot leave blank fields! ";
        }
        else{
          $result = mysqli_query($conn,$query);
        }

        if($result)
        {
        header('Location: MinLog.php');

        }
        else
        {
        echo 'Error, please try again.';
        }
    }

?>
