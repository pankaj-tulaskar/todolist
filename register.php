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
  <div class ="header">
  <div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>
  </div>
  <div class="login">
  <div class="heading">
    <h2>Sign Up</h2>
		<form method="post" action="./task manager/index.php">
		        
            <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" placeholder="First Name" name="firstname"></div><br>
				
        <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Last Name" name="lastname"></div><br>
				
        <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="Contact No" name="contact"></div><br>
				
        <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="E-mail" name="mailid"></div><br>
				
        <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" class="form-control" placeholder="username" name="user"></div><br>
				
        <div class="input-group input-group-lg">
     <span class="input-group-addon"><i class="fa fa-lock"></i></span>
        <input type="password" class="form-control" placeholder="password" name="password"></div><br>
        
        <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="date" class="form-control" placeholder="Birth Date" name="dob"></div><br>
				<div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <select class="form-control" placeholder="Gender" name="gender">
					<option>Select</option>
					<option>Male</option>
					<option>Female</option>
				</select></div><br>
				<input type ="hidden" name="action" value="register">
				<button type="submit" class="float">Sign Up</button>
		</form>
		</div>

  
</body>
</html>