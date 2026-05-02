<?php
session_start();

if(isset($_POST['login']))
{

$user=$_POST['user'];
$pass=$_POST['pass'];

if($user=="admin" && $pass=="admin123")
{

$_SESSION['admin']="admin";

header("location:dashboard.php");

}
else
{
$error="Invalid Login";
}

}
?>

<!DOCTYPE html>

<html>

<head>

<title>Admin Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#ff3b3b;
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.login-box{
background:white;
padding:40px;
border-radius:10px;
width:350px;
}

</style>

</head>

<body>

<div class="login-box">

<h3 class="text-center">Admin Login</h3>

<?php
if(isset($error))
{
echo "<div class='alert alert-danger'>$error</div>";
}
?>

<form method="post">

<input type="text" name="user" class="form-control mb-3" placeholder="Username">

<input type="password" name="pass" class="form-control mb-3" placeholder="Password">

<button name="login" class="btn btn-danger w-100">Login</button>

</form>

</div>

</body>
</html>
