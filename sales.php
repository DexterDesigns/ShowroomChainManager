<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add Product</title>
</head>

<body>
<form action="sales01.php" method="post" id="AddSales">

<table width="373" border="1">
  <tr>
    <td colspan="2"><b>Add a Sale </b></td>
  </tr>
  <tr>
    <td>Invoice Number </td>
    <td><label>
      <input type="text" name="InvoiceNo" />
    </label></td>
  </tr>
  
 <tr>
    <td>Product Model </td>
    <td><label>
      <input type="text" name="P_Model" />
    </label></td>
  </tr>
  <tr>
    <td>Number of Items </td>
    <td><label>
      <input type="text" name="NoOfItems" />
    </label></td>
  </tr>
  <tr>
    <td>Invoice Date </td>
    <td><label>
      <input type="text" name="InvoiceDate" />
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
