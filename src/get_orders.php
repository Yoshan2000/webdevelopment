<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket World</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  
    <link rel="stylesheet" href="table.css">

</head>
<body>
    <div class="img1">
        <img src="images/admin image.avif"></img>
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
            <!-- <i class="fas fa-bars" id="menu-bars"></i> -->
            
        </div>

    </header>

    <?php

    include('conf.php');
    $query = "SELECT * FROM `order`";
    $run = mysqli_query($conn, $query);
    $result = mysqli_num_rows($run);

    if ($result) {
        echo "<table border='1' class='table'>
            <tr>
                <th>Order_id</th>
                <th>User id </th>
                <th>product id </th>
                <th>total</th>

            </tr>";

        while ($row = mysqli_fetch_row($run)) {
            echo "<tr>";
            echo "<td>" . $row[0] . "</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "<td>" . $row[3] . "</td>";
        
        
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo ("NOT ABLE TO GET DATA !!!!!");
    }

    mysqli_close($conn);
    ?>


    
    
    <script src="script.js"></script>
</body>
</html>
