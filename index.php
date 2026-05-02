<?php
include("includes/header.php");
include("includes/db.php");
?>

<!DOCTYPE html>
<html>

<head>

<title>Street Food Delivery</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
margin:0;
padding:0;
font-family:Arial;
}

/* HERO SECTION */

.hero{

height:100vh;

/* WORKING ONLINE IMAGE */


background:url("assets/images/img1.png");

background-size:cover;
background-position:center;
background-repeat:no-repeat;

display:flex;
align-items:center;
justify-content:center;

text-align:center;
color:white;

position:relative;

}

.hero::before{

content:"";
position:absolute;

top:0;
left:0;

width:100%;
height:100%;

background:rgba(0,0,0,0.6);

}

.hero-content{

position:relative;
z-index:2;

}

.hero h1{

font-size:65px;
font-weight:bold;

}

.hero p{

font-size:24px;
margin-bottom:30px;

}

.btn-menu{

background:#ff3b3b;
border:none;

padding:12px 35px;

font-size:18px;

border-radius:30px;

}

.btn-menu:hover{

background:#e60000;

}

</style>

</head>

<body>

<div class="hero">

<div class="hero-content">

<h1>Street Food Delivery</h1>

<p>Order your favourite street food online</p>

<a href="menu.php" class="btn btn-menu">View Menu</a>

</div>

</div>

</body>

</html>