<?php 

$Subject=$_POST["subject"];


//get connect with database
include 'database.php'; 
//END

$sql = "SELECT * FROM `customer-query` WHERE subject LIKE  '%".$Subject."%'";
//execute the sql query
$result=mysql_query($sql);
//end




echo "<table border='1' width='100%' ><tr><td align='center'>Subject</td><td align='center'>Message</td><td align='center'>Name</td><td align='center'>E-mail</td></tr>";

while($row=mysql_fetch_array($result)){

 $Subject=$row['Subject'];
  $Message=$row['Message'];
   $Name=$row['Name'];
    $Email=$row['E-mail'];
	

echo "<tr><td align='center'>$Subject</td><td align='center'> $Message</td><td align='center'>$Name</td><td align='center'> $Email</td></tr>";
}
echo "</table>";
mysql_close($conn);	
?>
<html><body>
<button><a href="ShowRoom_SalesTeam.php">OK</a></button>
</body>
</html>
