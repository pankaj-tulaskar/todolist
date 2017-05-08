<html>
<head>
<meta charset="UTF-8">
  <title>TO DO LIST</title>
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
  <link rel="stylesheet" href="../css/style_list.css" type="text/css">
  <link rel="stylesheet" href="css/style.css">    
</head>
<body>
  <div class ="header">
  <div class = "title"><h1>TodoList - Smart Task List Manager</h1></div>
  </div>
  <div class="welcome">
 
  <p> Welcome,<?php echo $_COOKIE['login']?></p>
  </div>
   <h3><strong style="align:center">To-do Tasks</strong></h3>
    <div style: "align:right">
    <form method = 'post' action='additem.php'>
   <br> <input type="submit" value="Add a to-do"/>
    </form></div><br>
    <table>
       <tr>
      <th style="text-align: center;">Task</th>
      <th style="text-align: center;">Description</th>
      th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      </tr>
        <?php foreach($result as $res):?>
      <tr>
        <td><span style="text-align: center; font-weight: bold; font-size: 17px;"> <?php echo $res['todo']; ?></span><br>
          <span style="text-align: center; color: #7d7f83; font-size: 10px;  border-bottom: 1px solid #ddd;"><?php echo $res['date']; ?>&nbsp;&nbsp;&nbsp;<?php echo $res['time']; ?></span> </td>
  <td style="text-align: center;"> <?php echo $res['description']; ?> </td>

<td><form style="margin-top: 15px;" action="index.php" method="post">
      <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
      <input type="submit" style="text-align: center;" value="Mark as Done">
	    <input type="hidden" name='action' value="markdone">
	    </form>
        </td>

<td>
	   <form style="margin-top: 15px;" action="index.php" method= "post">
     <input type="hidden" name= "user_id" value="<?php echo $res['id']; ?>">
     <input type="submit" style="text-align: center;" value = "Edit">
	   <input type="hidden" name='action' value="edititem">
	   </form>
	</td>
 
	<td><form style="margin-top: 15px;" action="index.php" method="post">
            <input type="hidden" name="user_id" value="<?php echo $res['id']; ?>">
	    <input style="text-align: center;" type="submit" value="Delete">
	    <input type="hidden" name='action' value="delete_item">
            </form>
        </td>
	
        
      </tr>  
	<?php endforeach;?>
      
    </table>
    <br><br>
      
 <h3><strong>Completed Tasks</strong></h3>
    <table>
           <tr>
	   <th style="text-align: center;">Task</th>
	   <th style="text-align: center;">Description</th>
	    <th>&nbsp;</th>
	   </tr>
	   <?php foreach($result2 as $res2):?>
	   <tr>
	   <td style="text-align: center; font-weight: bold;"> <?php echo $res2['todo']; ?>  </td>
     <td style="text-align: center;"> <?php echo $res2['description']; ?>  </td>
	   
           <td><form style="margin-top: 15px;" action="index.php" method="post">
               <input type="hidden" name="user_id" value="<?php echo $res2['id']; ?>">
               <input type="submit" value="Delete">
	       <input type="hidden" name='action' value="delete_item">
	       </form>
	  </td>
     </tr>
    <?php endforeach;?>
    </table>

  </body>
</html>
