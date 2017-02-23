<!--Name: Deepti Rajput
   UIN: 660136229
   Assignment 3-->
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
 Strict//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>Validate Local Address</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
 <h1>Validate Local Address</h1><hr />
 <p>
<?php
echo "<body style='background-color:pink'>";
$email = array(
"jsmith123@example.org",
"john.smith.mail@example.org",
"john.smith@example.org",
"john.smith@example",
"jsmith123@mail.example.org");
foreach ($email as $emailAddress){
echo "<b><i>The email address &ldquo;" . $emailAddress .
"&rdquo; </i></b>";
if (preg_match("/^(([A-Za-z]+\d+)|" .
"([A-Za-z]+\.[A-Za-z]+))" .
"@((mail\.)?)example\.org$/i",
$emailAddress)==1)
echo "<b><i><font color = 'blue'>is a valid e-mail address.</font></i></b></br></br>";
else
echo "<b><i><font color = 'red'> is not a valid e-mail address.</font></b></i></br></br>";
}
 ?>
 </p>
 </body>
 </html>