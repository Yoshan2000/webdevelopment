<?php
require('conf.php');

if (isset($_POST['submit-btn111'])) {
    $error = null;
    $success = null;

    // first try to upload images 
    $image = $_FILES['image']['name'];

    if ($_FILES["image"]["tmp_name"] > 20000000) {
        $error = 'Image is too large';
    } else {
        move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . basename($_FILES["image"]["name"]));
    }

   
    $product_name = $_POST['name'];
    $product_type =  $_POST['product_type'];
    $product_price =  $_POST['price'];
    $product_detail =  $_POST['details'];

    // Check if the product name already exists
    $sql = "SELECT name FROM `products` WHERE name = '$product_name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $error = 'Product with the same name already exists.';
    } else {
        $sql = "INSERT INTO `products`(`name`, `price`, `product_detail`, `image`, `product_type`) VALUES('$product_name', '$product_price', '$product_detail', '$image', '$product_type')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            $error = 'Query failed: ' . mysqli_error($conn);
        }
    }
    
    $success = 'Product added successfully!';
}


$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-3.css">
    <title>Administrative</title>
</head>

<body>
    <div class="img">
        <video src="images/video1.mov" loop muted autoplay></video>
    </div>
    <header>
        <a href="#" class="logo">
            <h3>Select your game with us.</h3>
        </a>

        <nav class="navbar">
            <a href="admin.php">Admin Home</a>
            <a href="product.php">Products</a>
            <a href="get_users.php">Users</a>
            <a href="get_orders.php">Orders</a>
        </nav>

        <div class="icons">
            <i class="fas fa-bars" id="menu-bars"></i>
        </div>
    </header>

    <section class="add_products" id="products">
        <div class="form-box">
            <label>
                <?php 
                    if(isset($error)) {
                        echo $error;
                    }

                    if (isset($success)) {
                        echo $success;
                    }
                ?>
            </label>
            <form method="POST" enctype="multipart/form-data">
                <div class="input-field111">
                    <label for="price">Product name</label>
                    <input type="text" class="input-field22" name="name" id="name" required>
                </div>
                <div class="input-field111">
                    <select name="product_type">
                        <option value="0">Select product:</option>
                        <option value="1">Bats</option>
                        <option value="2">Gloves</option>
                        <option value="3">Leg Pads</option>
     
                    </select>
                </div>
                <div class="input-field111">
                    <label for="price">Product price</label>
                    <input type="text" class="input-field22" name="price" id="price" required>
                </div>

                <!-- Choose either textarea or input for 'Product details' based on your requirements -->
                <div class="input-field111">
                    <label for="details">Product details</label>
                    <textarea name="details" class="input-field22" id="details" required></textarea>
                </div>

                <div class="input-field111">
                    <label>Product image</label>
                    <input type="file" name="image" accept="image/jpg, image/jpeg, image/png, image/webp" required>
                </div>
                <button type='submit' name='submit-btn111' class='submit-btn111'>Submit</button>
            </form>
        </div>
    </section>
    <script src="script.js"></script>
</body>

</html>
