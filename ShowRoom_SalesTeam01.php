<?php 

$P_Model=$_POST["P_Model"];



//get connect with database
include 'database.php'; 
//END

$sql = "select * from product where P_Model LIKE '%".$P_Model."%'";
//execute the sql query
$result=mysql_query($sql);
//end




echo "<table border='1' width='100%' ><tr><td align='center'>Model</td><td align='center'>Image</td><td align='center'>Specification</td><td align='center'>Brand</td><td align='center'>Price</td></tr>";

while($row=mysql_fetch_array($result)){

 $P_Model=$row['P_Model'];
  $image=$row['P_Image'];
   $spec=$row['P_Specifications'];
    $brand=$row['P_Brand'];
	 $price=$row['P_Price'];

echo "<tr><td align='center'>$P_Model</td><td align='center'> $image</td><td align='center'>$spec</td><td align='center'> $brand</td><td align='center'>$price</td></tr>";
}
echo "</table>";
mysql_close($conn);	
?>
<html><body>
<button><a href="ShowRoom_SalesTeam.php">OK</a></button>
</body>
</html>
