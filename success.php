<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
    
    $id = $_GET['id'];
    $user_id = $_SESSION['id'];
    while($row = mysqli_fetch_array($id)) {
        $item_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id = '$user_id' AND items_id = '$row'";
        $item_result = mysqli_query($con, $item_query);
    }
    
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store&ndash;Order Confirmed</title>
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
            <div class="col-xs-4 col-xs-offset-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3>Success!</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-success">Your order is confirmed. Thank you for shopping with us. 
                            <a href="products.php">Click here</a> to purchase any other item.</p>
                    </div>
                    <div class="panel-footer"><p>Done with shopping? <a href="logout.php">Logout</a></p></div>
                </div>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
