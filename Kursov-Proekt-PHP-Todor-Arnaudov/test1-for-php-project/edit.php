<?php
 session_start();
 ?> 
  <html>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <link rel="stylesheet" href="emx_nav_left.css" type="text/css">
  <?php
  require_once ('include_fns.php'); 
    
  do_html_headerHR('Edit Article', "#000");	 
   
  $db2 = mysql_connect('localhost', 'user', '123'); 
  $db_name =  $_SESSION['db_name'];
  
  mysql_select_db("test1", $db2);	
  
  $id = $_GET['id'];
  echo "postID = $id";

   $_SESSION['global_id'] = $id;

  echo "<div class=\"masthead\">";
 
  echo "<font size=4><br><br><center>";

   $query  = "select * from data2 where postid=$id";	

   $result = mysql_query($query, $db2);
   
     if (!$result )
    {
     echo 'No results!';
 	 exit();
    }   
   $row = mysql_fetch_array($result);
    
  $defRows = $_SESSION['defRows'];
  $defCols = $_SESSION['defCols'];
      
  echo '<form action="update.php" name="edit">';
  
  $temp = stripslashes($row['title']);
 $size1= $defCols + 10;
  echo "<input type=\"text\" name=\"title\" method=\"post\" value=\"$temp\" size=$size1>";
      
  echo "<p>";
  $temp = stripslashes($row['content']);
  echo "<textarea name=\"content\" method=\"post\" rows=$defRows cols=$defCols>$temp</textarea>";
  echo "<p>";
  echo "<input type=\"submit\" action=\"update.php\" method=\"post\" value=\"Edit\">"; 

  echo "</form>";
  echo "</center>";
      
  do_html_footerHR();
	
  echo "</div>";
  
?>
