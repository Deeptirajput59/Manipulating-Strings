<!--Name: Deepti Rajput
   UIN: 660136229
   Assignment 3-->
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
 Strict//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>Perfect Palindrome</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
 <h1>Perfect Palindrome</h1><hr />
 <p>
<?php
echo "<body style='background-color:pink'>";
$string ="ROTATOR";
  if(!empty($string) && isset($string) && is_string($string)){  
        if(strrev($string) == $string) 
		{			
             echo "<b><i>The word $string is a Palindrome</i></b>";  
		}
        else  
		{
             echo "<b><i>The word $string is not a Palindrome</i></b>"; 
		}

}
 ?>
 </p>
 </body>
 </html>