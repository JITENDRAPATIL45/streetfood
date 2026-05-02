<?php
session_start();
include("includes/db.php");

$result = mysqli_query($conn,"SELECT * FROM orders ORDER BY id DESC");
?>

<!DOCTYPE html>

<html>
<head>

<title>My Orders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f5f5;
}

.navbar{
background:#ff3b3b;
}

.navbar-brand{
color:white;
font-weight:bold;
}

.order-card{
background:white;
padding:20px;
border-radius:10px;
margin-bottom:15px;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

</style>

</head>

<body>

<nav class="navbar">
<div class="container">
<a class="navbar-brand" href="menu.php">Street Food</a>
</div>
</nav>

<div class="container mt-4">

<h3>My Orders</h3>

<?php
while($row=mysqli_fetch_array($result))
{
?>

<div class="order-card">

<p><b>Order ID:</b> <?php echo $row['id']; ?></p>

<p><b>Payment:</b> <?php echo $row['payment']; ?></p>

<p><b>Total:</b> ₹<?php echo $row['total']; ?></p>

<p><b>Status:</b> <?php echo $row['status']; ?></p>

<?php
if($row['status']=="Pending")
{
?>

<a href="cancel.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
Cancel Order
</a>

<?php
}
?>

</div>

<?php
}
?>
<button style="align-items: center;"><a href="menu.php" class="btn btn-danger">Back</a></button>
<br><br>
</div>

</body>
</html>
