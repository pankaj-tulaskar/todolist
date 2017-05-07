<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
  <title>TO DO LIST</title>
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="css/style.css">	  
</head>

<body>
	<div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>

<form class="add_task_box" method = 'post' action='index.php'>
Task: <input type='text' name='task'/><br>
Description: <input type='text' name='description'/><br>
Date: <input type="date" name = "datetodo"><br>
Time: <input type="time" name="timetodo"><br>
<input type="hidden" name="userid" value="<?php echo $_COOKIE['my_id']; ?>">
<input type = 'hidden' name = 'action' value='additem'><br>
<input type="submit" value="Add Task"/>
</form>
</body>
</html>
