<?php
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">

<div class="container">

<a class="navbar-brand" href="index.php">Street Food</a>

<div>

<a href="index.php" class="btn btn-light me-2">Home</a>

<a href="menu.php" class="btn btn-light me-2">Menu</a>

<?php

if(isset($_SESSION['user']))
{

?>
<a href="admin/login.php" class="btn btn-dark me-2">
Admin
</a>

<a href="cart.php" class="btn btn-warning me-2">Cart</a>

<a href="logout.php" class="btn btn-dark">Logout</a>

<?php
}
else
{
?>

<a href="login.php" class="btn btn-light me-2">Login</a>

<a href="register.php" class="btn btn-dark">Register</a>

<?php
}
?>

</div>

</div>

</nav>