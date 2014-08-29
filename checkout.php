<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Printfastonline | Checkout</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="author" content="" />
<meta name="generator" content="" />
<?php include('includes/html-header.php'); ?>
</head>
<body id="indexHomeBody">
<!-- Header Section Starts --> <?php include('includes/tpl_header.php'); ?><!-- Header Section Ends -->
<div id="mainWrapper"> <!------- Start mainWrapper here -------------->
<div class="main"> <!------- Start main here -------------->
<table width="980" cellpadding="0" cellspacing="0">
	<tr>
		<td>
<div class="hdtxt"><!------- Start hdtxt here -------------->
        <h2>Checkout</h2>  
        </div> <!------- End hdtxt here -------------->		

<table width="980" cellpadding="0" cellspacing="0">
  <tr>
		<td>
    <div class="divHold"> <!------- Start divHold here -------------->
    <h5>Please select your checkout option from below:</h5>
    
    <ul class="tabs">
        <li class="active" rel="tab1">Create an Account</li>
        <li rel="tab2">Existing Customer Login</li>
        <li rel="tab3">Proceed Without Account</li>    
    </ul>

	<div class="tab_container"> <!------- Start tab_container here -------------->

		<!-- ## CREATE ACCOUNT -->

		<div id="tab1" class="tab_content">

            <div class="tablepad">
               <h6>Enter your details below to create an account with us:</h6>	
				<!-- ## ACCOUNT DETAILS -->
				<div class="tablesub">Account Details</div>

                <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="125">Email address:</td>
                    <td><input name="textfield3" type="text" class="inputfield" id="textfield3" /></td>
                </tr>
                <tr>
                <td width="125">Telephone number:</td>
                <td><input name="textfield4" type="text" class="inputfield" id="textfield4" /></td>
                </tr>
                <tr>
                <td>Password:</td>
                <td><input name="textfield13" type="text" class="inputfield" id="textfield13" /></td>
                </tr>
                <tr>
                <td>Confirm Password:</td>
                <td><input name="textfield14" type="text" class="inputfield" id="textfield14" /></td>
                </tr>
                </table>

				<!-- ## SHIPPING DETAILS -->
				<div class="tablesub">Shipping Details</div>
                
                <table border="0" cellpadding="5" cellspacing="0">
                <tr>
                <td>Name:</td>
                <td><input name="textfield9" type="text" class="inputfield" id="textfield9" /></td>
                </tr>
                <tr>
                <td width="125">Address:</td>
                <td><input name="textfield5" type="text" class="inputfield" id="textfield5" /></td>
                </tr>
                <tr>
                <td width="125">&nbsp;</td>
                <td><input name="textfield6" type="text" class="inputfield" id="textfield6" /></td>
                </tr>
                <tr>
                <td width="125">Town/City:</td>
                <td><input name="textfield7" type="text" class="inputfield" id="textfield7" /></td>
                </tr>
                <tr>
                <td width="125">Postcode:</td>
                <td><input name="textfield8" type="text" class="shortfield" id="textfield8" /></td>
                </tr>
                <tr>
                <td width="125">Country:</td>
                <td><select name="select" class="commonselect" id="select">
                <option>United Kingdom</option>
                </select></td>
                </tr>
                </table>

				<!-- ## BILLING DETAILS -->

				<div class="tablesub">
					<div class="sameas">
                        <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                        <td valign="middle">Same as Shipping Address</td>
                        <td valign="middle"><input name="multi_note" type="checkbox" onclick="showMe('div1', this)" value="1" checked></td>
                        </tr>
                        </table>
					</div>
					Billing Details
				</div>

				<div id="div1" style="display:none;">	
                    <table border="0" cellpadding="5" cellspacing="0">
                    <td>Name:</td>
                    <td><input name="textfield9" type="text" class="inputfield" id="textfield9" /></td>                    
                    <tr>
                    <td width="125">Address:</td>
                    <td><input name="textfield5" type="text" class="inputfield" id="textfield5" /></td>
                    </tr>
                    <tr>
                    <td width="125">&nbsp;</td>
                    <td><input name="textfield6" type="text" class="inputfield" id="textfield6" /></td>
                    </tr>
                    <tr>
                    <td width="125">Town/City:</td>
                    <td><input name="textfield7" type="text" class="inputfield" id="textfield7" /></td>
                    </tr>
                    <tr>
                    <td width="125">Postcode:</td>
                    <td><input name="textfield8" type="text" class="shortfield" id="textfield8" /></td>
                    </tr>
                    <tr>
                    <td width="125">Country:</td>
                    <td><select name="select" class="commonselect" id="select">
                    <option>United Kingdom</option>
                    </select></td>
                    </tr>
                    </table>                
				</div>
				<a class="proddetails proce" href="confirmOrder.php">Proceed</a>
			</div>
		</div>

		<!-- ## EXISTING CUSTOMER -->

		<div id="tab2" class="tab_content">    
			                 
			<div class="tablepad">
            <h6>Enter your login details below to access your account:</h6>  
                <table border="0" cellpadding="0" cellspacing="0">
                <tr>
                <td width="90">Email address:</td>
                <td><input name="textfield15" type="text" class="inputfield" id="textfield15" /></td>
                </tr>
                <tr>
                <td width="90">Passsword:</td>
                <td><input name="textfield15" type="text" class="inputfield" id="textfield16" /></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td class="size11">Forgotten password? <a href="#">Click here</a></td>
                </tr>
                <tr>
                <td>&nbsp;</td>
                <td><a class="proddetails proce" href="#">Submit</a></td>
                </tr>
                </table>
			</div>
		</div>

		<!-- ## WITHOUT ACCOUNT -->        

		<div id="tab3" class="tab_content">

            <div class="tablepad">
             <h6>Enter your details below to proceed without creating an account:</h6>

				<!-- ## SHIPPING DETAILS -->
				<div class="tablesub">Shipping Details</div>
                
                <table border="0" cellpadding="5" cellspacing="0">
                <td>Name:</td>
                <td><input name="textfield9" type="text" class="inputfield" id="textfield9" /></td>                
                <tr>
                <td width="125">Email address:</td>
                <td><input name="textfield3" type="text" class="inputfield" id="textfield3" /></td>
                </tr>
                <tr>
                <td width="125">Telephone number:</td>
                <td><input name="textfield4" type="text" class="inputfield" id="textfield4" /></td>
                </tr>
                <tr>
                <td width="125">Address:</td>
                <td><input name="textfield5" type="text" class="inputfield" id="textfield5" /></td>
                </tr>
                <tr>
                <td width="125">&nbsp;</td>
                <td><input name="textfield6" type="text" class="inputfield" id="textfield6" /></td>
                </tr>
                <tr>
                <td width="125">Town/City:</td>
                <td><input name="textfield7" type="text" class="inputfield" id="textfield7" /></td>
                </tr>
                <tr>
                <td width="125">Postcode:</td>
                <td><input name="textfield8" type="text" class="shortfield" id="textfield8" /></td>
                </tr>
                <tr>
                <td width="125">Country:</td>
                <td><select name="select" class="commonselect" id="select">
                <option>United Kingdom</option>
                </select></td>
                </tr>
                </table>

				<!-- ## BILLING DETAILS -->

				<div class="tablesub">
					<div class="sameas">
                        <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                        <td valign="middle">Same as Shipping Address</td>
                        <td valign="middle"><input name="multi_note" type="checkbox" onclick="showMe('div2', this)" value="1" checked></td>
                        </tr>
                        </table>
					</div>
					Billing Details
				</div>

				<div id="div2" style="display:none;">	
                    <table border="0" cellpadding="5" cellspacing="0">
                    <td>Name:</td>
                    <td><input name="textfield9" type="text" class="inputfield" id="textfield9" /></td>                    
                    <tr>
                    <td width="125">Address:</td>
                    <td><input name="textfield5" type="text" class="inputfield" id="textfield5" /></td>
                    </tr>
                    <tr>
                    <td width="125">&nbsp;</td>
                    <td><input name="textfield6" type="text" class="inputfield" id="textfield6" /></td>
                    </tr>
                    <tr>
                    <td width="125">Town/City:</td>
                    <td><input name="textfield7" type="text" class="inputfield" id="textfield7" /></td>
                    </tr>
                    <tr>
                    <td width="125">Postcode:</td>
                    <td><input name="textfield8" type="text" class="shortfield" id="textfield8" /></td>
                    </tr>
                    <tr>
                    <td width="125">Country:</td>
                    <td><select name="select" class="commonselect" id="select">
                    <option>United Kingdom</option>
                    </select></td>
                    </tr>
                    </table>                
				</div>
				<a class="proddetails proce" href="confirmOrder.php">Proceed</a>
			</div>
		</div>        
      </div> <!------- End tab_container here -------------->
      
	</div> <!------- End divHold here -------------->

		</td>
  </tr>
</table>
</td>
</tr>
</table>
</div> <!------- End main here -------------->
</div> <!------- End mainWrapper here -------------->
<!-- Footer Section Starts --> <?php include('includes/tpl_footer.php'); ?><!-- Footer Section Ends -->
</body>
</html>




