<?php
include "db.php"; 
?>

<?php

if(isset($_POST['submit']))
{
	$username=$_POST['type'];
	$lusername=$_POST['amount'];
	$email=$_POST['dateofpayment'];
	$phonenumber=$_POST['time'];
	

	$date = $_POST;

	if (empty($date['type']) || empty($date['amount']) || empty($date['dateofpayment']) || empty($date['time'])) {
		die('Please fill all required feilds!');
	}


/*$username=pg_prepare($db_connection,$username);*/

$query = "INSERT INTO public.payment (paymenttype, paymentamount, pdate, ptime) 
VALUES('$username', '$lusername', '$email', '$phonenumber')";
$result = pg_query($db_connection,$query);
if ($result)
{
	echo "Payment Successful";
}
else
{
	echo "something went wrong";
}

}

?>