<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <?php    
   require_once ('include_fns.php'); 
  
   $db_name =  $_SESSION['db_name'];
   $defRows = $_SESSION['defRows'];
   $defCols = $_SESSION['defCols'];
   $size1= $defCols + 10;
  
    do_html_headerHR('Add new article');	
  
  ?>
  
  <form name="addarticle" action="doAdd.php">
  <center>
  <?php
     echo "<input type=\"text\" name=\"title\" method=\"post\" value=\"$temp\" size=$size1>";      
     echo "<p>";  
     echo "<textarea name=\"content\" method=\"post\" rows=$defRows cols=$defCols>$temp</textarea>";
     echo "<p>";
     echo "<input type=\"submit\" action=\"update.php\" method=\"post\" value=\"Edit\">"; 
     echo "</form>";
     echo "</center>";  
	      
	//display_articles();
	do_html_footerHR();
	?>
	

	
	
   
  