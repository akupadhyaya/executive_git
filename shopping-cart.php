<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Printfastonline | Shopping Cart</title>
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
<table width="100%" cellpadding="0" cellspacing="0">
	<tr>
		<td>
        <div class="hdtxt"><!------- Start hdtxt here -------------->
        <h2>Shopping Cart</h2>  
        </div> <!------- End hdtxt here -------------->
        
		<form name="cart_quantity" class="cart_quantity" action="#" method="post"> <!------- Start Category Form here -------------->
		<table border="0" cellpadding="0" cellspacing="0" width="100%" class="cartMainTable">
			<tr class="basketHeaderLines" >
				<th >Products</th>
				<th width="40%" > Item Details</th>
                <th >Item Price</th>
                <th >Quantity</th>
				<th class="basketLinesleft" >Subtotal</th>
                <th >Delete Items</th>
			</tr>
			<tr class="basketHeaderLines">
				<td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
               <td >&nbsp;</td>
               <td >&nbsp;</td>
			</tr>
			<tr class="basketHeaderLines">
				<td class="cartRowImg"><a href="product-info.php"><img src="images/prodSmall.jpg" alt="" /></a></td>
                
				<td class="cartProdName"> <span>Product Name<br />(From £0.35)</span><br />
                 <a href="#" class="links">Save for later</a>
                </td>
                
               <td class="cartProdPrice">&pound;0.35</td>
        
        <td class="cartProdTotal">  
        <div class="basketLineItem cartProdQty" align="center" valign="top">
					<a href="javascript:changeQty('qty_272061','-1')"><img src="images/box_minus.gif" alt="" onClick="showDisplayTable('clickHereToRecalculateTotalsDIV')" border="0" hspace="2"></a>
                    <input alt="Please click &#8217;Update Quantities&#8217; button after you have made the change." value="1" onChange="showDisplayTable('clickHereToRecalculateTotalsDIV')" name="qty_272061" size="2" maxlength="3" class="textFieldNoWidth" type="text">
                    <a href="javascript:changeQty('qty_272061','1')"><img onClick="showDisplayTable('clickHereToRecalculateTotalsDIV')" src="images/box_plus.gif" alt="" border="0" hspace="2"></a>
                    <br>
                   </div> 
              </td>
				<td class="cartProdTotal basketLinesleft">&pound;0.35</td>
                <td><a href="#"><img  src="images/del.png" width="19" height="19" /></a></td>

                <tr class="basketHeaderLines">
				<td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
			</tr>

            
            <tr class="basketHeaderLines">
				<td class="cartRowImg"><a href="product-info.php"><img src="images/prodSmall.jpg" alt="" /></a></td>
				<td class="cartProdName"> <span>Product Name<br />(From £0.35)</span><br />
                 <a href="#" class="links">Save for later</a>
                </td>
              <td class="cartProdPrice">&pound;0.35</td>
   
        <td class="cartProdTotal">
        <div class="basketLineItem cartProdQty" align="center" valign="top">
					<a href="javascript:changeQty('qty_272061','-1')"><img src="images/box_minus.gif" alt="" onClick="showDisplayTable('clickHereToRecalculateTotalsDIV')" border="0" hspace="2"></a>
                    <input alt="Please click &#8217;Update Quantities&#8217; button after you have made the change." value="1" onChange="showDisplayTable('clickHereToRecalculateTotalsDIV')" name="qty_272061" size="2" maxlength="3" class="textFieldNoWidth" type="text">
                    <a href="javascript:changeQty('qty_272061','1')"><img onClick="showDisplayTable('clickHereToRecalculateTotalsDIV')" src="images/box_plus.gif" alt="" border="0" hspace="2"></a>
                    <br>
					</div></td>
				<td class="cartProdTotal basketLinesleft">&pound;0.35</td>
                <td><a href="#"><img  src="images/del.png" width="19" height="19" /></a></td>
                <tr class="basketHeaderLines">
				<td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
                <td >&nbsp;</td>
			</tr>
			</table>
          
             
          <div id="totalstable">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" >
            <tr>
                <td width="55%" align="left" valign="top">
                <span style=" margin:0 0 10px; float:left; font-size:14px;">Select delivery option (in addition to the above despatch turnaround):</span>
    <select class="ROC_shippingselect" onchange="ChangeAction2(1)" name="shipping"><option value="0" selected="">Please Select</option><option value="1">Delivered between 6am-8pm (GB Mainland only) £8.99</option><option value="5">IRELAND / N.IRELAND (+2 Extra Days) up to 10kg £30.00</option><option value="7">HIGHLANDS (+2 Extra Days) up to 10kg £30.00</option><option value="8">ISLE OF WIGHT (+2 Extra Days) up to 10kg £30.00</option></select></td>
                <td align="right" valign="top">Sub Total:&nbsp;&nbsp;</td>
                <td width="28%" colspan="2" align="left" valign="top">&pound;140.00</td>
            </tr>
            <tr>
   <td align="left" valign="middle">   
   <input name="textfield3" size="37" type="text" class="discount" id="textfield3" 
   value="Enter discount code and press submit"  onblur="myBlur(this);" onfocus="myFocus(this);"/>
                <a class="proddetails marright" href="#" style="font-size: 13px; padding: 1px 10px;">Submit</a></td>
                <td align="right" valign="middle">Discount:&nbsp;&nbsp;</td>
                <td align="left" valign="middle">&pound;20.00</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td align="left" valign="top">&nbsp;</td>
                <td align="right" valign="top">Postage:&nbsp;&nbsp;</td>
                <td colspan="2" align="left" valign="top">&pound;20.00</td>
                </tr>
               <tr>
                <td align="right" valign="top" class="total">&nbsp;</td>
                <td align="right" valign="top" class="total">Select Location:</td>
                <td colspan="2" valign="top" class="total">
                 <select name="select" class="locationselect" id="select">
                     <option selected="selected">- - - - </option>
                     <option value="UK">UK</option>
                     <option value="Europe">Europe</option>
                     <option value="Rest of The World">Rest of The World</option>
                  </select>
                </td>
            </tr>
            <tr>
                <td align="right" valign="top" class="total">&nbsp;</td>
                <td align="right" valign="top" class="total">Grand Total:</td>
                <td colspan="2" valign="top" class="total">&nbsp;&pound;140.00</td>
            </tr>
            <tr>
                <td align="left" valign="top" style="border-bottom:none;">&nbsp;</td>
                <td colspan="3" align="right" valign="top" style="border-bottom:none;"><a class="proddetails marright" href="product-listing.php" style="font-size: 13px; padding: 5px 8px;">Continue Shopping</a><a class="proddetails marright" href="checkout.php" style="font-size: 13px; padding: 5px 8px; margin-right:79px;">Proceed to Checkout</a></td>
            </tr>
        </table>
    </div>
</form> <!------- End Category Form here -------------->
		</td>
	</tr>
</table>
</div> <!------- End main here -------------->
</div> <!------- End mainWrapper here -------------->
<!-- Footer Section Starts --> <?php include('includes/tpl_footer.php'); ?><!-- Footer Section Ends -->
</body>
</html>




