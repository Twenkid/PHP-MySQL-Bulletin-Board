<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <meta http-equiv="refresh" content = "3; URL=index.php">
  <?php  
  require_once ('include_fns.php'); 
  
  $gID = $_SESSION['global_id'];
//  echo "SESSION? = $gID";
  
  do_html_headerHR('Updating article...');	
  
  $db2 = mysql_connect('localhost', 'user', '123');
//  mysql_select_db('test11', $db2);	
   $db_name =  $_SESSION['db_name'];
   mysql_select_db($db_name, $db2);	
  
//  $id     = $_GET['id'];
  $id     = $_SESSION['global_id'];
  $title  = $_GET['title'];
  $content= $_GET['content'];
  
//  echo "$id  : $title: $content <br>";

  $query  = "update data2 set title = '$title', content='$content' where postid=$id";
  $result = mysql_query($query, $db2);

  echo "<font size=3><center>";
  if (!$result) echo 'The article was not updated!';
  else
  {
   echo  'The article was updated!';
  }
  echo "</center>";
  
  do_html_footerHR();
  
?>
	

	
	
   
  