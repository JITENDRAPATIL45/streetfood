<?php

session_start();
include("includes/db.php");

if(isset($_POST['login']))
{

$email=$_POST['email'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($result)>0)
{

$_SESSION['user']=$email;

header("location:menu.php");

}
else
{
$error="Invalid Email or Password";
}

}

?>

<!DOCTYPE html>
<html>

<head>

<title>User Login</title>

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

.login-card{

width:400px;
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

.btn-login{

background:#ff3b3b;
color:white;
border:none;

}

.btn-login:hover{

background:#e60000;

}

.register-link{

text-align:center;
margin-top:10px;

}

</style>

</head>

<body>

<div class="login-card">

<h3 class="title">🔐 User Login</h3>

<?php
if(isset($error))
{
echo "<div class='alert alert-danger'>$error</div>";
}
?>

<form method="post">

<div class="input-group">
<span class="input-group-text"><i class="fa fa-envelope"></i></span>
<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
</div>

<div class="input-group">
<span class="input-group-text"><i class="fa fa-lock"></i></span>
<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
</div>

<button name="login" class="btn btn-login w-100">
Login
</button>

<div class="register-link">

Don't have account? 
<a href="register.php">Register</a>

</div>

</form>

</div>

</body>

</html>