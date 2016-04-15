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
<title>New User</title>
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

<?php include 'menu.php';?>                 </td></tr>
                                
                                
                        
   <div class="catagory" align="left">
       <tr>
       <td>
    	<div align="left" class="catagory_02">
            <ul>
            
            
            	<h1 align="center">New User Registration</h1>
             


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>                                                

<script>
    $(document).ready(function() {

        
        $('#submit').click(function() {
            var json_data = {submit: 'true', js_data: '{"UserID":"' + $('#UserID').val() + '","User":"' + $('#User').val() + '","Pass":"' + $('#Pass').val() + '","Desig":"' + $('#Desig').val() + '"}'};
            $.ajax({
                url: "New_User_Reg01.php",
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
             
 

        <div aria-activedescendant="s" align="center">
           <form role="form" >

<table bgcolor="#99CCCC" class="hover">
<tr>
		
		<td><input type="hidden" name="UserID" id="UserID" /></td>
	</tr>
	<tr>
		<td><strong>User Name</strong></td>
		<td class="active"><input type="text" name="User" id="User" /></td>
	</tr>
	<tr>
		<td><strong>Password</strong></td>
		<td class="active"><input type="password" name="Pass" id="Pass" /></td>
	</tr>
	<tr><td><strong>Designation</strong></td>
		<td class="active"><label>
    <select name="Desig" id="Desig">
	  <option value="000" > -- SELECT -- </option>
	  <option value="Store Room Staff"> Store Room Staff</option>
	  <option value="Show Room Staff"> Show Room Staff</option>
	  <option value="Sales Team"> Sales Team</option>
    </select>
    </label>
	
	<td height="10">	</td>
	</tr>
	<tr>
		<td>
        	<input name="Log In" type="button" id="submit" class="style3" value="Submit" /> 

        </td>
			</tr>
</table>
</form>
                </div>
                <h1 align="center">
                  <p class=" 3D">&nbsp;</p>
                </h1>
         <div class="about">
 
</div>

 
    
</table>           </td>
           </tr>
          </div>
                      <tr></tr>
                                 <tr></tr>
                                            <tr></tr>
           </tr>  </div>
           
                    
                                      <div class="Futer_line" align="center">
                                        <tr bgcolor="#CCCCCC" style="border-top:dashed" >
                                        <td colspan="2">                                        </td ></tr>
                                        </div>
                                
                                <div class="Futer" align="center">
                             <p><b>ABC Phones company © All rights Reseverd </b></p>                            
                              
                              
                              <td width="414" align="right">
<div class="account_desc" align="right">
				<ul>
					<li><a href="index.php">Home</b></a></li>
					<li><a href="about_us.php">About us</b></a></li>
					<li><a href="contact_us.php">Contact Us</a></li>
					<li><a href="index.php" >Phones</a></li>
					
				</ul>
  </div></td></tr></td></tr> 
                               </div>
</table>
</body>
</html>
