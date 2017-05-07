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
   function getTodoItems($user_id){
     global $db;
     $query = 'select * from todos where user_id= :userid';
     $statement = $db->prepare($query);
     $statement->bindValue(':userid',$user_id);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();
     return $result;
   }
   function createUser($username, $password){
     global $db;
     $query = 'select * from users where username = :name ';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();
     $count = $statement->rowCount();
     if($count > 0)
     {
       return true;
     }else{
     $query = 'insert into users (username,passwordHash) values
        (:name, :pass)';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $statement->closeCursor();
     return false;
     }
   }
   function isUserValid($username,$password){
     global $db;
     $query = 'select * from users where username = :name and 
     passwordHash = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     $count = $statement->rowCount();
     if($count == 1){
       setcookie('login',$username);
       setcookie('my_id',$result[0]['id']);
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
