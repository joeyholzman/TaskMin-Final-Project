<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #383838;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 24px;
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
  padding: 12px 0;
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
  color: #000000;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

</style>
</head>
<body>

<img src="MinLogo1.png" width="400" height="120" class="center"><br>

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
  <li><a href="Tasks.php">31</a></li>
  <li><a href="Tasks.php">1</a></li>
  <li><a href="Tasks.php">2</a></li>
  <li><a href="Tasks.php">3</a></li>
  <li><a href="Tasks.php">4</a></li>
  <li><a href="Tasks.php">5</a></li>
  <li><a href="Tasks.php">6</a></li>
  <li><a href="Tasks.php">7</a></li>
  <li><a href="Tasks.php">8</a></li>
  <li><a href="Tasks.php">9</a></li>
  <li><a href="Tasks.php">10</a></li>
  <li><a href="Tasks.php">11</a></li>
  <li><a href="Tasks.php">12</a></li>
  <li><a href="Tasks.php">13</a></li>
  <li><a href="Tasks.php">14</a></li>
  <li><a href="Tasks.php">15</a></li>
  <li><a href="Tasks.php">16</a></li>
  <li><a href="Tasks.php">17</a></li>
  <li><a href="Tasks.php">18</a></li>
  <li><a href="Tasks.php">19</a></li>
  <li><a href="Tasks.php">20</a></li>
  <li><a href="Tasks.php">21</a></li>
  <li><a href="Tasks.php">22</a></li>
  <li><a href="Tasks.php">23</a></li>
  <li><a href="Tasks.php">24</a></li>
  <li><a href="Tasks.php">25</a></li>
  <li><a href="Tasks.php">26</a></li>
  <li><a href="Tasks.php">27</a></li>
  <li><a href="Tasks.php">28</a></li>
  <li><a href="Tasks.php">29</a></li>
  <li><a href="Tasks.php">30</a></li>
  <li><a href="Tasks.php">1</a></li>
  <li><a href="Tasks.php">2</a></li>
  <li><a href="Tasks.php">3</a></li>
  <li><a href="Tasks.php">4</a></li>

</ul>

</body>
</html>
