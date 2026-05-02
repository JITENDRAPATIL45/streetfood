<?php
session_start();
include("../includes/db.php");

if(!isset($_SESSION['admin']))
{
header("location:login.php");
}

/* DELETE USER */

if(isset($_GET['delete']))
{
$id=$_GET['delete'];
mysqli_query($conn,"DELETE FROM users WHERE id=$id");
header("location:users.php");
}

$result=mysqli_query($conn,"SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>

<html>

<head>

<title>Manage Users</title>

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

/* TABLE CARD */

.table-card{
background:white;
padding:25px;
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

<h2 class="mb-4">Manage Users</h2>

<div class="table-card">

<table class="table table-hover">

<thead>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Address</th>
<th>Action</th>
</tr>

</thead>

<tbody>

<?php
while($row=mysqli_fetch_array($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['phone']; ?></td>

<td><?php echo $row['address']; ?></td>

<td>

<a href="users.php?delete=<?php echo $row['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this user?')">

<i class="fa fa-trash"></i> Delete

</a>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

</div>

</body>

</html>
