
<?php
$P_Model=$_POST["P_Model"];


include 'database.php'; 


$sql = "select * from product where P_Model LIKE '%".$P_Model."%'";
//execute the sql query
$result=mysql_query($sql);
//end


//check number of rows in result varible
$count=mysql_num_rows($result);
///


if($count>=1)


{
	echo" Record found</br>";
}else{
	echo "Record not found  <br/>", mysql_error($conn);
}
echo "<table border='1' width='100%' ><tr><td align='center'>Model</td><td align='center'>Image</td><td align='center'>Specification</td><td align='center'>Brand</td><td align='center'>Price</td></tr>";

while($row=mysql_fetch_array($result)){

 $model=$row['P_Model'];
  $image=$row['P_Image'];
   $spec=$row['P_Specifications'];
    $brand=$row['P_Brand'];
	 $price=$row['P_Price'];

echo "<tr><td align='center'>$model</td><td align='center'> $image</td><td align='center'>$spec</td><td align='center'> $brand</td><td align='center'>$price</td></tr>";
}
echo "</table>";
mysql_close($conn);	

?>
<html>
<body>
</br>
</br>
<form action="Delete_Product02.php" method="post" id="DeleteProduct">

<table width="373" border="1">
  <tr>
    <td colspan="2"><b>Delete Product</b></td>
  </tr>
  <tr>
    <td>Product Model </td>
    <td><label>
      <input type="text" name="P_Model" />
    </label></td>
  </tr>
  
 
  <tr>
    <td colspan="2"><input type="submit" name="Delete" value="Delete" />
     </td>
  </tr>
  
</table>
<p>
  <label></label>
</p>
</form>
</body>
</html>