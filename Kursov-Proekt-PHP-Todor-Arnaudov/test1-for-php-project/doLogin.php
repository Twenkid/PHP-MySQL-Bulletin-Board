<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php    
   require_once ('include_fns.php'); 
  
   do_html_header('Log In');	
	 
   if (  ( !isset($_POST['username'])) || (!isset($_POST['password']) ) )
   {
    echo 'You have to enter username and password!';
   }  
  
   $db_name =  $_SESSION['db_name'];
   $user = $_POST['username'];
   $pass = $_POST['password'];
       
  $db2 = mysql_connect('localhost', 'username', 'password');
  mysql_select_db("test1", $db2);
  $query  = "select * from users where username='$user' and password='$pass'"; // where user='$user'"; // and password='$pass'";	   	
	$result = mysql_query($query, $db2);
		
   if (!$result )
   {
    echo 'No results!';
    exit();
   }
      
	$num_rows = mysql_num_rows($result);
	
	if ($num_rows == 1)
	{		 
	 echo "Login successful for $user";
	 $_SESSION['current_user']  = $user;
     $temp = mysql_fetch_array($result);	 
	 $_SESSION['current_userID']  = $temp['userID'];	
	 $_SESSION['current_nick']  = $temp['nickname'];
	 	   $t =  $userStuff['nickname'];
		   echo "Nick: $t";
	 	
	}
	else
	 {
	 	 echo "Invalid username or password!";
	 }	
  do_html_footer();
  ?>
