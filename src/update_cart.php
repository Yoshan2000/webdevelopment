<?php
    session_start();

    if(isset($_SESSION["email"])) {
        require("conf.php");

        $email = $_SESSION["email"];

        if(!isset($email)) {
            return;
        }

        $sql = "SELECT * FROM user WHERE email = '{$email}'";
        $result = mysqli_query($conn, $sql);

        if($result) {
            $user_id = mysqli_fetch_row($result)[0];
        }

        if(!isset($user_id)) {
            return;
        }

        $payload = json_decode(file_get_contents('php://input'));//is used to read raw POST data from the incoming HTTP request
        $product_id = intval($payload->product_id);
        $quantity = $payload->quantity;

        if(!isset($product_id) || !isset($quantity)) {
            return;
        }

        $sql = "SELECT * FROM cart WHERE user_id = {$user_id} AND pid = {$product_id}";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count < 1) {
            return;
        }

        $item_id = intval(mysqli_fetch_assoc($result)["id"]);

        if($quantity == 0) {
            $sql = "DELETE FROM cart WHERE id = {$item_id}";
            $result = mysqli_query($conn, $sql);

            echo json_encode(true);
            return;
        } 

        $sql = "UPDATE cart SET quantity = {$quantity} WHERE user_id = {$user_id} AND pid = {$product_id}";
        $result = mysqli_query($conn, $sql);

        echo json_encode(true);
    }