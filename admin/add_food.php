<?php
session_start();
include("../includes/db.php");

if(!isset($_SESSION['admin']))
{
header("location:login.php");
}

if(isset($_POST['add']))
{

$name=$_POST['name'];
$price=$_POST['price'];
$image=$_POST['image'];

mysqli_query($conn,"INSERT INTO foods(name,price,image)
VALUES('$name','$price','$image')");

echo "<script>alert('Food Added Successfully')</script>";

}
?>

<!DOCTYPE html>

<html>

<head>

<title>Add Food</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
background:#f4f6f9;
font-family:Arial;
}

/* SIDEBAR */

.sidebar{
height:100vh;
background:#1e293b;
color:white;
padding:25px;
}

.sidebar h4{
margin-bottom:30px;
}

.sidebar a{
display:block;
color:#cbd5e1;
text-decoration:none;
margin:12px 0;
padding:8px;
border-radius:6px;
}

.sidebar a:hover{
background:#334155;
color:white;
}

/* FORM CARD */

.form-card{
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 8px 20px rgba(0,0,0,0.1);
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- SIDEBAR -->

<div class="col-md-2 sidebar">

<h4>🍔 Admin Panel</h4>

<a href="dashboard.php"><i class="fa fa-chart-line"></i> Dashboard</a>

<a href="add_food.php"><i class="fa fa-plus"></i> Add Food</a>

<a href="foods.php"><i class="fa fa-hamburger"></i> Manage Foods</a>

<a href="orders.php"><i class="fa fa-box"></i> Orders</a>

<a href="users.php"><i class="fa fa-users"></i> Users</a>

<a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>

</div>

<!-- CONTENT -->

<div class="col-md-10 p-4">

<h2 class="mb-4">Add Food</h2>

<div class="row">

<div class="col-md-6">

<div class="form-card">

<form method="post">

<label>Food Name</label>

<input type="text" name="name" class="form-control mb-3" placeholder="Enter food name" required>

<label>Price</label>

<input type="number" name="price" class="form-control mb-3" placeholder="Enter price" required>

<label>Image URL</label>

<input type="text" name="image" class="form-control mb-3" placeholder="Paste image URL">

<button name="add" class="btn btn-success w-100">

<i class="fa fa-plus"></i> Add Food

</button>

</form>

</div>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
