<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/fundraiser.css">

<?php

$email = $_SESSION['email'];

if (!isset($email)) {
    echo "<script>location.href = 'login.php'</script>";
}

?>

<style>
    .medical
    {
        background: #0D6EFD !important;
        color:white !important; 
    }
    .medical:hover{
        background: white !important;
        color:black !important; 
        border: 1px solid #0D6EFD;
    }
</style>

<div class="mybtn">
        <a href="fundraiser.php" class="btn btn-outline-info">Medical Treatment</a>
        <a href="ngo.php" class="btn btn-outline-success">NGO/Charity</a>
        <a href="othercause.php" class="btn btn-outline-primary medical">Other Cause</a>
    </div>
<div class="container-fluid fundraiser">
   
    <h4>Other Cause</h4>
    <hr>
    <form action="othercauseAction.php" method="POST" enctype="multipart/form-data">
        

        <div class="mb-3">
            <label for="amount_price" class="form-label">How Much do you want to rise?</label>
            <input type="text" class="form-control" id="amount_price" name="amount_price" placeholder="৳">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Fundraiser Title?</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="why_fund" class="form-label">Whom Are you raising Fund For?</label>
            <select class="form-select" name="why_fund" aria-label="Default select example">
                <option value="Myself">Myself</option>
                <option value="Family Member">Family Member</option>
                <option value="Friend">Friend</option>
                <option value="Pet or Animal">Pet or Animal</option>
                <option value="Colleague">Colleague</option>
                <option value="Community">Community</option>
                <option value="Other">Other</option>
            </select>
        </div>

     

        <div class="mb-3">
            <label for="cause" class="form-label">Enter Your Cause</label>
            <input type="text" class="form-control" id="cause" name="cause">
        </div>
       

        
        <div class="mb-3">
            <label for="add_qualification" class="form-label">Your Education Qualification</label>
            <select class="form-select" name="add_qualification" aria-label="Default select example">
                <option value="10/12 th Pass">10/12 th Pass</option>
                <option value="Graduate">Graduate</option>
                <option value="Post Graduate">Post Graduate</option>
            </select>
        </div>
        

       

        <div class="mb-3">
            <label for="employed_status" class="form-label">Your Employed Status</label>
            <select class="form-select" aria-label="Default select example" name="employed_status">
                <option value="Salaried">Salaried</option>
                <option value="Self-Employed">Self-Employed</option>
                <option value="Student">Student</option>
                <option value="Home Maker">Home Maker</option>
                <option value="Unemployed">Unemployed</option>
                
            </select>
        </div>

        <div class="mb-3">
            <label for="last_date" class="form-label">Last Date?</label>
            <input type="date" class="form-control" id="last_date" name="last_date">
        </div>

        <div class="mb-3">
            <label for="first_hear" class="form-label">How did your first hear about charity?</label>
            <select class="form-select" aria-label="Default select example" name="first_hear">
                <option value="Hospital Staff Member">Recommended by Hospital Staff Member</option>
                <option value="Search Engine (Google, Yahoo, etc)">Search Engine (Google, Yahoo, etc)</option>
                <option value="Facebook, Instagram Ad / Post">Facebook, Instagram Ad / Post</option>
                <option value="Twitter Ad / Post">Twitter Ad / Post</option>
                <option value="YouTube Ad / Post">YouTube Ad / Post</option>
                <option value="Brochure / Banner in Hospital">Brochure / Banner in Hospital</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">City?</label>
            <input type="text" class="form-control" id="city" name="city">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image"
                 class="form-control" id="image">
        </div>
        

        <div class="mb-3">
            <label for="tell" class="form-label">Tell the story about why you are running a Fundraiser?</label>
            <textarea name="tell_strory" id="tell" cols="30" placeholder="tell us story?" rows="10" class="form-control"></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include('footer.php') ?>