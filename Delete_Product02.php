<?php
$P_Model=$_POST["P_Model"];

//get connect with database
include 'database.php'; 
//END

$sql = "DELETE FROM `product` WHERE P_Model='".$P_Model."'";



if (mysql_query($sql)){
	echo" Selected record is deleted </br>";
}else{
	echo "Error  <br/>", mysql_error($conn);
}
mysql_close($conn);	

?>
<html><body>
<button><a href="StoreRoom.php">OK</a></button>
</body>
</html>