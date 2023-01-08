<?php include('navbar.php') ?>

<?php

include 'config.php';



$email = $_SESSION['email'];

if (!isset($email)) {
    echo "<script>location.href = 'login.php'</script>";
}

?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/fundraiser.css">

<style>
    .medical
    {
        background: #0DCAF0 !important;
        color:white !important; 
    }
    .medical:hover{
        background: white !important;
        color:black !important; 
        border: 1px solid #0DCAF0;
    }
</style>

<div class="mybtn">
        <a href="fundraiser.php" class="btn btn-outline-info medical">Medical Treatment</a>
        <a href="ngo.php" class="btn btn-outline-success">NGO/Charity</a>
        <a href="othercause.php" class="btn btn-outline-primary">Other Cause</a>
    </div>
<div class="container-fluid fundraiser">
   
    <h4>Medical Traetment</h4>
    <hr>
    <form action="fundraiserAction.php" method="POST" enctype="multipart/form-data">
       

        <div class="mb-3">
            <label for="amount_price" class="form-label">How Much do you want to rise?</label>
            <input type="text" class="form-control" id="amount_price" name="amount_price" placeholder="৳">
        </div>

        <div class="mb-3">
            <label for="patient" class="form-label">Who is Your Patient?</label>
            <input type="text" class="form-control" id="patient" name="patient">
        </div>

        <div class="mb-3">
            <label for="patient_id" class="form-label">Patient Id Card?</label>
            <input type="file" name="patient_pdf_file"
                 class="form-control" accept=".pdf"
                 id="patient_id"
                 title="Upload PDF"/>
        </div>

        <div class="mb-3">
            <label for="patient_medical" class="form-label">Add Medical Document</label>
            <input type="file" name="medical_pdf_file"
                 class="form-control" accept=".pdf" id="patient_medical"
                 title="Upload PDF"/>
        </div>

        <div class="mb-3">
            <label for="patient_image" class="form-label">Add Patient Image</label>
            <input type="file" name="patient_image"
                 class="form-control" id="patient_image">
        </div>
        

        <div class="mb-3">
            <label for="amount_rise" class="form-label">Your Education Qualification</label>
            <select class="form-select" name="add_qualification" aria-label="Default select example">
                <option value="10/12 th Pass">10/12 th Pass</option>
                <option value="Graduate">Graduate</option>
                <option value="Post Graduate">Post Graduate</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="amount_rise" class="form-label">Your Employed Status</label>
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
            <label for="amount_rise" class="form-label">How did your first hear about charity?</label>
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
            <label for="tell" class="form-label">Tell the story about why you are running a Fundraiser?</label>
            <textarea name="tell_strory" id="tell" cols="30" placeholder="tell us story?" rows="10" class="form-control"></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include('footer.php') ?>