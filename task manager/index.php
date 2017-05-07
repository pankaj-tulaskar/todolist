<?php
require('../model/db_connection.php');
require('../model/db.php');
$action = filter_input(INPUT_POST, "action");
if($action == NULL)
{
  $action = "show_login_page";
}
if($action == "show_login_page")
{
  include('index.php');
}else if($action == 'test_user')
{
  $username = $_POST['email'];
  $password = $_POST['password'];
  $suc = isUserValid($username,$password);
  if($suc == true)
  {
    $result = get_items($_COOKIE['my_id']);
    $result2= completed_items($_COOKIE['my_id']);
    include('list.php');
  }else{
    header("Location: ../error/badInfo.php");
  }
}$fname = filter_input(INPUT_POST, 'firstname');
       $lname = filter_input(INPUT_POST, 'lastname');
       $contact = filter_input(INPUT_POST, 'contact');
       $email = filter_input(INPUT_POST, 'mailid');
       $username = filter_input(INPUT_POST, 'user');
       $password = filter_input(INPUT_POST, 'password');
       $birth = filter_input(INPUT_POST, 'dob');
       $gender = filter_input(INPUT_POST, 'gender');
       $exit = add_user($fname,$lname,$contact,$email,$username,$password,$birth,$gender);
       if($exit == true)
       {
      // echo "already exist";
        header("Location: ../error/userexist.php");
   }else{
       header("Location: ../index.php");

   }
  }else if ($action == 'add')
{


}
?>
