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
  <div class="wrapper">
  <br>
  <div class="form-signin">
  	<h2 class="form-signin-heading">Login</h2>
	<form method="post" action="./Todo-items-manager/index.php">
        <input type="text" class="form-control" placeholder="E-mail" name="email"><br>
	<input type="password" class="form-control" placeholder="password" name="password"><br>
	<input type ="hidden" name="action" value="test_user">
        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login" name="submit">
	</form>

	<br><br>
	<form class="form-login" method="post" action="register.php">
	<input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign-Up" name="submit">
	</form>
</div>

</body>
</html>