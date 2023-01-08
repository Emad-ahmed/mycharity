<?php include('navbar.php') ?>

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/fundraiser.css">
<link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />


<style>
    .bi-eye-slash
    {
        position: relative;
        top:-2rem;
        left:36rem;
    }
</style>

<div class="container-fluid fundraiser">
   
    <h4>Sign In</h4>
   
    <form action="registerAction.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" name="mobile" class="form-control" id="mobile">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
        <i class="bi bi-eye-slash" 
                    id="togglePassword"></i>
    </div>
    
    <button type="submit" class="btn btn-primary">Register</button>
    <a href="login.php" class="al mt-3">Already have an account?</a>
    </form>
</div>



<script>
        const togglePassword = document
            .querySelector('#togglePassword');
  
        const password = document.querySelector('#password');
  
        togglePassword.addEventListener('click', () => {
  
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
                  
            password.setAttribute('type', type);
  
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>

<?php include('footer.php') ?>