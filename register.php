<html>
<body>
  <h1>REGISTER</h1>
  <form method = 'post' action = 'index.php'>
  <strong> Username: </strong> 
  <input type ='text' name= 'reg_uname' value="" /> </ br></ br> <br><br>
  
  <strong> EMAIL </strong> 
  <input type ='text' name= 'reg_email' value="" /> </ br></ br> <br><br>
  
  <strong> PASSWORD </strong> 
  <input type ='password' name= 'reg_password' value="" /> </ br></ br>
  <input type ='hidden' name='action' value='register'> <br><br>
  <input type='submit' value = "Register">  
  </form>
  
  <form method = 'post' action = 'login.php'>
  <input type = 'submit' value ='try to login' />
  </form>


</body>
</html>