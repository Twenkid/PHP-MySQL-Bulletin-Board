<?php

 function fdownload()
 {
  $fi = fopen("http://www.google.com", "r");
  $con = fread($fi, 40000);
  echo "<pre>";
  echo stripslashes($con);
  fclose($fi);
  echo "</pre>";
 }
 
  function f2()
  {

   $im = @imagecreatetruecolor(300, 200)
     or die("Cannot Initialize new GD image stream");
 $text_color = imagecolorallocate($im, 233, 14, 91);
 imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
  imagestring($im, 6, 10, 10,  "A Simple Text String", $text_color);
 $col = ImageColorAllocate($im, 255, 20, 255);
 imageline($im, 0, 0, 120, 150, $col); 
    header ("Content-type: image/png");
 imagepng($im); 
 imagedestroy($im);

  }
  
function f1()
{
  $im = @imagecreatetruecolor(300, 100)
     or die("Cannot Initialize new GD image stream");
   $text_color = imagecolorallocate($im, 233, 14, 91);
  imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
    header ("Content-type: image/png");
  imagepng($im);
 imagedestroy($im);
 }
 
 function drawRating($rating1,$rating2,$rating3) {
   //Creating image area //
   $image = imagecreate(550,100);
   //Describing Colors//
   $back = ImageColorAllocate($image,255,255,255);
   $border = ImageColorAllocate($image,0,0,0);
   $fill = ImageColorAllocate($image,44,81,150);
   //Creating Backside //
   ImageFilledRectangle($image,0,0,302,20,$back);
   ImageFilledRectangle($image,0,30,302,50,$back);
   ImageFilledRectangle($image,0,60,302,80,$back);
   //Creating Filled Side //
   ImageFilledRectangle($image,1,1,$rating1,19,$fill);
   ImageFilledRectangle($image,1,31,$rating2,49,$fill);
   ImageFilledRectangle($image,1,61,$rating3,79,$fill);
   //Creating Borders//
   ImageRectangle($image,0,0,300,20,$border);
   ImageRectangle($image,0,30,300,50,$border);
   ImageRectangle($image,0,60,300,80,$border);
   //Texts //
   ImageString($image,5 , 310, 0 ,"Yetersiz Buldum - %$rateyuz1",$border);
   ImageString($image,5 , 310, 30,"Daha Iyi Olabilir - %$rateyuz2", $border);
   ImageString($image,5 , 310, 60,"Begendim - %$rateyuz3", $border);
   //Picturing//
   header ("Content-type: image/png");
   imagePNG($image);
   //Deleting from Memory//
   imagedestroy($image);
   }
 
// f2();  
// f1();
// drawRating (48,26,34);//numbers in paranthesis are amount of levels
// f2();
  fdownload();
?>

	
	
   
  