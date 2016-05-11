<?php
require_once('database.php');

if(isset($_POST['email'])){
	
$md5password=md5($_POST['password']);
	
	$sql="INSERT INTO user(fname,lname,email,password)
			VALUES('".$_POST['fname']."',
			'".$_POST['lname']."',
			'".$_POST['email']."',
			'".$md5password."')";

if (mysqli_query($conn,$sql)){
	echo "New User Created Successfully<br/>";
	echo "<a href='login.php'>Click here to login</a>";
}else{
	echo "Error : <br/>", mysqli_error($conn);
}
mysqli_close($conn);	
}
?>



<!DOCTYPE html>
<head><title>Task Management System-User Registration</title></head>
<body>
<form action="" method="POST">
<h3>User Registration</h3>
<table>
	<tr>
		<td>First name</td>
		<td><input type="text" name="fname"></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="lname"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="email" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr>
		<td><input type="reset" value="Cancel"></td>
		<td><input type="submit" value="Submit"></td>
		<td><a href="tasks.php"><input type="button" value="Back"></a></td>		
	</tr>
</table>
</form>
</body>
</html>
