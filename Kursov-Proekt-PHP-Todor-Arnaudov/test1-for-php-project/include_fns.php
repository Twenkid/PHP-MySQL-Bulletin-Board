<?php
 session_start();
 ?>
 <link rel="stylesheet" href="emx_nav_left.css" type="text/css">
 <?php
/*
 function db_connect()
 {
   @ $db = mysql_pconnect('localhost', 'discussion', 'pass');
   return $db;
 }
*/   

 function display_index_toolbar()
 {
// echo "<center>";
//  echo "<font size=3>";
  ?>    
  
<div style="position: relative; width: 710px;"> <!-- border: 2px solid #808080; -->
  <div style="position: relative;  top: 5px; float: right; font-size: 16px; font-weight:100; font-family: Arial, Verdana; color: #404040;">  
  <?php
	if (isset($_SESSION['current_user'])) echo "<i>Logged as</i>:<b>".$_SESSION['current_user']." ( ".$_SESSION['current_nick']." )"."</b>";
	                                 else echo "<i>Guest</i>";

									 								
  ?>	 
  <div class="mainmenu1">
  <?php
    if (isset($_SESSION['current_user']) && ($_SESSION['current_user']!='Guest') )
	{
     echo "<a href=\"edit_profile.php\">[ Edit Profile ]</a>";
	 echo "<a href=\"add.php\">[ New Article ]</a>";
     echo "<a href=\"logout.php\">[ Log Out ]</a>";
	}
	else echo "<a href=\"login.php\">[ Log In ]</a>";
   ?>
  </div> 
  </div>
<!--	</center> -->
   </div>
   <font size=2><br><br></font>
   <!--
	<a href="add.php">[New post]</a> <a href="login.php">[Log In]</a>  <a href="logout.php">[Log Out]</a> <table width=""></table>  <font size=5>   
	</center>
	-->
	<?php
  
 }



 function do_html_header($name="Name", $color="black")
 { 
  ?>
  <html>
  <body background="white">
  <font size=6 color=$color>     
  <center>
  <br>
  <?php  
  echo "$name"; echo "</center>";
 }
 
 
  function do_html_headerHR($name="Name", $color="black")
 { 
  ?>
  <font size=6 color=$color>     
  <center>
  <br>
  <?php  
  echo "$name"; echo "</center>";
  echo "<p><hr><p>";  
 }
 
 
 function do_html_footer($string="Footer", $color="black")
 { 
  ?>     
  <font size=4 color=$color> 
  <center>
  <div class="mainmenu1">
  <a href="index.php">[ Home ]</a>  <a href="add.php">[ Add ]</a>
    <br><br>
  </div>
  </center>
  </html>  
  <?php
 }
 
  function do_html_footerHR($string="Footer", $color="black")
 { 
  ?>     
  <font size=4 color=$color> 
  <p>
  <hr>
  <center>
  <div class="mainmenu1">
  <a href="index.php">[ Home ]</a>  <a href="add.php">[ Add ]</a>
  <br>&nbsp<br>
  </div>
  </center>
  <p>
  <hr>
  </html>  
  <?php
 }
 
	?>
  