<?php include('navbar.php') ?>

<?php

include 'config.php';



$email = $_SESSION['email'];

if (!isset($email)) {
    echo "<script>location.href = 'login.php'</script>";
}

$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);

$id = $data['id'];

?>



<div class="container">
    <div class="row">
    <?php

    include 'config.php';

    $alldata = mysqli_query($conn, "SELECT * FROM `fundraiser` WHERE user_id = $id");

    while ($row = mysqli_fetch_array($alldata)) {
        echo "<div class='col-lg-6'>
            <div class='card'>
                
            </div>
        </div>";
    }

        ?>
    </div>
</div>


<?php include('footer.php') ?>