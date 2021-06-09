<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

// if((isset($_REQUEST['status'])) && ($_REQUEST['status'] != ''))
// {	

// 	echo $_REQUEST['status'];

// 	echo "<br>";

// }

if((isset($_REQUEST['message'])) && ($_REQUEST['message'] != ''))
{	

	echo $_REQUEST['message'];

	echo "<br>";

}

if((isset($_REQUEST['paymentID'])) && ($_REQUEST['paymentID'] != ''))
{

	echo "Payment ID:".$_REQUEST['paymentID'];

	echo "<br>";

}

if((isset($_REQUEST['transaction_id'])) && ($_REQUEST['transaction_id'] != ''))
{

	echo "Transaction ID: ".$_REQUEST['transaction_id'];

	echo "<br>";

}

if((isset($_REQUEST['payment_response'])) && ($_REQUEST['payment_response'] != ''))
{

	echo "Payment response: ".$_REQUEST['payment_response'];

	echo "<br>";

}


if((isset($_REQUEST['itemName'])) && ($_REQUEST['itemName'] != ''))
{

	echo "What: ".$_REQUEST['itemName'];

	echo "<br>";

}
if((isset($_REQUEST['currency'])) && ($_REQUEST['currency'] != ''))
{

	echo "Price: ".$_REQUEST['currency'].$_REQUEST['itemPrice'];

}
?>

</body>
</html>