<?php

$Subject=$_POST["subject"];
$Message=$_POST["message"];
$Name=$_POST["name"];
$Email=$_POST["email"];


//get connect with database
include 'database.php'; 
//END

$sql = "INSERT INTO `customer-query` VALUES ('$Subject','$Message','$Name','$Email')";



if (mysql_query($sql)){
	echo"Your message has been sent. </br>";
}else{
	echo "Error  <br/>", mysql_error($con);
}
mysql_close($con);	

?>
<html><body>
<button><a href="index.php">OK</a></button>
</body>
</html>
