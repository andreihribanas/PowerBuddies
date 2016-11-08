<?php
session_start();
$con = mysqli_connect("localhost", "root", "1234", "dbs");

$query = "SELECT email FROM tblCustomer WHERE"
        . " email=\"$_POST[email]\" AND password ="
        . " MD5(\"$_POST[pwd]\")";

$result = mysqli_query($con, $query);

if (mysqli_num_rows($result)===1){
    $_SESSION['user'] = $_POST['email'];
    print_r($_SESSION);
 //   echo "You have logged in!";
    echo "<p><a href=\"shop.php\">Shop</a></p>";

    header("Location: shop.php");
    
}else {
    echo "Login failed!";
    echo "<p><a href=\"login.php\">Login</a></p>";
}