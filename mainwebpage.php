<?php
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
<style>

.jumbotron{
	background: #4e54c8;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #8f94fb, #4e54c8);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #8f94fb, #4e54c8); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a class="navbar-brand" href="#"><img src="images/logo.jpg" alt="logo" style="width: 50px;"><span style="margin-left: 10px;">S&K Showrooms</span></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="signup.php">Sign Up</a>
</li>
<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
</li>
</ul>
</div>
</nav>
<div class="jumbotron">
<div class="container">
<h2>Search Cars</h2>
<br>
<form action="cardetailsbeforelogin.php" method="POST" id="Form1">
<div class="form-group">
<label for="model">Car Model</label>
<input type="text" class="form-control" id="model" name="model" placeholder="Enter car model">
</div>
<div class="form-group">
<label for="city">City</label>
<select class="form-control" name="city" id="city">
<option value="rawalpindi">Rawalpindi</option>
<option value="lahore">Lahore</option>
<option value="karachi">Karachi</option>
<option value="peshawar">Peshawar</option>
<option value="faisalabad">Faisalabad</option>
<option value="sialkot">Sialkot</option>
<option value="quetta">Quetta</option>
<option value="abbottabad">Abbottabad</option>
<option value="chakwal">Chakwal</option>
</select>
</div>
<div class="form-group">
<label for="price">Price Range</label>
<select class="form-control" name="price" id="price">
<option value="allPrices">All Prices</option>
<option value="10">Less than 10 lacs</option>
<option value="15">Less than 15 lacs</option>
<option value="20">Less than 20 lacs</option>
<option value="25">Less than 25 lacs</option>
<option value="30">Less than 30 lacs</option>
<option value="35">Less than 35 lacs</option>
<option value="40">Less than 40 lacs</option>
<option value="45">Less than 45 lacs</option>
<option value="50">Less than 50 lacs</option>
</select>
</div>
<div class="form-group" id="change1" style="display:none">
<label for="engine type">Engine Type</label>
<select class="form-control" name="engineType" id="engineType">
<option value="cng">CNG</option>
<option value="all">ALL</option>
<option value="petrol">Petrol</option>
<option value="hybrid">Hybrid</option>
</select>
</div>
<div class="form-group" id="change3" style="display:none">
<label for="bodyColor">Body Color</label>
<input type="text" class="form-control" id="bodyColor" name="bodyColor" placeholder="Enter body color" value="white">
</div>
<div class="form-group" id="change4" style="display:none">
<label for="transmissionType">Transmission Type</label>
<select class="form-control" name="transmissionType" id="transmissionType">
<option value="manual">Manual</option>
<option value="automatic">Automatic</option>
<option value="all">All</option>
</select>
</div>
<div class="form-group" id="change5" style="display:none">
<label for="engineType">Assembly Type</label>
<select class="form-control" name="assemblyType" id="assemblyType">
<option value="local">Local</option>
<option value="all">All</option>
<option value="imported">Imported</option>
</select>
</div>
<input type="submit" class="btn btn-success" role="button">
<a class="btn btn-primary" role="button" onclick="advancedSearch()">Advanced Search</a>
</form>
</div>
</div>
<br>
<div class="container">
<h2>Browse Cars</h2><br>
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#manufacturer">Manufacturer</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#priceRange">Price Range</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#bodyType">Body Type</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#carCity">City</a>
</li>
</ul>
<div class="tab-content">
<div id="manufacturer" class="container tab-pane active"><br>
<div class="row">
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Suzuki Cars" data-value="Suzuki" class="a"><img src="images/suzuki.JPG" alt="suzuki"><p style="margin-left: 68px";>Suzuki</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Honda Cars" data-value="Honda" class="a"><img src="images/honda.JPG" alt="honda"><p style="margin-left: 67px";>Honda</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Toyota Cars" data-value="Toyota" class="a"><img src="images/toyota.JPG" alt="toyota"><p style="margin-left: 67px";>Toyota</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Mercedes Cars" data-value="Mercedes" class="a"><img src="images/mercedes.JPG" alt="mercedes"><p style="margin-left: 60px";>Mercedes</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Daihatsu Cars" data-value="Daihastu" class="a"><img src="images/daihatsu.JPG" alt="daihatsu"><p style="margin-left: 65px";>Daihatsu</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Mazda Cars" data-value="Mazda" class="a"><img src="images/mazda.JPG" alt="mazda"><p style="margin-left: 67px";>Mazda</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Hyundai Cars" data-value="Hyundai" class="a"><img src="images/hyundai.JPG" alt="hyundai"><p style="margin-left: 65px";>Hyundai</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Mitsubishi Cars" data-value="Mitsubishi" class="a"><img src="images/mitsubishi.JPG" alt="mitsubishi"><p style="margin-left: 56px";>Mitsubishi</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="BMW Cars" data-value="Bmw" class="a"><img src="images/bmw.JPG" alt="bmw"><p style="margin-left: 75px";>BMW</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="KIA Cars" data-value="Kia" class="a"><img src="images/kia.JPG" alt="kia"><p style="margin-left: 77px";>KIA</p></a>
</div>
</div>
</div>
<div id="priceRange" class="container tab-pane fade"><br>
<div class="row">
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 10 Lacs" class="a" data-value="10"><p style="margin-left: 30px">Cars under 10 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 15 Lacs" class="a" data-value="15"><p style="margin-left: 30px">Cars under 15 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 20 Lacs" class="a" data-value="20"><p style="margin-left: 30px">Cars under 20 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 25 Lacs" class="a" data-value="25"><p style="margin-left: 30px">Cars under 25 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 30 Lacs" class="a" data-value="30"><p style="margin-left: 30px">Cars under 30 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 35 Lacs" class="a" data-value="35"><p style="margin-left: 30px">Cars under 35 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 40 Lacs" class="a" data-value="40"><p style="margin-left: 30px">Cars under 40 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 45 Lacs" class="a" data-value="45"><p style="margin-left: 30px">Cars under 45 lacs</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars Under 50 Lacs" class="a" data-value="50"><p style="margin-left: 30px">Cars under 50 lacs</p></a>
</div>
</div>
</div>
<div id="bodyType" class="container tab-pane fade"><br>
<div class="row">
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="Sedan" data-value="sedan" class="a"><img src="images/car type/sedan.JPG" alt="sedan"><p style="margin-left: 67px";>Sedan</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="Hatchback" data-value="hatchback" class="a"><img src="images/car type/hatchback.JPG" alt="hatchback"><p style="margin-left: 59px";>Hatchback</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="SUV" data-value="suv" class="a"><img src="images/car type/suv.JPG" alt="suv"><p style="margin-left: 74px";>SUV</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="Crossover" data-value="crossover" class="a"><img src="images/car type/crossover.JPG" alt="crossover"><p style="margin-left: 56px";>Crossover</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="Mini Van"data-value="minivan" class="a"><img src="images/car type/mini van.JPG" alt="mini van"><p style="margin-left: 63px";>Mini Van</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="Off Road"data-value="offroad" class="a"><img src="images/car type/off road.JPG" alt="off road"><p style="margin-left: 60px";>Off Road</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="car details before login.html" title="Pickup"data-value="pickup" class="a"><img src="images/car type/pickup.JPG" alt="pickup"><p style="margin-left: 66px";>Pickup</p></a>
</div>
</div>
</div>
<div id="carCity" class="container tab-pane fade"><br>
<div class="row">
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Rawalpindi" class="a" data-value="rawalpindi"><p style="margin-left: 30px">Rawalpindi</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Lahore" class="a" data-value="lahore"><p style="margin-left: 30px">Lahore</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Karachi" class="a" data-value="karachi"><p style="margin-left: 30px">Karachi</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Peshawar" class="a" data-value="peshawar"><p style="margin-left: 30px">Peshawar</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Faisalabad" class="a" data-value="faisalabad"><p style="margin-left: 30px">Faisalabad</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Sialkot" class="a" data-value="sialkot"><p style="margin-left: 30px">Sialkot</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Quetta" class="a" data-value="quetta"><p style="margin-left: 30px">Quetta</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Abbottabad" class="a" data-value="abbottabad"><p style="margin-left: 30px">Abbottabad</p></a>
</div>
<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
<a href="" title="Cars in Chakwal" class="a" data-value="chakwal"><p style="margin-left: 30px">Chakwal</p></a>
</div>
</div>
</div>
</div>
</div>
<br><br>
<div class="container">
<h2>Featured Cars</h2><br>
<ul class="nav nav-tabs">
<li class="nav-item">
<a class="nav-link active" data-toggle="tab" href="#popular">Popular</a>
</li>
<li class="nav-item">
<a class="nav-link" data-toggle="tab" href="#imported">Imported</a>
</li>
</ul>
<div class="tab-content">
<div id="popular" class="container tab-pane active"><br>
<div class="row">
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="card">
<img class="card-img-top" src="images/cars/civic.JPG" alt="civic">
<div class="card-body">
<h4 class="card-title">Honda Civic</h4>
<p class="card-text">PKR 45 lacs</p>
</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="card">
<img class="card-img-top" src="images/cars/ek wagon.JPG" alt="ek wagon">
<div class="card-body">
<h4 class="card-title">Mitsubishi Ek Wagon</h4>
<p class="card-text">PKR 30 lacs</p>

</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="card">
<img class="card-img-top" src="images/cars/wagon r.JPG" alt="wagon r">
<div class="card-body">
<h4 class="card-title">Suzuki Wagon R</h4>
<p class="card-text">PKR 12 lacs</p>

</div>
</div>
</div>
</div>
</div>
<div id="imported" class="container tab-pane fade"><br>
<div class="row">
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="card">
<img class="card-img-top" src="images/cars/gla class.JPG" alt="gla class">
<div class="card-body">
<h4 class="card-title">Mercedes GLA Class</h4>
<p class="card-text">PKR 115 lacs</p>

</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="card">
<img class="card-img-top" src="images/cars/x1.JPG" alt="x1">
<div class="card-body">
<h4 class="card-title">BMW X1</h4>
<p class="card-text">PKR 117 lacs</p>

</div>
</div>
</div>
<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
<div class="card">
<img class="card-img-top" src="images/cars/noah.JPG" alt="noah">
<div class="card-body">
<h4 class="card-title">Toyota Noah</h4>
<p class="card-text">PKR 71 lacs</p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<br><br>
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
<script>
$('.a').on("click",function(e){
e.preventDefault();
var value=$(this).data("value");
$.ajax({
	url:'getQuery.php',
	type:"POST",
	data:{
		value:value
	},
	success:function(response){
if(response=="1"){
	window.location.href="Display.php";
}
	}
})
})

function advancedSearch() {
	if(document.getElementById("change1").style.display == "none") {
		document.getElementById("change1").style.display="block";
	
		document.getElementById("change3").style.display="block";
		document.getElementById("change4").style.display="block";
		document.getElementById("change5").style.display="block";
	}
	else {
		document.getElementById("change1").style.display="none";
	
		document.getElementById("change3").style.display="none";
		document.getElementById("change4").style.display="none";
		document.getElementById("change5").style.display="none";
	}
}
</script>

</body>
</html>