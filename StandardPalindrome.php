<!--Name: Deepti Rajput
    UIN: 660136229
    Assignment 3-->
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
 Strict//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>Standard Palindrome</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
 <h1>Standard Palindrome</h1><hr />
 <p>
<?php
echo "<body style='background-color:pink'>";
$textmessage = "A man, a plan, a canal, Panama";
$message = strtolower(preg_replace("([^A-Za-z0-9])", "", $textmessage ));
$message1 = strtolower(strrev($message));
echo "<i><b><font color = 'red'>Given message: $textmessage</font></b></i> <br /><br />";
if ($message == $message1){
echo "<i><b><font color = 'blue'>$message</font> is a Standard Palindrome of <font color = 'red'>$message1</font></b></i>";
}else{
echo "$palindrome is not a Standard Palindrome of $palindrome2";
};
?>
 </p>
 </body>
 </html>