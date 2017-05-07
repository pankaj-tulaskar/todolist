<!--<?php
foreach ($result3 as $res3):
echo $res3['todo'];
endforeach;
?>-->

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <title>TO DO LIST</title>
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
	<link rel="stylesheet" href="../css/style_add_edit.css" type="text/css">	  
</head>
<body>
<div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>
<div class="form-style-2">
<div class="form-style-2-heading">Old Values</div>
<div class="add_task_box">
<label for="field1"><span>Task</span>
<input type="text" name="" class="input-field" value=" <?php echo $res3['todo']; ?>">
</label>
<label for="field4"><span>Description</span><input type="text" class="input-field" name="" value=" <?php echo $res3['description']; ?>"></label>
<label for="field1"><span>Date</span><input type="text" class="input-field" name="" value=" <?php echo $res3['date']; ?>"></label>
<label for="field1"><span>Time</span><input type="text" class="input-field" name="" value=" <?php echo $res3['time']; ?>"></label>
</div><br>
 <div class="form-style-2-heading">Enter New Values</div>
 <form style="margin-top: 15px;" class="add_task_box" action="index.php" method="post">
 <label for="field1"><span>Task</span><input type="text" class="input-field" name="edtask"></label>
 <label for="field1"><span>Description</span><input type="text" class="input-field" name="edescription"></label>
 <label for="field1"><span>Date</span><input type="date" class="input-field" name="date" ></label>
 <label for="field1"><span>Time</span><input type="time" class="input-field" name="time" ></label>
 <input type="hidden" name="user_id" value="<?php echo $res3['id']; ?>">
 <input type="submit" value="Edit">
 <input type="hidden" name='action' value="edit_new_item">
 </form>


</body>
</html>
