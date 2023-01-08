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

<link rel="stylesheet" href="css/myfunraiser.css">


<div class="container">
    <div class="row fundraisercard">
    <?php

    include 'config.php';

    $alldata = mysqli_query($conn, "SELECT * FROM `fundraiser` WHERE user_id = $id");

    while ($row = mysqli_fetch_array($alldata)) {
        echo "<div class='col-lg-4'>
            <div class='card'>
                <div class='d-flex'>
                    <div>
                        <p>Goal: $row[amount_rise]$</p>
                        <p>$row[amount] raised</p>
                    </div>
                    <div>
                        <a href='' class='goto'>Go to fundraiser</a>
                        <a href='' class='editfund'>Edit fundraiser</a>
                    </div>
                </div>
            </div>
        </div>";
    }

        ?>
        <?php

        include 'config.php';

        $alldata = mysqli_query($conn, "SELECT * FROM `ngo` WHERE user_id = $id");

        while ($row = mysqli_fetch_array($alldata)) {
            echo "<div class='col-lg-4'>
                <div class='card'>
                    <div class='d-flex'>
                        <div>
                            <p>Goal: $row[amount_rise]$</p>
                            <p>$row[amount] raised</p>
                        </div>
                        <div>
                            <a href='' class='goto'>Go to fundraiser</a>
                            <a href='' class='editfund'>Edit fundraiser</a>
                        </div>
                    </div>
                </div>
            </div>";
        }

            ?>
            <?php

            include 'config.php';

            $alldata = mysqli_query($conn, "SELECT * FROM `other_cause` WHERE user_id = $id");

            while ($row = mysqli_fetch_array($alldata)) {
                echo "<div class='col-lg-4'>
                    <div class='card'>
                        <div class='d-flex'>
                            <div>
                                <p>Goal: $row[amount_rise]$</p>
                                <p>$row[amount] raised</p>
                            </div>
                            <div>
                                <a href='' class='goto'>Go to fundraiser</a>
                                <a href='' class='editfund'>Edit fundraiser</a>
                            </div>
                        </div>
                    </div>
                </div>";
            }

                ?>
                </div>
</div>


<?php include('footer.php') ?>