<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
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
        <title>Lifestyle Store&ndash;Settings</title>
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
                    <h1>Change Password</h1>
                    <form method="POST" action="settings_script.php">
                        <div class="form-group">
                            <input type="password" name="oldpwd" placeholder="Old Password" class="form-control">
                            <div><?php echo $_GET['old_password_error']; ?></div>
                        </div>
                        <div class="form-group">
                            <input type="password" name="newpwd" placeholder="New Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="renewpwd" placeholder="Re-type New Password" class="form-control">
                            <div><?php echo $_GET['password_error']; ?></div>
                        </div>
                        <input type="submit" name="Change" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>
