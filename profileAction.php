<?php
include 'config.php';

session_start();

$email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];


$city = $_POST['city'];
$fb_id = $_POST['fb_id'];
$age = $_POST['age'];
$image = $_FILES['image'];





$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = 'ProfileImage/' . $imageName;
move_uploaded_file($imageLocation, $imageDes);

$insert_product = mysqli_query($conn, "INSERT INTO `complete_profile`(`user_id`, `city`, `facebook_id`, `age`, `image`) VALUES ('$user_id','$city','$fb_id','$age','$imageDes')");

if ($insert_product) {
    echo "<script>alert('Profile Successfully Inserted')</script>";
    echo "<script>location.href = 'profile.php'</script>";
} else {
    echo "<script>alert('Profile Not Inserted!')</script>";
    echo "<script>location.href = 'profile.php'</script>";
}
