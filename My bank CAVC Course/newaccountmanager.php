<?php
	# copy the values from the request to local variables
	$firstname = $_POST['mgr_firstname'];
	$lastname = $_POST['mgr_lastname'];
	$email = $_POST['mgr_email'];
	$phone = $_POST['mgr_phone'];



	$errors = array("Here are the errors:");



	if (strlen(trim($firstname)) == 0)
	{
	array_push($errors, "The first name cannot be blank");
	}



	if (strlen(trim($lastname)) == 0)
	{
	array_push($errors, "The last name cannot be blank");
	}



	$regex = "/[A-Za-z0-9.]+@[A-Za-z0-9\.]+/";
	if (!preg_match($regex, $email))
	{
	array_push($errors, "The email address is not correctly formatted");
	}



	$regex = "/[0-9]{3} [0-9]{3} [0-9]{4}/";
	if (!preg_match($regex, $phone))
	{
	array_push($errors, "The phone number is not correctly formatted");
	}



	if (count($errors) > 1)
	{
	foreach ($errors as $error)
	{
	echo $error . "<br>";
	}
	exit;
	}



	# connect to the database
	$con = mysqli_connect('localhost', 'root', 'root123', 'MyBank');



	if (!$con)
	{
	echo "Could not connect : " . mysqli_connect_errno(), PHP_EOL;
	exit;
	}



	# create an sql statement to insert values into the database
	$sql = "insert into AccountManagers (mgr_firstname, mgr_lastname, mgr_email, mgr_phone) " .
	"values('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $phone . "')";



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