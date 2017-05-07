<?php
   function add_items($user_id,$description,$task,$date,$time,$status){
        global $db;
	$query = 'INSERT INTO list_items(todo, user_id, status, description, date, time) VALUES (:task, :userid, :status, :todo_text, :date, :time)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userid',$user_id);
	$statement->bindValue(':todo_text',$description);
	$statement->bindValue(':task',$task);
	$statement->bindValue(':date',$date);
	$statement->bindValue(':time',$time);
	$statement->bindValue(':status',$status);
	$statement->execute();
	$statement->closeCursor();
	return true;
   }
   function get_items($user_id){
     global $db;
     $query = 'SELECT * FROM list_items WHERE user_id= :userid AND status = :status';
     $statement = $db->prepare($query);
     $statement->bindValue(':userid',$user_id);
     $statement->bindValue(':status','incomplete');
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();
     return $result;
   }
   
   function delete_items($taskid){
     global $db;
     $query = 'DELETE FROM list_items WHERE id = :task';
     $statement = $db->prepare($query);
     $statement->bindValue(':task',$taskid);
     $statement->execute();
     $statement->closeCursor();
     return true;
   }
   
   function mark_done($status,$id){
        global $db;
	$query = 'UPDATE list_items SET status = :status WHERE id = :id';
	$statement = $db->prepare($query);
	$statement->bindValue(':status',$status);
	$statement->bindValue(':id',$id);
	$statement->execute();
	$statement->closeCursor();
	return true;

   }
   
   function edit_item($etask,$edescription,$edate,$etime,$eid){
        global $db;
	$query = 'UPDATE list_items SET todo = :etask, description = :edescription, date = :etime, time = :edate WHERE id = :eid';
        $statement = $db->prepare($query);
        $statement->bindValue(':etask',$etask);
        $statement->bindValue(':eid',$eid);
	$statement->bindValue(':edescription',$edescription);
	$statement->bindValue(':edate',$edate);
	$statement->bindValue(':etime',$etime);
        $statement->execute();
        $statement->closeCursor();
        return true;

  }
  
   function add_user($fname,$lname,$contact,$email,$username,$password,$birth,$gender){
     global $db;
     $query = 'SELECT * FROM users WHERE username = :uname';
     $statement = $db->prepare($query);
     $statement->bindValue(':uname',$username);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();
     $count = $statement->rowCount();
     if($count > 0)
     {
       return true;
     }else{
     $query = 'INSERT INTO users(first_name,last_name,contact_no,email,username,password,birth,gender) VALUES (:fname,:lname,:cont,:emailid,:uname,:pass,:birth,:gender)';
     $statement = $db->prepare($query);
     $statement->bindValue(':fname',$fname);
     $statement->bindValue(':lname',$lname);
     $statement->bindValue(':cont',$contact);
     $statement->bindValue(':emailid',$email);
     $statement->bindValue(':uname',$username);
     $statement->bindValue(':pass',$password);
     $statement->bindValue(':birth',$birth);
     $statement->bindValue(':gender',$gender);
     $statement->execute();
     $statement->closeCursor();
     return false;
     }
   }
   function isUserValid($username,$password){
     global $db;
     $query = 'SELECT * FROM users WHERE email = :name AND 
     password = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$email);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     $count = $statement->rowCount();
     if($count == 1){
       setcookie('login',$username);
       setcookie('my_id',$result[0]['id']);
       setcookie('my_name',$result[1]['first_name']);
       setcookie('islogged',true);
       return true;
     }else{
       unset($_COOKIE['login']);
       setcookie('login',false);
       setcookie('islogged',false);
       setcookie('id',false);
       return false;
     }

   }

?>
