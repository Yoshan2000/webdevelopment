<?php
// Start the session
session_start();

// Include database configuration
require('conf.php');

// Debugging: Check if the session is set

// Redirect to login page if session is not set
if (!isset($_SESSION['email'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style-3.css">
</head>

<title>Administrative</title>

<body>
    <div class="img1">
        <img src="images/admin image.avif"></img>
    </div>
    
    <header>
        <a href="user.php" class="logo">
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
            <i class="fa-solid fa-user" id="user-btn"></i></a>
        </div>

        <div class="user-box" id="user-box">
            <!-- Display the email from the session if it's set -->
            <p>Email: <span><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></span></p>
        
            <form method="post" action="logout.php">
            
                <input type="hidden" name="logout" value="1">
                <button type="submit" class="logout-btn">Log Out</button>
            </form>
        </div>
    </header>

    <div class="banner">
        <div class="detail">
            <h1>Admin dashboard</h1>
            <p>Welcome Admin customize our website </p>
        </div>
    </div>

    <section class="dashboard">
        <div class="box-container">
            <div class="box">
                <?php
                $select_users = mysqli_query($conn, "SELECT * FROM `user`")
                    or die('query failed');
                $num_of_users = mysqli_num_rows($select_users);
                ?>
                <h3><?php echo $num_of_users; ?></h3>
                <p>total_registered users</p>
            </div>

            <div class="box">
                <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `products`")
                    or die('query failed');
                $num_of_products = mysqli_num_rows($select_products);
                ?>
                <h3><?php echo $num_of_products; ?></h3>
                <p>total products of our shop</p>
            </div>

            <div class="box">
                <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM `order`")
                    or die('query failed');
                $num_of_orders= mysqli_num_rows($select_orders);
                ?>
                <h3><?php echo $num_of_orders; ?></h3>
                <p>total orders</p>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
    <script src="admin.js"></script>
</body>

</html>

