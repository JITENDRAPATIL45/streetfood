<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("location:login.php");
}
?>

<!DOCTYPE html>

<html>

<head>

<title>Admin Dashboard</title>

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
padding:25px;
color:white;

}

.sidebar h4{

margin-bottom:30px;
font-weight:bold;

}

.sidebar a{

display:block;
color:#cbd5e1;
text-decoration:none;
padding:10px;
border-radius:6px;
margin-bottom:10px;
transition:0.3s;

}

.sidebar a:hover{

background:#334155;
color:white;

}

/* DASHBOARD CARDS */

.dashboard-card{

border-radius:12px;
padding:30px;
color:white;
text-decoration:none;
display:block;
transition:0.3s;

}

.dashboard-card:hover{

transform:translateY(-5px);
box-shadow:0 8px 20px rgba(0,0,0,0.2);

}

.card-food{ background:#2563eb; }
.card-orders{ background:#16a34a; }
.card-users{ background:#dc2626; }

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<!-- SIDEBAR -->

<div class="col-md-2 sidebar">

<h4>🍔 Admin Panel</h4>

<a href="dashboard.php">
<i class="fa fa-chart-line"></i> Dashboard
</a>

<a href="add_food.php">
<i class="fa fa-plus"></i> Add Food
</a>

<a href="foods.php">
<i class="fa fa-hamburger"></i> Manage Foods
</a>

<a href="orders.php">
<i class="fa fa-box"></i> Orders
</a>

<a href="users.php">
<i class="fa fa-users"></i> Users
</a>

<a href="logout.php">
<i class="fa fa-sign-out"></i> Logout
</a>

</div>

<!-- CONTENT -->

<div class="col-md-10 p-4">

<h2 class="mb-4">Dashboard</h2>

<div class="row">

<div class="col-md-4">

<a href="foods.php" class="dashboard-card card-food">

<h4>Foods</h4>

<p>Manage food items</p>

</a>

</div>

<div class="col-md-4">

<a href="orders.php" class="dashboard-card card-orders">

<h4>Orders</h4>

<p>View customer orders</p>

</a>

</div>

<div class="col-md-4">

<a href="users.php" class="dashboard-card card-users">

<h4>Users</h4>

<p>Manage users</p>

</a>

</div>

</div>

</div>

</div>

</div>

</body>

</html>
