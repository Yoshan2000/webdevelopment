<?php
require('conf.php');
    

$result = mysqli_query($conn, "SELECT * FROM `products` WHERE `product_type` = '1'"); 

if ($result) {
    // Display each product
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="box">
                 <img src="images/<?php echo $row["image"]; ?>" alt="">
                 <h3><?php echo $row["name"]; ?></h3>
                 <div class="stars">
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star"></i>
                     <i class="fa fa-star-o"></i>
                 </div>
                 <span>$<?php echo $row["price"]; ?></span>
                 <a class="btn add-to-cart" data-product-id="<?php echo $row["id"]; ?>">add to cart</a>
            </div>
        <?php
    }
} else {
   
    echo 'Error: ' . mysqli_error($conn);
}



mysqli_close($conn);
?>