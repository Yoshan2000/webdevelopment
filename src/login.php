<?php
session_start();

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
require('conf.php');


$email=$_POST['email'];
$password=$_POST['password'];

$query_admin = "SELECT * FROM `admin` WHERE email = '$email'";
$result_admin = mysqli_query($conn, $query_admin);

if (mysqli_num_rows($result_admin) > 0) {
    $admin = mysqli_fetch_assoc($result_admin);

    if (password_verify($password, $admin['password'])) {
        $_SESSION["email"] = $admin["email"];

        ?>
        <script>
        alert('Admin Login successful!!!!');
        window.location.href = './admin.php';
        </script><?php
    } else {
        ?>
        <script>
        alert('Wrong Password!!!!');
        window.location.href = './login.html';
        </script><?php
    }
} else {
    $query_user = "SELECT * FROM `user` WHERE email = '$email'";
    $result_user = mysqli_query($conn, $query_user);

    if (mysqli_num_rows($result_user) > 0) {
        $user = mysqli_fetch_assoc($result_user);

        if (password_verify($password, $user['password'])) {
            $_SESSION["email"] = $user["email"];
            $_SESSION["name"] = $user["name"];
            ?>
            <script>
            alert('User Login successful!!!!');
            window.location.href = './user.php';
            </script><?php
        } else {
            ?>
            <script>
            alert('Error while login!!!!');
            window.location.href = './registration.html';
            </script><?php
        }
    }else {
        ?>
        <script>
        alert('User Not Found!!!!');
        window.location.href = './login.html';
        </script><?php
    }
    
}


?>
