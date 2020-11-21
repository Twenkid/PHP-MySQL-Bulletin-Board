<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php    
   require_once ('include_fns.php'); 
   
   if (!isset($_SESSION['current_nick'])) { exit();}

  do_html_headerHR("Profile");	
  
  $nick = $_GET['nick'];
  $db2 = mysql_connect('localhost', 'user', '123');     
  mysql_select_db("test1", $db2);		 
  $query  = "select * from users where nickname='$nick'";	
//    $query  = "select * from users where nickname='az'";	
  $result = mysql_query($query, $db2);
     if (!$result )
    {
     echo 'No results!';
// 	 exit();
    }   
	
   $row = mysql_fetch_array($result);
   $profile = stripslashes($row['description']);
   
     echo "<center><font size=4>";	 
     echo "$nick<p>";
	 echo nl2br($profile);
     echo "</center>";
  ?>
  <div class="mainmenu1">
  <?php
  
	//display_articles();
	do_html_footer();
	echo "</div>";
	?>
	

	
	
   
  