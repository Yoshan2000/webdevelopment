<header>
    <a href="#" class="logo">

        <h3>Select your game with us.</h3></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#bats">Bats</a>
        <a href="#Gloves">Gloves</a>
        <a href="#LegPads">Leg Pads</a>
        <a href="#about">About</a>
        
    </nav>

    <?php
        if(!isset($_SESSION["email"])) {
            ?>
                <div class="icons">
                    <i class="fas fa-bars" id="menu-bars"></i>
                
                    <a href="login.html"><i class="fa-solid fa-user"></i></a>
                    <span class="open-cart">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <span class="quantity">0</span>
                    </span>
                </div>
            <?php
        } else {
            ?>
                <div class="icons">
                    <i class="fas fa-bars" id="menu-bars"></i>
                    <i class="fa-solid fa-user" id="user-btn"></i></a>
                    <span class="open-cart">
                        <a href="#" class="fas fa-shopping-cart"></a>
                        <span class="quantity">0</span>
                    </span>
                </div>

                <div class="user-box" id="user-box">
                    <!-- <!- Display the email from the session if it's set -->
                    <p>Email: <span><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?></span></p>
                    <p>name: <span><?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></span></p>
                
                    <form method="post" action="logout.php">
                        <!-- Add a hidden input field to identify the logout action -->
                        <input type="hidden" name="logout" value="1">
                        <button type="submit" class="logout-btn">Log Out</button>
                    </form>
                </div>
            <?php
        }
    ?>
</header>