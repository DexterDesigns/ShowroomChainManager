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
<title>Index</title>
</head>

<body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>                                                

<script>
    $(document).ready(function() {

        
        $('#submit').click(function() {
            var json_data = {submit: 'true', js_data: '{"username":"' + $('#username').val() + '","password":"' + $('#password').val() + '"}'};
            $.ajax({
                url: "login.php",
                type: "POST",
                data: json_data,
                success: function(results) {
                    if (results == 'storeroom') {
						$(location).attr('href', 'StoreRoom.php')
					}
					else if (results == 'showroom'){
						$(location).attr('href', 'ShowRoom_SalesTeam.php')
					} else {
						alert (results);
					}
                }
            }); 

        });
      
    });    
    
</script>


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

<?php include 'menu.php';
?>                               
    </td></tr>
                                
                        
   <div class="catagory" align="left">
       <tr>
       <td>
    	<div align="left" class="catagory_02">
            <ul>
            
            
            	<h1 align="center"> <p class=" 3D"> Category </p> </h1>
             
             
             <div class="CAT_heder_02">
                <div class="img">
 <a target="_blank" href="apple.php"><img src="img/Apple-iPhone-6-0.jpg" width="90" height="100" /></a>
 <div class="desc"><b><font color="#000000">APPLE</font></b></div>
</div>

<div class="img">
 <a target="_blank" href="nokia.php"><img src="img/Unlock-Nokia-Lumia-810-300x359.jpg" width="90" height="100" /></a>
 <div class="desc"><b><font color="#000000">NOKIA</font></b></div>
</div>
<div class="img">
 <a target="_blank" href="samsung.php"><img src="img/samsunggalaxys664gb1.jpg" width="90" height="100"></a>
 <div class="desc"><B><font color="#000000">SAMSUNG</font></B></div>
</div>


<div class="img">
 <a target="_blank" href="htc.php"><img src="img/desire-601-dual-sim.jpg" width="90" height="100"></a>
 <div class="desc"><B><font color="#000000">HTC</font></B></div>
</div>

<div class="img">
 <a target="_blank" href="huawei.php"><img src="img/619GDHehvOL._SX425_.jpg"  width="90" height="100"></a>
 <div class="desc"><B><font color="#000000">HUAWEI</font></B></div>
</div>


<div class="img">
 <a target="_blank" href="microsoft.php"><img src="img/14324.jpg"  width="90" height="100"></a>
 <div class="desc"><B><font color="#000000">MICROSOFT</font></B></div>
</div>

           
           <div class="Login" align="right">
           <td>
      <!--  <form action="LogIn.php" method="POST"> -->
	  <form role="form" >
           <table width="373" border="0" align="right" cellpadding="2" cellspacing="3">
  <tr>
    <td colspan="2" class="B1"><p align="center" class="style1">ABC Phones Log In Form</p>      </td>
  </tr>
  <tr>
    <td class="C1"><span class="style10">User Name </span></td>
    <td class="C1"><label>
      <input type="text" name="User" id="username" />
    </label></td>
  </tr>
  <tr>
    <td class="C1 style10">Password</td>
    <td class="C1"><label>
      <input type="password" name="Pass" id="password" />
    </label></td>
  </tr>
  <tr>
    <td height="24" class="C1"><span class="style10">Log In As </span></td>
    <td class="C1"><label>
    <select name="Desig">
   
	  <option value="000" > -- SELECT -- </option>
	  <option value="Store Room Staff"> Store Room Staff</option>
	  <option value="Show Room Staff"> Show Room Staff</option>
	  <option value="Sales Team"> Sales Team</option>
    </select>
    </label></td>
  </tr>
  <tr>
    <td height="45" colspan="2" bgcolor="#3399FF"> <div align="center">
	
	  <p align="right">
	    <input name="Log In" type="button" id="submit" class="style3" value="Log In" /> 
	    <input name="Reset" type="reset" class="style3" value="Reset" />
	    </p>
	  </div>
      </label></td>
  </tr>
  
  <tr align="char">
 
  <td colspan="2" align="char" class="D1" >
	<a href=""> <font size="+2" ></font></a>
	<p align="center" class="style2"><a href="New_User_Reg.php" class="style3">  New User Registration </a></p>	</td>
    </div>
	</tr>
    
</table> 
        </td>
           </tr>
          </div></form>  
           </tr>  </div>
           
                    
                                        <div class="Futer_line" align="center">
                                        <tr bgcolor="#CCCCCC" style="border-top:dashed" >
                                        <td colspan="2">                                        </td ></tr>
                                        </div>
                                <tr>
                                <td >
                                
                                <div class="Futer" align="center">
                             <p><b>ABC Phone company © All rights Reseverd </b></p>                            
                              
                              
                              <td width="414" align="right">
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
