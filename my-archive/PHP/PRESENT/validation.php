<?php

session_start();

$con = mysqli_connect('localhost', 'root', '', 'phpcrud');

mysqli_select_db($con, 'phpcrud');
$email = $_POST['email'];
$password = md5($_POST['password']);
$select = "select * from users where email = '$email' && password = '$password'";

$result = mysqli_query($con, $select);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header('location:home.php');
} else {
    echo 'account doest exist';
}
