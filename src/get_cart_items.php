<?php
    session_start();

    if(isset($_SESSION["email"])) {
        require("conf.php");

        $email = $_SESSION["email"];

        if(!isset($email)) {
            return;
        }

        $sql = "SELECT id FROM user WHERE email = '{$email}'";
        $result = mysqli_query($conn, $sql);

        if($result) {
            $user_id = mysqli_fetch_row($result)[0];
        }

        if(!isset($user_id)) {
            return;
        }

        $sql = "SELECT c.id, c.user_id, c.quantity, c.pid, p.name, p.image, p.price FROM cart AS c, products AS p WHERE c.user_id = {$user_id} AND c.pid = p.id";

        $result = mysqli_query($conn, $sql);

        $products = [];
        if($result) {
            while($row = mysqli_fetch_assoc($result)) {
                $products[] = [
                    "id" => $row["id"],
                    "product_id" => $row["pid"],
                    "name" => $row["name"],
                    "image" => $row["image"],
                    "price" => $row["price"],
                    "quantity" => $row["quantity"],
                ];
            }
        }

        echo json_encode([
            "items" => $products
        ]);
    }