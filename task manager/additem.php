<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
  <title>TO DO LIST</title>
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="../css/style_add_edit.css" type="text/css">
</head>

<body>
	<div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>
<div class="form-style-2">
<div class="form-style-2-heading">Provide information</div>
<form class="add_task_box" method = 'post' action='index.php'>
<label for="field1"><span>Task</span><input type='text' class="input-field" name='task'/><br>
<label for="field2"><span>Description</span><input type='text' class="input-field" name='description'/><br>
<label for="field2"><span>Date</span><input type="date" class="input-field" name = "datetodo"><br>
<label for="field1"><span>Time</span><input type="time" class="input-field" name="timetodo"><br>
<input type="hidden" name="userid" value="<?php echo $_COOKIE['my_id']; ?>">
<input type = 'hidden' name = 'action' value='additem'><br>
<label><span>&nbsp;</span><input type="submit" value="Add Task"/></label>
</form>
</body>
</html>
