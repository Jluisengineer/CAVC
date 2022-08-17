<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My bank - Employee</title>
    <link rel="icon" href="img/icon-gold.png">
    <link rel="stylesheet" href="styles/style_employee_area.css">
    <style> @import url('https://fonts.googleapis.com/css?family=Bebas+Neue');</style>

</head>
<body>
    <?php
        session_start();

            if(!isset($_SESSION["user_1"])){
                header("location:index.html");
        }
        echo "<h3> Welcome ".$_SESSION["user_1"]."</h3>";
        echo "<a href='logout.php'><input type='button' value='Log out' id='logout'></a>";
    ?>
    <div>
    <h1>MyBank Customer Management</h1>
    </div>
    <div id="options">
            <table>
            <tr>
                <td><a href="new_customer.php"><img src="img/dataentry.jpg" title= "New customer" alt="New customer" ></a></td>
                <td><a href="search_customer.php"><img src="img/search.jpg" title= "Search customer" alt="Search customer"></a></td>
            </tr>
            <tr><td>New Customer</td><td>Search Customer</td></tr>
            <tr>
                <td><a href="new_transaction.php"><img src="img/newaccountmanager.jpg" title="New transaction" alt="New transaction" ></a></td>
                <td><a href="list_customers.php"><img src="img/listaccountmanagers.jpg" title="List Customers" alt="List Customers" ></a></td>
            </tr>
            <tr><td>New Transaction</td><td>List of Customers</td></tr>
            </table>
    </div>

</body>
</html>