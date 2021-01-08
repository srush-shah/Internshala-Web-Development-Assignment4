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
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']); //mysqli_real_escape_string() checks for any characters entered in string by the user and formats the string usinsg escape character when needed
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $user_registration_query = "insert into users(name,email_id,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
        // die($user_registration_query);
    
        $user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    
        echo "User successfully inserted";
        
        $_SESSION['id'] = mysqli_insert_id($con);
        session_start();
        $_SESSION['email_id'] = $email;
        header('location: products.php ');
    } else {
        header('location: signup.php?email_error=email already exists ');
    }
?>