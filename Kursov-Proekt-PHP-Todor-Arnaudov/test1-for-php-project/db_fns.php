<?php

 function db_connectF()
 {
   $db = mysql_pconnect('localhost', 'user', '123');
   return $db;
 }
 
 function display_index_toolbar()
 {
//  echo "New post, Expand, Collapse";
  ?>
	<center>
	<a href="new_post.php">New post</a> | Expand | Collapse<table width=""></table>  <font size=5>  
	</center>
	<?php

 }



 function do_html_header($name="Name")
 { 
  ?>
  <html>
  <body background="white">
  <font size=6 color="blue">     
  <center>
  <?php  
  echo "$name";
  echo "</center>";
 }
 
 function do_html_footer($string="Footer")
 { 
  ?>  
  <font size=4>  
  <center>
  <a href="index.php">[ Home ]</a>  <a href="add.php">[ Add ]</a>
  </center>
  </html>  
  <?php
 }
 
	?>
  