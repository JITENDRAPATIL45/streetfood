<?php
include("includes/header.php");
include("includes/db.php");

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

<title>Food Menu</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
background:#f4f4f4;
font-family:Arial;
}

.title{
text-align:center;
margin:40px;
font-weight:bold;
}

/* FOOD CARD */

.food-card{
border:none;
border-radius:15px;
overflow:hidden;
background:white;
box-shadow:0 10px 25px rgba(0,0,0,0.15);
transition:0.3s;
}

.food-card:hover{
transform:translateY(-8px);
}

.food-img{
height:200px;
object-fit:cover;
}

.price{
font-size:20px;
font-weight:bold;
color:#ff3b3b;
}

.btn-cart{
background:#ff3b3b;
color:white;
border:none;
width:100%;
border-radius:30px;
padding:8px;
}

.btn-cart:hover{
background:#e60000;
}

.rating{
background:#28a745;
color:white;
padding:3px 8px;
border-radius:8px;
font-size:12px;
}

.badge-popular{
position:absolute;
top:10px;
left:10px;
background:orange;
color:white;
padding:5px 10px;
border-radius:20px;
font-size:12px;
}

.card-body{
text-align:center;
}

</style>

</head>

<body>

<!-- BUTTONS -->

<div class="container mt-3 text-end">

<a href="orders.php" class="btn btn-primary me-2">
<i class="fa fa-list"></i> My Orders
</a>

<a href="cart.php" class="btn btn-warning">
<i class="fa fa-shopping-cart"></i> Cart
</a>

</div>

<h2 class="title">🍔 Our Delicious Menu</h2>

<div class="container">

<div class="row">

<?php

$result=mysqli_query($conn,"SELECT * FROM foods");

while($row=mysqli_fetch_array($result))
{

?>

<div class="col-lg-3 col-md-4 col-sm-6 mb-4">

<div class="card food-card">

<div class="position-relative">

<span class="badge-popular">Popular</span>

<img src="<?php echo $row['image']; ?>" class="card-img-top food-img">

</div>

<div class="card-body">

<h5><?php echo $row['name']; ?></h5>

<span class="rating">⭐ 4.5</span>

<p class="price mt-2">₹<?php echo $row['price']; ?></p>

<a href="menu.php?id=<?php echo $row['id']; ?>" class="btn btn-cart">

<i class="fa fa-shopping-cart"></i> Add to Cart

</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</body>

</html>