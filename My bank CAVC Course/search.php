<?php
	#echo "before copying values";
	# copy values from request to local variable
	$id = $_POST['cust_id'];
	$name = $_POST['cust_name'];

	#echo "before connecting db";
	# connect to database
	$con = mysqli_connect("localhost", "root", "root123", "Mybank");

	if (!$con)
	{
		echo "Could not connect : " . mysqli_connect_errno() . PHP_EOL;
		exit;
	}

	#echo "before creating query";
	# create a sql query
	if (strlen($id) > 0)
	{
		# search by id
		$sql = "select cust_id, cust_name, cust_address, cust_city, cust_country, cust_postcode, cust_contact from Customer where cust_id = '" . $id . "' order by cust_id asc";
	}
	elseif (strlen($name) > 0)
	{
		# search by name
		# $sql = "select cust_id, cust_name, cust_address, cust_city, cust_country, cust_postcode, cust_contact from Customers where cust_name = '" . $name . "' order by cust_id asc";
		$sql = "select cust_id, cust_name, cust_address, cust_city, cust_country, cust_postcode, cust_contact from Customer where cust_name like '%" . $name . "%' order by cust_id asc";
	}
	else
	{
		# both are blank - show error message
		echo "You must enter either a id or company name";
		exit;
	}

	#echo "before running query" . PHP_EOL . $sql . PHP_EOL;
	# run query
	$result = mysqli_query($con, $sql);

	#echo "after running query";
	if (!$result)
	{
		echo "Error executing query : " . mysqli_error($con) . PHP_EOL . $sql;
		exit;
	}

	#echo "before reading results";
	# examine results
	echo "<table>";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['cust_id'] . "</td>";
		echo "<td>" . $row['cust_name'] . "</td>";
		echo "<td>" . $row['cust_contact'] . "</td>";
		echo "</tr>";
	}
		echo "</table>";

	# close database connection
	mysqli_free_result($result);
	mysqli_close($con);
?>