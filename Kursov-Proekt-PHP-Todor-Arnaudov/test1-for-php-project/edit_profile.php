<?php
 session_start();
 ?> 
  <html>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <link rel="stylesheet" href="emx_nav_left.css" type="text/css">
  <?php
  require_once ('include_fns.php');     
   
 if (!isset($_SESSION['current_nick']))
 {
  echo "You must log in first!";
 }
 else
   {   
    $nick = $_SESSION['current_nick'];
     do_html_headerHR("Edit Profile of <i>$nick</i>", "#000");	
    // echo "SESSION? = $id";   
     $db2 = mysql_connect('localhost', 'user', '123');
   //  mysql_select_db('test11', $db2);	
     //$db_name =  $_SESSION['db_name'];
//   mysql_select_db($db_name, $db2);	
  
     mysql_select_db("test1", $db2);	  

  echo "<div class=\"masthead\">";
 
   echo "<font size=4><br><br><center>";

   $query  = "select * from users where nickname='$nick'";	

   $result = mysql_query($query, $db2);
     if (!$result )
    {
     echo 'No results!';
 	 exit();
    }   
   $row = mysql_fetch_array($result);
    
  $defRows = $_SESSION['defRows'];
  $defCols = $_SESSION['defCols'];
      
  echo '<form action="doeditprofile.php" name="editprofile">';
  
  $temp = stripslashes($row['nickname']);
//  echo "<input type=\"text\" name=\"id\" method=\"post\" value=\"$id\" width=\"5\" visible=\"false\">";
 $size1= $defCols + 10;
  echo "Nickname<br><input type=\"text\" name=\"nick\" method=\"post\" value=\"$temp\" size=$size1>";
      
  echo "<p>";
  $temp = stripslashes($row['description']);
  echo "Profile: <br> <textarea name=\"profile\" method=\"post\" rows=$defRows cols=$defCols>$temp</textarea>";
  echo "<p>";
  echo "<input type=\"submit\" method=\"post\" value=\"Update Profile\">"; 

  echo "</form>";
  echo "</center>";
  }
  
  do_html_footerHR();	
  echo "</div>";  
?>
	

	
	
   
  