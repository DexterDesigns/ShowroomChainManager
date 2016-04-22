<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="menu_bar.css" />

 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet"  type="text/css" href="styles.css">
<title>Samsung</title>
</head>

<body>
<br />
<table width="1024" align="center">
<tr>
<td width="768">



<font face="Georgia, Times New Roman, Times, serif" class="con01"> Need help?</font> <font class="con02"> Contact us </font> <font class="con03" face="Georgia, Times New Roman, Times, serif" > 011-2375375</font></td>

</td></tr>

</div>
<div class="line_01">
<tr bgcolor="#666666">
<td colspan="2"></td ></tr>
</div>
<div class="Logo_line">
<div class="Logo" >
	<tr>
	<td colspan="2" class="Logo_line">
    <img src="img/Capture.JPG" width="300" height="180" />
</div>
    </td></tr>
    </div>
    <tr>
        <td colspan="2">
        <br />
    <br />    </td></tr>
    
    
                                
                                
                                <tr>
                                <td colspan="2">
                                <div id='cssmenu'>

<?php include 'menu.php';?>                           
                       
                       </td>
                       </tr>         
   <div class="catagory" align="left">
       <tr>
       <td>
    	
             
             
 <p align="center"><img src="img/samsung-galaxy-alfa-1.jpg" alt="456" width="350" height="250"/><img src="img/Samsung-Ativ-S-3.jpg"alt="123" width="350" height="250"/></p>
<div>
  <div align="center" aria-activedescendant="s" style="margin-left:120px;" >

<font style="alignment-adjust:auto" color="#000000" size="+2">
<p align="left"> <img src="img/Samsung.png" alt="123" width="100" height="100"/> We don't just launch products, We launch people's amazing potential.  </p>
</font></div>

            <div align="left" class="catagory_02">
            <ul>
            
            
            	<h1 align="center">Samsung Phones  </h1> 

 </td></tr>
 <tr>
 <td>
    
</table>           </td>
           </tr>
          </div>
                     
           </tr>  </div>
           <tr align="center">
		   <td>
		   
		   <table width="821" border="0" align="center">
  <?php
			  
  	include 'database.php'; 

   
   $sql = "SELECT * FROM product where P_Brand='Samsung'";
   $retval = mysql_query( $sql, $conn );
   if(! $retval )
   {
     die('Could not get data: ' . mysql_error());
   }

	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	
	
   if ($count > 0) {
	   while($row = mysql_fetch_assoc($retval))
	   { ?>
	   
	   
	   <tr>
        <td width="152"><div align="center"> <img src="img/Samsung/<?php echo $row['P_Image'];?>" width="100" height="140" /> </div>
          </br>
          <div align="center"> <font color="#000000" size="+1" style="alignment-adjust:baseline" 
> <b><?php echo $row['P_Model'];?></b></font> </div></td>
        <td width="480" ><div>
          <ul>
        	<?php echo $row['P_Specifications'];?>
          </div></td>
        <td width="175"><h3 ><?php echo $row['P_Price'];?></h3></td>
      </tr>
      
	   
	   
		  
	  <?php }
   }else {
    echo 'No Data Found';
   }
   
   mysql_close($conn);
?>
  
      
	  
	  
    </table>
		   </td>
		   </tr>
       </div>
                      
           </tr>  </div>
           <tr>
		   <td>
                    
                                        <div class="Futer_line" align="center">
                                        <tr bgcolor="#CCCCCC" style="border-top:dashed" >
                                        <td colspan="2">                                        </td ></tr>
                                        </div>
                                <tr>
                                <td >
                                
                                <div class="Futer" align="center">
                             <p><b>ABC Phone company © All rights Reseverd </b></p>                            
                              
                              
                              <td  align="right">
<div class="account_desc" align="right">
				<ul>
				<li><a href="index.php">Home</b></a></li>
					<li><a href="about_us.php">About us</b></a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
					<li><a href="index.php">Phones</a></li>
					
				</ul>
  </div></td></tr></td></tr> 
                               </div>
</table>
</body>
</html>
