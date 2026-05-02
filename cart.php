<?php

session_start();
include("includes/db.php");

/* ADD TO CART */

if(isset($_GET['id']))
{

$id=$_GET['id'];

$_SESSION['cart'][]=$id;

header("location:cart.php");

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Your Cart</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f4f4;
font-family:Arial;
}

/* NAVBAR */

.navbar{
background:#ff3b3b;
}

.navbar-brand{
color:white;
font-size:24px;
font-weight:bold;
}

/* CART BOX */

.cart-box{

background:white;
padding:20px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);

}

/* FOOD IMAGE */

.food-img{

width:80px;
height:60px;
object-fit:cover;
border-radius:8px;

}

/* TOTAL BOX */

.total-box{

background:white;
padding:20px;
border-radius:10px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);

}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar">

<div class="container">

<a class="navbar-brand" href="menu.php">Street Food</a>

</div>

</nav>

<div class="container mt-5">

<h2 class="mb-4">🛒 Your Cart</h2>

<div class="row">

<!-- CART ITEMS -->

<div class="col-md-8">

<div class="cart-box">

<table class="table">

<tr>

<th>Food</th>
<th>Name</th>
<th>Price</th>

</tr>

<?php

$total=0;

if(isset($_SESSION['cart']))
{

foreach($_SESSION['cart'] as $id)
{

$result=mysqli_query($conn,"SELECT * FROM foods WHERE id=$id");

$row=mysqli_fetch_array($result);

?>

<tr>

<td>
<img src="<?php echo $row['image']; ?>" class="food-img">
</td>

<td>
<?php echo $row['name']; ?>
</td>

<td>
₹<?php echo $row['price']; ?>
</td>

</tr>

<?php

$total=$total+$row['price'];

}

}

?>

</table>

</div>

</div>


<!-- TOTAL BOX -->

<div class="col-md-4">

<div class="total-box">

<h4>Order Summary</h4>

<hr>

<p>Total Price</p>

<h3>₹<?php echo $total; ?></h3>

<a href="order.php" class="btn btn-danger w-100 mt-3">
Place Order
</a>

</div>

</div>

</div>
<button style="align-items: center;"><a href="menu.php" class="btn btn-danger">Back</a></button>
</div>

</body>

</html>