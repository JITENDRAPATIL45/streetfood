<?php

session_start();
include("includes/db.php");

if(isset($_POST['register']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$address=$_POST['address'];

/* CHECK EMAIL EXIST */

$check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

if(mysqli_num_rows($check)>0)
{

echo "<script>alert('Email already registered')</script>";

}
else
{

mysqli_query($conn,"INSERT INTO users(name,email,password,phone,address)
VALUES('$name','$email','$password','$phone','$address')");

echo "<script>
alert('Registration Successful');
window.location='login.php';
</script>";

}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>User Register</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{

background:linear-gradient(135deg,#ff3b3b,#ff7a18);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family:Arial;

}

.register-card{

width:420px;
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);

}

.title{

text-align:center;
margin-bottom:20px;
font-weight:bold;

}

.input-group{

margin-bottom:15px;

}

.input-group-text{

background:#ff3b3b;
color:white;
border:none;

}

.btn-register{

background:#ff3b3b;
color:white;
border:none;

}

.btn-register:hover{

background:#e60000;

}

.login-link{

text-align:center;
margin-top:10px;

}

</style>

</head>

<body>

<div class="register-card">

<h3 class="title">🍔 Create Account</h3>

<form method="post">

<div class="input-group">
<span class="input-group-text"><i class="fa fa-user"></i></span>
<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
</div>

<div class="input-group">
<span class="input-group-text"><i class="fa fa-envelope"></i></span>
<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
</div>

<div class="input-group">
<span class="input-group-text"><i class="fa fa-lock"></i></span>
<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
</div>

<div class="input-group">
<span class="input-group-text"><i class="fa fa-phone"></i></span>
<input type="text" name="phone" class="form-control" placeholder="Enter Phone">
</div>

<div class="input-group">
<span class="input-group-text"><i class="fa fa-location-dot"></i></span>
<textarea name="address" class="form-control" placeholder="Enter Address"></textarea>
</div>

<button name="register" class="btn btn-register w-100">
Register
</button>

<div class="login-link">

Already have account?

<a href="login.php">Login</a>

</div>

</form>

</div>

</body>

</html>