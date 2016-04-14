
<?php
$P_Model=$_POST["P_Model"];
$P_Image=$_POST["P_Image"];
$P_Specifications=$_POST["P_Specifications"];
$P_Brand=$_POST["P_Brand"];
$P_Price=$_POST["P_Price"];

include 'database.php'; 


$sql = "INSERT INTO `product` VALUES ('$P_Model','$P_Image', '$P_Specifications','$P_Brand','$P_Price')";



if (mysql_query($sql)){
	echo"New record added successfully </br>";
}else{
	echo "Error  <br/>", mysql_error($conn);
}
mysql_close($conn);	

?>
<html><body>
<button><a href="StoreRoom.php">OK</a></button>
</body>
</html>