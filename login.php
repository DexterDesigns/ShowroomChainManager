<?php
	  	include 'database.php'; 

		    $js_data = $_POST['js_data'];
            $j_object = json_decode($js_data, TRUE);
			$UName = $j_object['username'];
			$Password = $j_object['password'];
			
   $sql = "SELECT * FROM user where UName='$UName' and Password='$Password'";
   $retval = mysql_query( $sql, $conn );
   if(! $retval )
   {
     die('Could not get data: ' . mysql_error());
   }
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
   if ($count > 0) {
	   while($row = mysql_fetch_assoc($retval))
	   {
			$role = $row['Designation'];
			if ($role == 'Store Room Staff') {
				echo 'storeroom';
			}
			else {	
				echo 'showroom';
			}
	   }
   }else {
    echo 'Invalid Login';
   }
   
   mysql_close($conn);
?>
