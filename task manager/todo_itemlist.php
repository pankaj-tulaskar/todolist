<html>
<head>
<meta charset="UTF-8">
  <title>TO DO LIST</title>
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
  <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
  <link rel="stylesheet" href="css/style.css">    
</head>
<body>
  <div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>
  <div class="welcome">
 
  <p> Welcome,<?php echo $_COOKIE['login']?></p>
  </div>
   <h3><strong>To-do Tasks</strong></h3>
    <table>
       <tr>
      <th>Task</th>
      <th>Description</th>
      <th>Date</th>
      <th>Time</th>
      </tr>
        <?php foreach($result as $res):?>
      <tr>
        <td> <?php echo $res['todo']; ?> </td>
	<td> <?php echo $res['description']; ?> </td>
        <td> <?php echo $res['date']; ?>  </td>
	<td> <?php echo $res['time']; ?> </td>

	<td><form action="index.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
	    <input type="submit" value="Delete">
	    <input type="hidden" name='action' value="delete_item">
            </form>
        </td>
	<td><form action="index.php" method="post">
	    <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
	    <input type="submit" style="text-align: center;" value="Mark as Done">
	    <input type="hidden" name='action' value="markdone">
	    </form>
        </td>
        <td>
	   <form action="index.php" method= "post">
	   <input type="hidden" name= "user_id" value="<?php echo $res['id']; ?>">
	   <input type="submit" style="text-align: center;" value = "Edit">
	   <input type="hidden" name='action' value="edititem">
	   </form>
	</td>
      </tr>  
	<?php endforeach;?>
      
    </table>
      <form method = 'post' action='additem.php'>
   <br> <input type="submit" value="Add a to-do"/>
    </form>
 <h3><strong>Completed Tasks</strong></h3>
    <table>
           <tr>
	   <th>Task</th>
	   <th>Description</th>
	   <th>Date</th>
	   <th>Time</th>
	   <th>&nbsp;</th>
	   </tr>
	   <?php foreach($result2 as $res2):?>
	   <tr>
	   <td> <?php echo $res2['todo']; ?>  </td>
	   <td> <?php echo $res2['description']; ?>  </td>
	   <td> <?php echo $res2['date']; ?>  </td>
           <td> <?php echo $res2['time']; ?>  </td>
           <td><form action="index.php" method="post">
               <input type="hidden" name="user_id" value="<?php echo $res2['id']; ?>">
               <input type="submit" value="Delete">
	       <input type="hidden" name='action' value="delete_item">
	       </form>
	  </td>
          </tr>																									         <?php endforeach;?>
    </table>

  </body>
</html>
