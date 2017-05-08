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
  <div class="wrapper">
  <br>
  <div class="form-signin">
  	<h2 class="form-signin-heading">SIGN UP</h2>
		<form method="post" action="./task manager/index.php">
		        <input type="text" class="form-control" placeholder="First Name" name="firstname"><br>
				<input type="text" class="form-control" placeholder="Last Name" name="lastname"><br>
				<input type="text" class="form-control" placeholder="Contact No" name="contact"><br>
				<input type="text" class="form-control" placeholder="E-mail" name="mailid"><br>
				<input type="text" class="form-control" placeholder="username" name="user"><br>
				<input type="password" class="form-control" placeholder="password" name="password"><br>
        <input type="date" class="form-control" placeholder="Birth Date" name="dob"><br>
				<select class="form-control" placeholder="Gender" name="gender">
					<option>Select</option>
					<option>Male</option>
					<option>Female</option>
				</select><br>
				<input type ="hidden" name="action" value="register">
				<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign-Up">
		</form>
		</div>

  
</body>
</html>