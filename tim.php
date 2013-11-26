<?php
  if( $_POST["quantity_1"] || $_POST["quantity_2"] || $_POST["quantity_3"])
  {
    $quantity_1 = $_POST["quantity_1"];
    $quantity_2 = $_POST["quantity_2"];
    $quantity_3 = $_POST["quantity_2"];
     exit();
  }
?>

<!--Paypal Buy Now Code:-->

<form method="post" action="https://www.paypal.com/cgi-bin/webscr">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="xxx.xxx@yyy.zzz">
<input type="hidden" name="currency_code" value="USD">

<!--First Item-->
<p>
<input type="hidden" name="item_name_1" value="Adult - Barn Dance & BBQ">
<input type="hidden" name="item_number_1" value="ADBDBBQ">
<input type="hidden" name="amount_1" value="15.00">
Adult - Barn Dance & BBQ
 <input type="hidden" name="quantity_1" value="<?php echo $quantity_1; ?>">  
</p>

<!--Second Item-->
<p>
<input type="hidden" name="item_name_2" value="Child - Barn Dance & BBQ">
<input type="hidden" name="item_number_2" value="CHBDBBQ">
<input type="hidden" name="amount_2" value="5.00">
Child - Barn Dance & BBQ
 <input type="hidden" name="quantity_2" value="<?php echo $quantity_2; ?>">  
</select>
</p>

<!--Third Item--> 
<p>
<input type="hidden" name="item_name_3" value="5 Raffle Tickets">
<input type="hidden" name="item_number_3" value="ARAFTIX">
<input type="hidden" name="amount_3" value="3.00">
Additional 5 Raffle Tickets
 <input type="hidden" name="quantity_3" value="<?php echo $quantity_3; ?>">  
</p>

<input type="hidden" name="return" value="http://www.yyy.zzz/thankyou.htm">

<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif"
border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" 
width="1" height="1">
</form>