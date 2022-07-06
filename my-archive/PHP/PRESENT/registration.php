<?php

session_start();
header('location:login.php');

$con = mysqli_connect("localhost", "root", "", "phpcrud");

if (!$con) {
    die('Connection Failed' . mysqli_connect_error());
}
mysqli_select_db($con, 'phpcrud');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);


$s = "select * from students where firstname = '$firstname',lastname = '$lastname',email = '$email',phone = '$phone',password = '$password'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = "insert into students(firstname,lastname,email,phone, password) values ('$firstname','$lastname','$email','$phone','$password')";
    mysqli_query($con, $reg);
    echo "Registration Successfull";
}
