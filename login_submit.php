<?php
    require 'common.php';
    $email = $_POST['email'];
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)){
       // echo "Incorrect email";
        header('location: login.php?email_error=enter correct email ');
    }
    
    $password = $_POST['password'];
    if (strlen($password)<6) {
        //echo "Password should have at least 6 characters";
         header('location: login.php?password_error=enter correct password ');
    }
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);
    md5($password);
    // use insert query and store the data in the database.
    $select_query = "SELECT id, email_id FROM users WHERE email_id = '$email' ";
    $select_query_result = mysqli_query($con, $select_query);
    $user_entry = mysqli_num_rows($select_query_result);
    if ($user_entry == 0) {
        header('location: signup.php');
    } else {
        while($row = mysqli_fetch_array($select_query_result)) {
            $_SESSION[$row['email_id']] = $email;
            $_SESSION[$row['id']] = mysqli_insert_id($con);
            header('location: products.php');
        }
    }
?>
