<?php
    require 'common.php';
    if (isset($_SESSION['email'])) {
        header('location: products.php');
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
        <title>Lifestyle Store&ndash;SignUp</title>
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
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1>Sign Up</h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Name" class="form-control" required pattern="[a-zA-Z0-9]+">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                            <?php echo $_GET['email_error']; ?>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="contact" placeholder="Contact" class="form-control" required pattern="[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="city" required>
                                <option selected>Select City</option>
                                <option>Mumbai</option>
                                <option>Kolkata</option>
                                <option>Delhi</option>
                                <option>Chennai</option>
                                <option>Ahmedabad</option>
                                <option>Bangalore</option>
                                <option>Jaipur</option>
                                <option>Pune</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="address" placeholder="Address" class="form-control" required>
                        </div>
                        <input type="submit" name="Submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
