<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<div class = "title"><h6>TodoList - Smart Task List Manager</h6></div>
  
<form method="post" action="index.php">
<div class="form">
  <div class="fColor"></div>
  <div class="tbar">
    <div class="sColor"></div>
    <input type="Username" class="input" name="reg_uname" placeholder="Username"/>
    <input type="Email" class="input" name="reg_email" placeholder="Email"/>
    <input type="password" class="input" name="reg_password" placeholder="Password"/>
    
    <input type="submit" class = "submit" value="register" />
</div>

</form>
<form method = 'post' action = 'login.php'>
<div class= "rig"><p>If You already Have an account:</p>
<input type = 'submit' class= "submit" value ='Login' />
</div>
</form>  
</div>

</body>
</html>