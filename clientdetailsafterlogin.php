<?php
session_start();
if(isset($_SESSION['clientemail'])){


?>
<!DOCTYPE html>
<html>
<head>
<title>S&K Showrooms</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a class="navbar-brand" href="main after login.html"><img src="images/logo.jpg" alt="logo" style="width: 50px;"><span style="margin-left: 10px;">S&K Showrooms</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="Client Dashboard/ClientDashboard.php"><span class="fa fa-user" style="margin-right: 10px;"></span><span id="username"><?php echo $_SESSION['clientemail']?></span></a>
</li>
</ul>
</div>
</nav>
<div class="jumbotron">
<div class="container">
<h2>Available Cars</h2><br>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<img src="" alt="Car image comes here.">
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<h3>Car name comes here.</h3>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<p>Car specs come here.</p>
</div>
</div>
<div class="row">
<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<a href="order placed.html" class="btn btn-primary" role="button">Buy</a>
</div>
</div>
</div>
</div>
<div class="container-fluid p-5 bg-dark text-white">
<div class="row">
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
<p>Copyright &copy 2020 S&K Showrooms (Pvt) Ltd. - All Rights Reserved.</p>
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
<h5>Follow Us</h5>
<div class="list-group list-group-horizontal">
<a href="#" class="list-group-item" title="Follow Us On Facebook"><i class="fa fa-facebook"></i></a>
<a href="#" class="list-group-item" title="Follow Us On Twitter"><i class="fa fa-twitter"></i></a>
<a href="#" class="list-group-item" title="Follow Us On Instagram"><i class="fa fa-instagram"></i></a>
<a href="#" class="list-group-item" title="Follow Us On Google Plus"><i class="fa fa-google-plus"></i></a>
<a href="#" class="list-group-item" title="Follow Us On YouTube"><i class="fa fa-youtube"></i></a>
</div>
</div>
</div>
</div>
</body>
</html>
<?php

}else{
    header("Location:../login.php");
}
?>