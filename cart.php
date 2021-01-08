<?php
    require 'common.php';
        
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
    }
    
    $user_id = $_SESSION['id'];
    $user_products_query = "SELECT * FROM users_items INNER JOIN items WHERE user_id = '$user_id' AND items_id = items.id";
    $user_products_result = mysqli_query($con, $user_products_query);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store&ndash;Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- External css file index.css placed in the folder css is linked -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include 'header.php';
        ?>
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                <table class="table table-striped">
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
                    <?php
                        if (mysqli_num_rows($user_products_result) == 0) {
                            echo "<center>Add items to the cart first!</center>";
                        } else {
                            $sum = 0; 
                            $id = " ";
                            while ($row = mysql_fetch_array($user_products_result)) {
                                $sum = $sum + $row['price'];
                                $id = $row['id'].", ";
                    ?>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $row['name']; ?><a href="cart-remove.php?id={$row['id']}" class="remove_item_link">Remove</a></td>
                                <td><?php echo $row['price']; ?></td>
                                
                    <?php
                                
                            }
                        }
                    ?>
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>Rs <?php echo $sum; ?></td>
                        <td><a href="success.php?id='$id"><button class="btn btn-primary">Confirm Order</button></a></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
