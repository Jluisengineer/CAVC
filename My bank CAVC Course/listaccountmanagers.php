<?php
	# connect to database
	$con = mysqli_connect("localhost", "root", "root123", "Mybank");

	if (!$con)
	{
	echo "Could not connect : " . mysqli_connect_errno() . PHP_EOL;
	exit;
	}

	# get list of account managers
	$sql = "select mgr_id, mgr_firstname, mgr_lastname, mgr_email, mgr_phone from AccountManagers order by mgr_lastname";
	$result = mysqli_query($con, $sql);

	if (!$result)
	{
	echo "Error executing query : " . mysqli_error($con) . PHP_EOL . $sql;
	exit;
	}

	echo "<div style=\"text-align: center;\">";
	# format the data into a table
	echo "<table cellpadding=\"10px\" border=\"1px\">";
	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>" . $row['mgr_id'] . "</td>";
		echo "<td>" . $row['mgr_firstname'] . "</td>";
		echo "<td>" . $row['mgr_lastname'] . "</td>";
		echo "<td>" . $row['mgr_email'] . "</td>";
		echo "<td>" . $row['mgr_phone'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "</div>";

	# close database connection
	mysqli_free_result($result);
	mysqli_close($con);
?>