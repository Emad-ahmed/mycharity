<?php include('navbar.php') ?>

<?php


$email = $_SESSION['email'];


if (!isset($email)) {
    echo "<script>location.href = 'login.php'</script>";
}


$datafetchquery = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
$data = mysqli_fetch_array($datafetchquery);

$id = $data['id'];



$datafetchqueryprofile = mysqli_query($conn, "SELECT * FROM `complete_profile` WHERE user_id = '$id'");
$dataprofile = mysqli_fetch_array($datafetchqueryprofile);



if ($dataprofile != '')
{
    $image = $dataprofile['image'];
    $dataid = $dataprofile['id'];
    $city = $dataprofile['city'];
    $age = $dataprofile['age'];
    $fb_id = $dataprofile['facebook_id'];
}




?>

<style>
    .myimg
    {
        width:6.5rem;
        height:6.5rem;
        border-radius:100%;
    }
</style>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/fundraiser.css">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Add</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="profileAction.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>
        <div class="mb-3">
            <label for="fb_id" class="form-label">Facebook Id</label>
            <input type="text" class="form-control" id="fb_id" name="fb_id">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        
        <button type="submit" class="btn btn-primary">Add Profile</button>
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="container mb-5 mt-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="d-flex">
            <?php
                if($dataprofile != '')
                {
                    echo "<img src='$image' alt='' class='myimg'>";

                } else{
                    echo "";
                }
            ?>
                
                <h4 class="ms-3 mt-3"><?php echo $data['name'] ?></h4>
            </div>
        </div>
        <div class="col-lg-3">
            
        </div>
        <div class="col-lg-6">
        <?php
        if($dataprofile == '')
        {
            echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#exampleModal'>
            Complete Profile
            </button>";

        } else{
            echo "<div class='card' style='width: 18rem;'>
            <div class='card-body'>
              <h3 class='card-title'>Profile</h3>
              <hr>
              <h6 class='card-subtitle mb-3'>City: $city</h6>
              <h6 class='card-subtitle mb-3'>Age: $age</h6>
              <h6 class='card-subtitle mb-3'>Facebook Id: $fb_id</h6>
              <hr>
              <div class='m-auto col-8'>
              <a href='deleteprofile.php? id=$id' class='btn btn-danger'>Deactivate Account</a>
              </div>
            </div>
          </div>";
        }
        
        ?>


        </div>
    </div>
</div>



<?php include('footer.php') ?>