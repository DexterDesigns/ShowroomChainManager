<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Product || ShowroomChainManager
</title>
</head>

<body>
<form action="Add_Product01.php" method="post" id="AddProduct">

<table width="373" border="1">
  <tr>
    <td colspan="2"><b>Add a Product</b></td>
  </tr>
  <tr>
    <td>Product Model </td>
    <td><label>
      <input type="text" name="P_Model" />
    </label></td>
  </tr>
  <tr>
    <td>Product Image</td>
    <td><label>
      <input type="file" value="Choose" name="P_Image" />
    </label></td>
  </tr>
 <tr>
    <td>Product Specification</td>
    <td><label>
      <input type="text" name="P_Specifications" />
    </label></td>
  </tr>
  <tr>
    <td>Product Brand</td>
    <td><label>
      <input type="text" name="P_Brand" />
    </label></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td><label>
    <input type="text" name="P_Price" />
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="Add" value="Add" />
      
  </tr>
</table>
<p>
  <label></label>
</p>
</form></body>
</html>
