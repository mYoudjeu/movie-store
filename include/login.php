<?php
include "db.php"; 
?>

<?php

if(isset($_POST['submit']))
{
	$username=$_POST['email'];
	$password=$_POST['password'];

	$username=pg_prepare($db_connection,$username);
	$password=pg_prepare($db_connection,$password);

	$query = "SELECT * FROM customer WHERE email = '{$username}' ";
	$select_user_query = pg_query($db_connection, $query);
	if(!$select_user_query)
	{
		die("QUERY FAILED". pg_result_error($db_connection));
	}
}

while($row = pg_fetch_array($select_user_query))
{
	echo $db_id = $row['id'];
}

?>