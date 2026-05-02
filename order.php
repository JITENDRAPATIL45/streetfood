<?php

session_start();
include("includes/db.php");

$total=0;
$ids="";

if(isset($_SESSION['cart']))
{
foreach($_SESSION['cart'] as $id)
{
$result=mysqli_query($conn,"SELECT * FROM foods WHERE id=$id");
$row=mysqli_fetch_array($result);

$total=$total+$row['price'];
$ids=$ids.$id.",";
}
}

if(isset($_POST['order']))
{

$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$payment=$_POST['payment'];

mysqli_query($conn,"INSERT INTO orders(food_ids,name,phone,address,payment,total)
VALUES('$ids','$name','$phone','$address','$payment','$total')");

unset($_SESSION['cart']);

echo "<script>
alert('Order Placed Successfully');
window.location='menu.php';
</script>";

}

?>

<!DOCTYPE html>
<html>

<head>

<title>Checkout</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

body{
background:#f5f5f5;
font-family:Arial;
}

/* NAVBAR */

.navbar{
background:#ff3b3b;
}

.navbar-brand{
color:white;
font-size:22px;
font-weight:bold;
}

/* CARD */

.checkout-card{
background:white;
padding:30px;
border-radius:12px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

/* BUTTON */

.btn-order{
background:#ff3b3b;
color:white;
border:none;
}

.btn-order:hover{
background:#e60000;
}

/* PAYMENT ICONS */

.payment-icons i{
font-size:26px;
margin-right:10px;
color:#666;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg">

<div class="container">

<a class="navbar-brand" href="menu.php">Street Food</a>

</div>

</nav>

<div class="container mt-5">

<h3 class="mb-4">💳 Checkout</h3>

<div class="row">

<!-- LEFT SIDE -->

<div class="col-md-8">

<div class="checkout-card">

<form method="post">

<div class="mb-3">

<label>Your Name</label>
<input type="text" name="name" class="form-control" required>

</div>

<div class="mb-3">

<label>Phone Number</label>
<input type="text" name="phone" class="form-control" required>

</div>

<div class="mb-3">

<label>Delivery Address</label>
<textarea name="address" class="form-control" required></textarea>

</div>

<div class="mb-3">

<label>Payment Method</label>

<select name="payment" class="form-control mb-3" onchange="showPayment(this.value)">

<option value="cod">Cash on Delivery</option>
<option value="card">Card</option>
<option value="upi">UPI</option>
<option value="qr">QR Code</option>

</select>

</div>

<!-- CARD PAYMENT -->

<div id="cardBox" style="display:none;">

<input type="text" class="form-control mb-2" placeholder="Card Number">

<input type="text" class="form-control mb-2" placeholder="Expiry Date">

<input type="text" class="form-control mb-2" placeholder="CVV">

</div>

<!-- UPI PAYMENT -->

<div id="upiBox" style="display:none;">

<input type="text" class="form-control mb-2" placeholder="Enter UPI ID">

</div>

<!-- QR PAYMENT -->

<div id="qrBox" style="display:none;" class="text-center">

<img src="assets/images/qr.jpg" width="200">

<p>Scan and Pay</p>

</div>

<div class="payment-icons mb-3">

<i class="fa-brands fa-cc-visa"></i>
<i class="fa-brands fa-cc-mastercard"></i>
<i class="fa-brands fa-google-pay"></i>
<i class="fa-brands fa-apple-pay"></i>

</div>

<button name="order" class="btn btn-order w-100">
Confirm Order
</button>

</form>

</div>

</div>

<!-- RIGHT SIDE -->

<div class="col-md-4">

<div class="checkout-card">

<h4>Order Summary</h4>

<hr>

<p>Total Price</p>

<h3>₹<?php echo $total; ?></h3>

<p class="text-muted">Delivery within 30-40 minutes</p>

</div>

</div>

</div>

</div>

<script>

function showPayment(type)
{

document.getElementById("cardBox").style.display="none";
document.getElementById("upiBox").style.display="none";
document.getElementById("qrBox").style.display="none";

if(type=="card")
{
document.getElementById("cardBox").style.display="block";
}

if(type=="upi")
{
document.getElementById("upiBox").style.display="block";
}

if(type=="qr")
{
document.getElementById("qrBox").style.display="block";
}

}

</script>

</body>

</html>