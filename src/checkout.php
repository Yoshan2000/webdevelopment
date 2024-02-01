<?php
    session_start();
    
    require_once("conf.php");

    if(!isset($_SESSION["email"])) {
        throw new \Exception("No email found in session");
    }

    
    $email = $_SESSION["email"];
    $sql = "SELECT * FROM user WHERE email = '{$email}'";
    $result = mysqli_query($conn, $sql);

    if($result) {
        $user_id = mysqli_fetch_row($result)[0];
    }

    if(!isset($user_id)) {
        throw new \Exception("Cant find user_id");
    }


    $sql = "SELECT cart.user_id, cart.pid,cart.quantity , products.price FROM cart JOIN products ON cart.pid=products.id WHERE user_id = {$user_id}";
    $result = mysqli_query($conn, $sql);
    
    if(!$result) {
        throw new \Exception("No items in cart");
    }

    
    while($row = mysqli_fetch_assoc($result)) {

        $product_id = $row["pid"];
        $quantity = $row["quantity"];
        $price=$row["price"];
        $total=$quantity*$price;

       
        if ($product_id !== null && $product_id !== "") {
            $sql1 = "INSERT INTO `order` (user_id, product_ids, total) VALUES ({$user_id}, '{$product_id}', {$total})";
            $result1 = mysqli_query($conn, $sql1);
            if(!$result1) {

                throw new \Exception("Could not create order");
            }
        }
    }


// clear cart
$sql = "DELETE FROM cart WHERE user_id = {$user_id}";
$result = mysqli_query($conn, $sql);
    
if(!$result) {
    throw new \Exception("Couldnt clear cart");
}

    // everything is good
echo json_encode(true);
    