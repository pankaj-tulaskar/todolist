<!DOCTYPE html>
<head>
<meta charset="UTF-8">
  <title>TO DO LIST</title>
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" type="text/css">	  
</head>

<body>
  <div class ="header">
	<div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>
  </div>
  <div class="login">
  <div class="heading">
    <h2>Sign in</h2>
	<form method="post" action="./task manager/index.php">
     <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>   

        <input type="text" class="form-control" placeholder="E-mail" name="email">
      </div><br>

     <div class="input-group input-group-lg">
     <span class="input-group-addon"><i class="fa fa-lock"></i></span> 
	<input type="password" class="form-control" placeholder="password" name="password">
</div><br>
	<input type ="hidden" name="action" value="test_user">
        <button type="submit" class="float" name="submit">LOGIN</button>
	</form>

	<br>
 <h4>Click on Sign-up to create new account: </h4>
	<form method="post" action="register.php">
	<button type="submit" class="float" name="submit">Sign-up</button>
	</form>
</div>
</div>
</body>
</html>