<?php
$servername = "localhost";
$username = "shaznaga_abc";
$password = "abc456";
$dbname = "shaznaga_abc";

$con = new mysqli($servername ,$username ,$password,$dbname);

if(!$con){
		die("connection failed:".mysqli_connect_error());
		
}

$dbhost = 'localhost';    $dbuser = 'shaznaga_abc';   $dbpass = 'abc456';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   mysql_select_db('shaznaga_abc');

?>

