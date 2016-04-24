<?php


$P_Model=$_POST["P_Model"];


$P_Image=$_POST["P_Image"];
$P_Specifications=$_POST["P_Specifications"];
$P_Brand=$_POST["P_Brand"];
$P_Price=$_POST["P_Price"];

//get connect with database
include 'database.php'; 
//END



$sql = "UPDATE `product` SET P_Image='".$P_Image."', P_Specifications='".$P_Specifications."', P_Brand='".$P_Brand."', 
	 P_Price='".$P_Price."' WHERE P_Model='".$P_Model."'";	



?>
<html><body>
<button><a href="StoreRoom.php">OK</a></button>
</body>
</html>
