<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$pass = md5($_POST['password']);



$_name_pattern = "/^[a-zA-Z. ]+$/";
$_mobile_pattern = "/^(\+88|88)?01[3-9]\d{8}$/";
$_emailPattern = "/^[a-zA-Z0-9_-]{3,}@[a-zA-Z0-9_-]{3,}\.[a-zA-Z]{2,4}$/";
$_password_pattern = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";

$_duplicate_email = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");


if (mysqli_num_rows($_duplicate_email) > 0) {
    echo "<script>alert('Email Already Taken')</script>";
    echo "<script>location.href = 'register.php'</script>";
}  elseif (!preg_match($_name_pattern, $name)) {
    echo "<script>alert('Invalid Username')</script>";
    echo "<script>location.href = 'register.php'</script>";
} elseif (!preg_match($_mobile_pattern, $phone)) {
    echo "<script>alert('Invalid Mobile Number')</script>";
    echo "<script>location.href = 'register.php'</script>";
} elseif (!preg_match($_emailPattern, $email)) {
    echo "<script>alert('Invalid Email')</script>";
    echo "<script>location.href = 'register.php'</script>";
} else {
    $insert_query = "INSERT INTO `user`(`name`, `email`, `password`, `mobile`) VALUES ('$name','$email','$pass','$phone')";
    mysqli_query($conn,  $insert_query);
    echo "<script>alert('Successfully Inserted')</script>";
    echo "<script>location.href = 'login.php'</script>";
}
