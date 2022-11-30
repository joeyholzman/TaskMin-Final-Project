<!-- ! press tab -->
<!DOCTYPE html>
<html>
<head>
<title>ToDo List</title>
</head>
<h1> To-Do List </h1>
<body>
<div class="list">
<ul class="items">
	<li>
<span class="item">250 Homework</span>
	</li>

	<li>
<span class="item">Study for finals</span>
	</li>

	<li>
<span class="item">Laundry</span>
	</li>

	<li>
<span class="item">Exercise</span>
	</li>

</ul>
<form action = "Tasks.php" method="POST">
	<input type= "text" class="input" placeholder="add item" required>
	<input type= "submit" class= "submit" name = "add" value = "add"/>
</form>
</div>
</body>

</head>
</html>
