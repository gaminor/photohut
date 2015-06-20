<!--++++++++++++++++++++++++++++++++++++Header++++++++++++++++++++++++++++++++++-->
<?php include 'includes/header.php' ?>
<?php include 'includes/credentials.php'; ?>

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


			<div id="check_info">


<?php 

define('DEBUG',TRUE); #we want to see all errors
function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

$sql = "select * from shipping";

$iConn = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myerror(__FILE__,__LINE__,mysqli_error()));
$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error()));
if (mysqli_num_rows($result) > 0)//at least one record!
{//show results
	while ($row = mysqli_fetch_assoc($result))
    {
	   echo "<p>";
	   echo "First Name: <b>" . $row['firstname'] . "</b><br />";
	   echo "Last Name: <b>" . $row['lastname'] . "</b><br />";
	   echo "Address: <b>" . $row['address'] . "</b><br />";
	   echo "Address 2: <b>" . $row['address2'] . "</b><br />";
	   echo "Apartment/Suit: <b>" . $row['apt'] . "</b><br />";
	   echo "Country: <b>" . $row['country'] . "</b><br />";
	   echo "State/Province: <b>" . $row['state_province'] . "</b><br />";
	   echo "Zip: <b>" . $row['zip'] . "</b><br />";
	   echo "Phone: <b>" . $row['phone'] . "</b><br />";
	   echo "Mailing List: <b>" . $row['mail_list'] . "</b><br />";
	   echo "Order Date: <b>" . $row['date'] . "</b><br />";
	   echo "</p>";
    }
}else{//no records
	echo '<div align="center">What! No customers?  There must be a mistake!!</div>';
}

@mysqli_free_result($result); #releases web server memory
@mysqli_close($iConn); #close connection to database

?>


			</div>

		</div>

	</div>

<!--+++++++++++++++++++++++++++++++++++Footer+++++++++++++++++++++++++++++++-->


<?php include 'includes/footer.php' ?>
