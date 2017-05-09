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
  include('./login.php');
}else if($action == 'test_user')
{
  $username = $_POST['email'];
  $password = $_POST['password'];
  $suc = isUserValid($username,$password);
  if($suc == true)
  {
      $id = $_SESSION['id'];
    $result = get_items($id);
   $result2 = completed_items($id);
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
        header("Location: ../error/user_exists.php");
   }else{
       header("Location: ../login.php");
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
      $id = $_SESSION['id'];
      $result = get_items($id);
      $result2 = completed_items($id);
      include('todo_itemlist.php');
      }
}

else if ($action == 'delete_item'){
     $taskid = filter_input(INPUT_POST, 'user_id');
     $task = delete_items($taskid);
     if($task == true){
     $id = $_SESSION['id'];
      $result = get_items($id);
      $result2 = completed_items($id);
     include('todo_itemlist.php');
   
     }
     }else if($action == 'edititem'){
     $editid = filter_input(INPUT_POST, 'user_id');
     $result3 = get_item($editid);
     include('edititem.php');
}else if ($action == 'edit_new_item'){
     $etask = filter_input(INPUT_POST, 'edtask');
     $edescription = filter_input(INPUT_POST, 'edescription');
     $edate = filter_input(INPUT_POST, 'date');
     $etime = filter_input(INPUT_POST, 'time');
     $eid = filter_input(INPUT_POST, 'user_id');
     $editvalue = edit_item($etask,$edescription,$etime,$edate,$eid);
     if($editvalue == true){
     $id = $_SESSION['id'];
     $result = get_items($id);
     $result2 = completed_items($id);
     include('todo_itemlist.php');
     }

}
else if ($action == 'markdone'){
      $id = filter_input(INPUT_POST, 'user_id');
      $status = "complete";
      $markdone = mark_done($status,$id);
      if($markdone == true){
         $id = $_SESSION['id'];
         $result = get_items($id);
         $result2 = completed_items($id);
	 include('todo_itemlist.php');
     }
     }

?>
