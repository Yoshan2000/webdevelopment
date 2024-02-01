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

        $payload = json_decode(file_get_contents('php://input'));
        $product_id = intval($payload->product_id);

        if(!isset($product_id)) {
            return;
        }

        $sql = "SELECT * FROM cart WHERE user_id = {$user_id} AND pid = {$product_id}";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count > 0) {
            return;
        }

        $sql = "INSERT INTO cart (user_id, pid, quantity) VALUES ({$user_id}, {$product_id}, 1)";
        $result = mysqli_query($conn, $sql);

        echo json_encode(true);
    }