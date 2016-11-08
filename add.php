<?php
//this line creates a connection to the database
//and puts it in a variable $con
$con = mysqli_connect("localhost", "root", "1234", "dbs");
//this line gets the password from $_POST
//and hashes it
$pwd = md5($_POST['password']);
//this line creates a query (as an SQL string)
//using data entered by the user
//and collected from $_POST
$query = "INSERT INTO tblCustomer VALUES ("
        . "\"$_POST[fname]\", \"$_POST[lname]\", "
        . "\"$_POST[email]\", \"$pwd\", "
        . "\"$_POST[houseNo]\", \"$_POST[streetName]\","
        . "\"$_POST[city]\", \"$_POST[postCode]\")";
//this line prints out the query
// echo $query;
//this line runs the query
mysqli_query($con, $query);
mysqli_close($con);
header("Location: index.html");


