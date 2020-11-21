<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php  
  require_once ('include_fns.php'); 
  
  do_html_header('Add new article');	
  
  $db2 = mysql_connect('localhost', 'user', '123');
  
  $db_name =  $_SESSION['db_name']; 
  mysql_select_db($db_name, $db2);	
  
  $tit = AddSlashes( $_GET['title'] );
  $con = AddSlashes( $_GET['content'] );
  $curr_auth_ID = $_SESSION['current_userID'];
  
  echo "<p>$tit<p>$con";
  echo "<p>$tit, $con, $curr_auth_ID<p>";
  $query  = "insert into data2(title, content, authorID, datetime ) values('$tit', '$con', $curr_auth_ID,  UTC_TIMESTAMP() )";	
 
  $result = mysql_query($query, $db2);
  if (!$result) echo 'DB was not updated!'; 
  do_html_footer();
?>
	

	
	
   
  
