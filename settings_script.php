<?php
    require 'common.php';
    if (!isset($_SESSION['email'])) {
        header('location: index.php');
    }
    
    $email_id = $_SESSION['email'];
    $oldpassword = $_POST['oldpwd'];
    $newpassword = $_POST['newpwd'];
    $renewpassword = $_POST['renewpwd'];
    if (strlen($newpassword != $renewpassword)) {
        //echo "Password should have at least 6 characters";
         header('location: setting.php?password_error=password does not match in both fields! ');
    }
    
    $pwd_query = "SELECT password FROM users WHERE email_id = '$email_id'";
    $pwd_result = mysqli_query($con, $pwd_query);
    
    if (pwd_result != $oldpassword) {
        header('location: setting.php?old_password_error=incorrect password! ');
    }
?>
