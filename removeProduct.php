<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            print_r($_POST);
            foreach ($_POST as $key => $value) {
                if (isset($_SESSION[$key])) {
                    $_SESSION[$key] = $_SESSION[$key] + 1;
                } else {
                    $_SESSION[$key] = 1;
                }
            }
            
            echo "<h1>Basket</h1>";
            foreach ($_SESSION as $key => $value) {
                if ($key != 'user') {
                    $value = $value - 1;
                    
                    echo "<table  border=1 width=\"500\">";
                    echo "<tr>";
                    echo "<td width=\"400\">$key</td>";
                 //   echo "<td width=\"100\">$value</td>";
                    echo "<td> <input type=\"text\"  value=\" $value\" /></td>";
                    echo "<td width=\"100\">4545</td>";
                    echo "</tr";
                    echo "</table>";
                }
            }
        ?>
        
        <form action="order.php" method="POST">
            <input type="submit" value="Order" />
        </form>
       
    </body>
</html>
