<?php
    function check_if_added_to_cart($item_id) {
        $user_id = $_SESSION['id'];
        include 'common.php';
        $check_status_query = "SELECT * FROM users_items WHERE items_id = '$item_id' AND user_id = '$user_id' AND status = 'Added to cart' ";
        $check_status_result = mysqli_query($con, $check_status_query);
        if (mysqli_num_rows($check_status_result) >= 1) {
            return 1;
        } else {
            return 0;
        }
    }
?>