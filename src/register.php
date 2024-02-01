<?php   
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
require('conf.php');

$first_name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];
$c_password = $_POST['cpassword'];

if ($password == $c_password) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); //PASSWORD_DEFAULT

    $sql = "INSERT INTO `user` (`id`, `name`, `email`,`address`, `password`) VALUES (NULL, '$first_name', '$email','$address', '$hashedPassword')";
    
    $query = "SELECT * FROM `user` WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        ?>
        <script>
        alert('User already exist!!!!');
        window.location.href = './login.html';
        </script><?php
        exit;
    }

    if (mysqli_query($conn, $sql)) {
        ?>
        <script>
        alert('Registration successful!');
        window.open('login.html');
        </script><?php
    } else {
        ?>
        <script>
        alert('Error');
        window.open('registration.html');
        </script><?php
    }
} else {
    echo 'ERROR !!!! PASSWORDS ARE NOT THE SAME';
    exit;
}
?>
