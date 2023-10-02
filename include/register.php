<?php
include "db.php"; 
?>

<?php

if(isset($_POST['submit']))
{
	$username=$_POST['fname'];
	$lusername=$_POST['lname'];
	$email=$_POST['mail'];
	$phonenumber=$_POST['number'];
	$birth=$_POST['dateofbirth'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];


	$date = $_POST;

	if (empty($date['fname']) || empty($date['lname']) || empty($date['mail']) || empty($date['number']) || empty($date['dateofbirth']) || empty($date['password']) || empty($date['cpassword'])) {
		die('Please fill all required feilds!');
	}


	if ($date['password'] !== $date['cpassword']) {
		die('Password and confirm password should match!');
	}

/*$username=pg_prepare($db_connection,$username);*/

$query = "INSERT INTO public.customer (firstname,email,phonenumber,agegroup,password,lastname,confirmpassword) 
VALUES('$username','$email','$phonenumber','$birth','$password','$lusername','$cpassword')";
$result = pg_query($db_connection,$query);
if ($result)
{
	echo "sign in Successful";
}
else
{
	echo "something went wrong";
}

}

?>