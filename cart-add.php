<?php
    $item_id = $_GET['id'];
    include 'common.php';
    $user_id = $_SESSION['id'];
    $insert_query = "INSERT INTO users_items(user_id,items_id,status) VALUES ('$user_id','$item_id','Added to cart')";
    $insert_submitted = mysqli_query($con, $insert_query);
    header('location: products.php');
?>
