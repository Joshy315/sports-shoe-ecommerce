<?php
@include 'config.php';

if (isset($_SESSION['user_id'])) {
    // User is logged in, display the "Add Product" icon
    ?>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #6D68CB;">

        <a class="navbar-brand ml-5" href="index.php">
            <img src="logo.png" width="80" height="80" alt="shoes_ecommercedb">
        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

        <div class="user-cart">
            <a href="admin.php" style="text-decoration:none;">
                <i class="fa fa-user mr-3" style="font-size: 30px; color: #fff;" aria-hidden="true"></i>
            </a>
            <a href="admin.php" style="text-decoration:none;">
                <i class="fa fa-plus-circle mr-3" style="font-size: 30px; color: #fff;" aria-hidden="true"></i>
            </a>
        </div>
    </nav>
    <?php
} else {
    // User is not logged in, display regular user icon
    ?>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light px-5" style="background-color: #6D68CB;">

        <a class="navbar-brand ml-5" href="index.php">
            <img src="logo.png" width="80" height="80" alt="shoes_ecommercedb">
        </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>

        <div class="user-cart">
            <a href="login.php" style="text-decoration:none;">
                <i class="fa fa-sign-in mr-3" style="font-size: 30px; color: #fff;" aria-hidden="true"></i>
            </a>
        </div>
    </nav>
    <?php
}
?>