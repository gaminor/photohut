<!--++++++++++++++++++++++++++++++++++++Header++++++++++++++++++++++++++++++++++-->
<?php include 'includes/header.php' ?>
<?php include 'includes/manage_shipping.php' ?>

<!--+++++++++++++++++++++++++++++++Middle of the Page+++++++++++++++++++++++++++-->

	<div id="middle">
		<div id="bbg">
			<ul>
				<a href="index.php"><li>Home ></li></a>
				<a href="checkout.php"><li>Checkout ></li></a>
				<a href="order_summary.php"><li>Order Summary > </li></a>
				<a href="order_summary.php"><li>Sign In ></li></a>
				<a href="order_summary.php"><li>Shipping Info</li></a>

			</ul>


			<div id="shipping">

				
			<div class="shipping_address">

				<h2>Shipping Address:</h2>

				<form method="post" action="">
  		First Name:<br>
        <input type="text" name="firstname">
        <br>
        Last Name:<br>
        <input type="text" name="lastname">
        <br>
        Address:<br>
        <input type="text" name="address"> 
        <br>
        Address #2:<br>
        <input type="text" name="address2">
        <br>
        Apt/Suit#:<br>
        <input type="text" name="apt">
        <br>
        City:<br>
        <input type="text" name="city">
        <br>
        Country:<br>
        <select type="text" name="country">
  			<option value="United States">United States</option>
  			<option value="Canada">Canada</option>
  			<option value="Mexico">Mexico</option>
  			<option value="Other">Other</option>
		</select>
        <br>
        State/Provence:<br>
         <select type="text" name="state_province">
  			<option value="Washington">Washington</option>
  			<option value="Oregon">Oregon</option>
  			<option value="California">California</option>
  			<option value="Idaho">Idaho</option>
		</select>
        <br>
        Zip:<br>
        <input type="text" name="zip">
        <br>
        Phone:<br>
        <input type="text" name="phone">
        <br>
        Mailing List:<br>
        <input type="radio" name="mail_list" value="Yes" checked>Yes
        <input type="radio" name="mail_list" value="no">No
        <br>  <input type="submit" value="Submit Form">
		</form>
			</div>

			<a class="review" href="info_check.php">Review your Shipping info Here</a>


			</div>

		</div>

	</div>

<!--+++++++++++++++++++++++++++++++++++Footer+++++++++++++++++++++++++++++++-->


<?php include 'includes/footer.php' ?>







