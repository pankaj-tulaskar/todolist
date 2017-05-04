<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>TodoList</title>
  

<link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
  
<link rel="stylesheet" href="css/style.css">
  
</head>

<body>
<div class = "title"><h6>TodoList - Smart Task List Manager</h6></div>
  
<form method = "post" action="index.php" class="login">
<div class="form">
  <div class="fColor"></div>
  <div class="tbar">
    <div class="sColor"></div>
    <input type="Username" class="input" name="reg_uname" placeholder="Username"/>
    <input type="password" class="input" name="reg_password" placeholder="Password"/>
  </div>
  <button class="submit" name="submit" >Login</button>
  <input type ="hidden" name="action" value="test_user">
  <br>
  
</form>

  <form action = "register.php" class= "register">
  <button class="submit" name="submit" >SignUp</button>
  </form>
</div>
  
</body>
</html>
