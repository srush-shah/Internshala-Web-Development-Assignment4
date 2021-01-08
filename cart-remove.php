<?php
    require 'common.php';
    
    $id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $item_delete_query = "DELETE FROM users_items WHERE user_id = '$user_id' AND items_id = '$id'";
    $item_delete_result = mysqli_query($con, $item_delete_query);
    
    header('location: cart.php');
?>
