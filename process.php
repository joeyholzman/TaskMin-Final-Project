<?php

    require_once('config.php');

    if(isset($_POST['register']))
    {
        $UserName = mysqli_real_escape_string($conn,$_POST['username']);
        $Password = mysqli_real_escape_string($conn,$_POST['password']);

        $query = "insert into login (Username,Password) values ('$UserName','$Password')";
        $result = mysqli_query($conn,$query);

        if($result)
        {
        header('Location: MinLog.html');

        }
        else
        {
        echo 'Error, please try again.';
        }
    }
?>
