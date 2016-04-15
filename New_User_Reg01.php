

/*$UserID=$_POST["UserID"];
$UName=$_POST["User"];
$Password=$_POST["Pass"];
$Designation=$_POST["Desig"]; */
<?php

include 'database.php'; 

$js_data = $_POST['js_data'];
$j_object = json_decode($js_data, TRUE);
$UserID = $j_object['UserID'];
$UName = $j_object['User'];
$Password=$j_object["Pass"];
$Designation=$j_object["Desig"];


if ($Designation == 'Store Room Staff' & $Password == '123')
	{
		$sql = "INSERT INTO `user` VALUES ('$UserID','$UName','$Designation','$Password')";
		if (mysql_query($sql)){
			echo 'New user added successfully';
		}else{
			echo "Error", mysql_error($conn);
		}
	}
else if ($Designation == 'Show Room Staff' & $Password == '456')
{
	$sql = "INSERT INTO `user` VALUES ('$UserID','$UName','$Designation','$Password')";
	if (mysql_query($sql)){
		echo 'New user added successfully';
	}else{
		echo "Error", mysql_error($conn);
	}
}
else if ($Designation == 'Sales Team' & $Password == '789')
{
	$sql = "INSERT INTO `user` VALUES ('$UserID','$UName','$Designation','$Password')";
		if (mysql_query($sql)){
			echo 'New user added successfully';
		}else{
			echo "Error", mysql_error($conn);
		}
}
else {
	echo 'Error, Please try again';
}

mysql_close($conn);	

?>

/*

$sql = "INSERT INTO `user` VALUES ('$UserID','$UName','$Designation','$Password')";


if (mysql_query($sql)){
	echo 'New user added successfully';
}else{
	echo "Error", mysql_error($conn);
}
*/



