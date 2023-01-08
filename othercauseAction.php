<?php
include 'config.php';

session_start();

$email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];


$amount_price = $_POST['amount_price'];
$title = $_POST['title'];
$why_fund = $_POST['why_fund'];
$cause = $_POST['cause'];
$add_qualification = $_POST['add_qualification'];
$employed_status = $_POST['employed_status'];
$last_date = $_POST['last_date'];
$first_hear = $_POST['first_hear'];
$city = $_POST['city'];
$tell_stroy = $_POST['tell_strory'];
$image = $_FILES['image'];





$imageLocation = $image['tmp_name'];
$imageName = $image['name'];
$imageDes = 'FundImage/' . $imageName;
move_uploaded_file($imageLocation, $imageDes);

$insert_product = mysqli_query($conn, "INSERT INTO `other_cause`(`user_id`, `title`,  `why_fund`, `cause`, `last_date`,  `education_qualification`, `emplyed_status`, `first_hear`, `image`, `city`, `tell_story`) VALUES ('$user_id','$title','$why_fund','$cause','$last_date','$add_qualification','$employed_status','$first_hear','$imageDes','$city','$tell_stroy')");

if ($insert_product) {
    echo "<script>alert('Add Medical Fund Successfully Inserted')</script>";
    echo "<script>location.href = 'othercause.php'</script>";
} else {
    echo "<script>alert('Not Inserted!')</script>";
    echo "<script>location.href = 'othercause.php'</script>";
}
