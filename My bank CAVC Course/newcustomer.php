<?php
	# copy the values from the request to local variables
	$name = $_POST['cust_name'];
	$address = $_POST['cust_address'];
	$city = $_POST['cust_city'];
	$postcode = $_POST['cust_postcode'];
	$country = $_POST['cust_country'];
	$contact = $_POST['cust_contact'];

	# connect to the database
	$con = mysqli_connect('localhost', 'root', 'root123', 'Mybank');

	if (!$con)
	{
		echo "Could not connect : " . mysqli_connect_errno(), PHP_EOL;
		exit;
	}

	# create an sql statement to insert values into the database
		$sql = "insert into Customer (cust_name, cust_address, cust_city, cust_country, cust_postcode, cust_contact) " .
		"values('" . $name . "', '" . $address . "', '" . $city . "', '" . $country . "', '" . $postcode . "', '" . $contact . "')";

	# run the query
	if (!mysqli_query($con, $sql))
	{
		echo "Error executing query : " . mysqli_error($con) . PHP_EOL . $sql;
		exit;
	}

	# close the database connection
	mysqli_close($con);

	# show a message to the user
	echo "Thank you"
?>