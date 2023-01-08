<?php
include 'config.php';

session_start();

$email = $_SESSION['email'];
$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);
$user_id = $data['id'];



$patient = $_POST['patient'];
$add_qualification = $_POST['add_qualification'];
$employed_status = $_POST['employed_status'];
$last_date = $_POST['last_date'];
$first_hear = $_POST['first_hear'];
$amount_price = $_POST['amount_price'];
$tell_stroy = $_POST['tell_strory'];
$patient_image = $_FILES['patient_image'];



$patient_pdf_file = $_FILES['patient_pdf_file']['name'];
$patient_tmp_file = $_FILES['patient_pdf_file']['tmp_name'];
move_uploaded_file($patient_tmp_file,"./pdf_id/".$patient_pdf_file);



$medical_pdf_file = $_FILES['medical_pdf_file']['name'];
$medical_tmp_file = $_FILES['medical_pdf_file']['tmp_name'];
move_uploaded_file($medical_tmp_file,"./pdf_medical/".$medical_pdf_file);


$imageLocation = $patient_image['tmp_name'];
$imageName = $patient_image['name'];
$imageDes = 'FundImage/' . $imageName;
move_uploaded_file($imageLocation, $imageDes);

$insert_product = mysqli_query($conn, "INSERT INTO `fundraiser`(`user_id`, `patient`, `patient_id_card`, `add_medical_document`, `amount_rise`, `last_date`, `education_qualification`, `employment_status`, `first_hear`, `image`, `tell_story`) VALUES ('$user_id','$patient','$patient_pdf_file','$medical_pdf_file','$amount_price','$last_date','$add_qualification','$employed_status','$first_hear','$imageDes','$tell_stroy')");

if ($insert_product) {
    echo "<script>alert('Add Medical Fund Successfully Inserted')</script>";
    echo "<script>location.href = 'fundraiser.php'</script>";
} else {
    echo "<script>alert('Not Inserted!')</script>";
    echo "<script>location.href = 'fundraiser.php'</script>";
}
