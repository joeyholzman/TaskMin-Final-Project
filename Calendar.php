<!DOCTYPE html>
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

  $login = 0;
  if($result){
    while($row = $result->fetch_assoc()){
      if($row["Tables_in_mintask"] == $finder){
        $login++;
      }
    }
    if($login == 0){
      header('Location: http://localhost:8888/fail.htm');
      exit();
      }
    }
  else {
    echo "Error";
    exit();
  }
}

session_start();
if((!isset($_SESSION["user"]) and (!isset($_SESSION["person"])))){
  $user = strval($_POST["username"]);
  $pass = strval($_POST["password"]);
  $_SESSION["user"] = $user.$pass;
  $_SESSION["person"] = $user;
  echo "Welcome, ".$_SESSION["person"];
} else {
  echo "Welcome, ".$_SESSION["person"];

  if(isset($_POST["logout"])){
    session_destroy();
    header("Location: http://localhost:8888/Minlog.php");
  }
}
 ?>

<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
</style>
</head>
<body>

<form action="Calendar.php" method="post">
<input type = "submit" name = "logout" value = "Log Out"></button>
</form>

<div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      November<br>
      <span style="font-size:18px">2022</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <form action="dayview.php" method="post">
  <li><input type="radio" id="1" name="day" value="1">
    <label for="1">1</label><br>
  <li><input type="radio" id="2" name="day" value="2">
    <label for="2">2</label><br>
  <li><input type="radio" id="3" name="day" value="3">
    <label for="3">3</label><br>
  <li><input type="radio" id="4" name="day" value="4">
    <label for="4">4</label><br>
  <li><input type="radio" id="5" name="day" value="5">
    <label for="5">5</label><br>
  <li><input type="radio" id="6" name="day" value="6">
    <label for="6">6</label><br>
  <li><input type="radio" id="7" name="day" value="7">
    <label for="1">7</label><br>
  <li><input type="radio" id="8" name="day" value="8">
    <label for="8">8</label><br>
  <li><input type="radio" id="9" name="day" value="9">
    <label for="9">9</label><br>
  <li><input type="radio" id="10" name="day" value="10">
    <label for="10">10</label><br>
  <li><input type="radio" id="11" name="day" value="11">
    <label for="11">11</label><br>
  <li><input type="radio" id="12" name="day" value="12">
    <label for="12">12</label><br>
  <li><input type="radio" id="13" name="day" value="13">
    <label for="13">13</label><br>
  <li><input type="radio" id="14" name="day" value="14">
    <label for="14">14</label><br>
  <li><input type="radio" id="15" name="day" value="15">
    <label for="15">15</label><br>
  <li><input type="radio" id="16" name="day" value="16">
    <label for="16">16</label><br>
  <li><input type="radio" id="17" name="day" value="17">
    <label for="17">17</label><br>
  <li><input type="radio" id="18" name="day" value="18">
    <label for="18">18</label><br>
  <li><input type="radio" id="19" name="day" value="19">
    <label for="19">19</label><br>
  <li><input type="radio" id="20" name="day" value="20">
    <label for="20">20</label><br>
  <li><input type="radio" id="21" name="day" value="21">
    <label for="21">21</label><br>
  <li><input type="radio" id="22" name="day" value="22">
    <label for="22">22</label><br>
  <li><input type="radio" id="23" name="day" value="23">
    <label for="23">23</label><br>
  <li><input type="radio" id="24" name="day" value="24">
    <label for="24">24</label><br>
  <li><input type="radio" id="25" name="day" value="25">
    <label for="25">25</label><br>
  <li><input type="radio" id="26" name="day" value="26">
    <label for="26">26</label><br>
  <li><input type="radio" id="27" name="day" value="27">
    <label for="27">27</label><br>
  <li><input type="radio" id="28" name="day" value="28">
    <label for="28">28</label><br>
  <li><input type="radio" id="29" name="day" value="29">
    <label for="29">29</label><br>
  <li><input type="radio" id="30" name="day" value="30">
    <label for="30">30</label><br>
  <li><input type="radio" id="31" name="day" value="31">
    <label for="31">31</label><br>
  <li><input type = "submit" name = "submit" value = "View Day"></button><li>
</form>
</ul>
</body>
</html>
