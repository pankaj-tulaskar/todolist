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
    include('todo_itemlist.php');
  }else{
    header("Location: ../error/badInfo.php");
  }
}  else if ($action == 'register')
{
       $fname = filter_input(INPUT_POST, 'firstname');
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
  
  }else if ($action == 'additem')
{
 $user_id = filter_input(INPUT_POST, 'userid',FILTER_VALIDATE_INT);
 $task = filter_input(INPUT_POST, 'task');
 $description = filter_input(INPUT_POST, 'description');
 $date = filter_input(INPUT_POST, 'datetodo');
 $time = filter_input(INPUT_POST, 'timetodo');
 $status = "incomplete";
 $additem = add_items($user_id,$description,$task,$date,$time,$status);
      if($additem == true){
      $result = get_items($_COOKIE['my_id']);
      $result2 = completed_items($_COOKIE['my_id']);
      include('todo_itemlist.php');
      }
}

else if ($action == 'delete_item'){
     $taskid = filter_input(INPUT_POST, 'user_id');
     $task = delete_items($taskid);
     if($task == true){
     $result = get_items($_COOKIE['my_id']);
     $result2 = completed_items($_COOKIE['my_id']);
     include('todo_itemlist.php');
   
     }
     }

?>
