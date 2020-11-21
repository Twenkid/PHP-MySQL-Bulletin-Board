<?php
 session_start();
 ?> 
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
  <link rel="stylesheet" href="emx_nav_left.css" type="text/css">
  <div id="masthead"> 
  <center>
  <p></p>
	<div style="width:750px; border: 2px solid #a0a0a0; background-color: #eeeeee">
  <?php
 define('DB_NAME', 'test1'); //ne se izpolzva oshte taka
 $_SESSION['global_id'] = 0;
 $db_name = "test1";
 $_SESSION['db_name'] = $db_name;
 $_SESSION['text_color'] = "black";
  $_SESSION['defCols'] = 50;
  $_SESSION['defRows'] = 20;
  
 require_once('include_fns.php'); 
 
  if (isset($_SESSION['current_user'])) $logged=1;
    else $logged=0;
  //echo "logged= $logged";
	
	$t = $_SESSION['current_userID '];
  //echo "T = $t";	 
  $g = $_SESSION['global_id'];
 
 function 	display_articles($dbname)
 {  
   $db = mysql_connect('localhost', 'username', 'password');
   if (!$db) 
        {
		 echo 'Error! Couldn\'t connect to the DB!';
		 exit;
		}
		
  mysql_select_db(DB_NAME, $db);	
	$query  = "select * from data2 order by datetime DESC";	
	$result = mysql_query($query, $db);
	
   if (!$result )
   {
    echo 'No results!';
	  exit();
   }
	$num_rows = mysql_num_rows($result);
	
    $col =  $_SESSION['text_color'];
	if (isset($_SESSION['current_userID']))
	{
	 $current_userID = $_SESSION['current_userID'];
	}
	
    for($i=0; $i<$num_rows; $i++)
	{
	 $row = mysql_fetch_array($result);
//	 echo $i.;
//	 echo htmlspecialchars(stripslashes($row['postid'])).".";	
	 echo '<p>';
	 echo "<hr>";
     echo "<font size=4 color=$col><br>";
	 $postID = $row['postid'];	 
	 $authorID = $row['authorID'];
	 $posttime = $row['datetime'];
 	 	 
   $queryUser = "select username, nickname from users where userID = $authorID";// order by datetime descending";
	  
	  $result2 = mysql_query($queryUser, $db);

	if ($result2)
	{
		$userStuff = mysql_fetch_array($result2);		
		$temp =  stripslashes( $userStuff['nickname'] );				 		      	  
	}
	 else $temp = "Who?";
	 
	 echo "<i>&nbsp &nbsp  <font size=5>".stripslashes($row['title'])."</i>";
	 echo "<font size=3><br>&nbsp &nbsp &nbsp от <b><i><a href=\"profile.php?nick=$temp\">$temp</a></i></b>";	 
	 echo " на <b><i> $posttime </i></b>";
   echo "<font size=4>";

	 if ( (isset($current_userID)) && ($current_userID == $authorID) ) //($logged)) // && 
	 { 
	   echo "<span class=\"mainmenu1\">";	   
	   echo "&nbsp &nbsp <font size=2>";
	   echo "<a href=\"delete.php?id=$postID\">[delete]</a> ";
	   echo "<a href=\"edit.php?id=$postID\">[edit]</a>";
	   echo "</span>";
	  }
	  	  
   echo "&nbsp &nbsp ";
   echo "<div style=\"margin-left: 60px; font-size: 13px\">";	 
	 echo nl2br(stripslashes($row['content']));	 
	 echo "</div>";
	}
     echo "<p><hr><p>";	 
 }
  
?>

   echo "<font size=3><br>";
	do_html_header('');		
	display_index_toolbar();
	?>
	<div style="position: relative; float: left; width: 700px;">
	<?php		
	display_articles($db_name);
	do_html_footer();
	?>		
	  </div> 
	</div>
      </center>	
