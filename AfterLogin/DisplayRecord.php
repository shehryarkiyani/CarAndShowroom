<?php
session_start();
if(isset($_POST['model'])&&isset($_POST['price'])&&isset($_POST['city'])){
    $model=$_POST['model'];
    $city=$_POST['city'];
    $price=$_POST['price'];

    $engine=$_POST['engineType'];
    $body=$_POST['bodyColor'];
    $transmission=$_POST['transmissionType'];
    $assembly=$_POST['assemblyType'];
}

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
.Accounts{
       
       padding-top: 50px;
       justify-content: center;
      align-items: center;
      text-align: center;
       width: 70%;
       margin-left: 150px;
       margin-top: 30px;
   }.h1{
      color:white;
   }
   .Records{
  
          width:100%;
       
      }html {
    height: 100%;
}
     body{
        height: 100%;
   margin: 0;
    background-repeat: no-repeat;
        background: linear-gradient(to bottom, #3399ff 0%, #ff66ff 100%);
       background-attachment: fixed;
      }
     .check{
          margin-bottom:5px;
      }.h11{
          color:white;
      }.h2{
          height:300px;
         
        
      }.span1{
           margin-left:500px;
           display:none;
       }.span2{
           margin-left:500px;
           display:none;
       }
</style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark">
 <a class="navbar-brand" href="#"><img src="../images/logo.jpg" alt="logo" style="width: 50px;"><span style="margin-left: 10px;">S&K Showrooms</span></a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
 <ul class="navbar-nav ml-auto">
 <li class="nav-item">
 <a class="nav-link" href=""><?php echo $_SESSION['clientemail']?></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="../Client Dashboard/ClientDashboard.php"><?php echo "Dashboard"?></a>
 </li>
</ul>
 </div>
 </nav>
<span class="alert alert-success span1">Your Order has been placed go to dashboard to check</span>
<span class="alert alert-danger span2">This car has already ordered</span>
 
<div class="Accounts" >
                 <div class="h1" >Car Records</div>
                <div class="Records" id="Record1">
                
                <h1 class='h11' id="back"></h1>
            <div class="h2"></div>
             
                    
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

<script>
$(document).ready(function(){
    loadTable();
function loadTable(page){
    $.ajax({
        url:"DisplayCars.php",
        type:"POST",
        data:{
            page:page,
            model:<?php echo json_encode($model); ?>,
            city:<?php echo json_encode($city); ?>,
            price:<?php echo json_encode($price); ?>,
            engine:<?php echo json_encode($engine); ?>,
            body:<?php echo json_encode($body); ?>,
            transmission:<?php echo json_encode($transmission); ?>,
            assembly:<?php echo json_encode($assembly); ?>,
        },
        success:function(response){
            if(response=="0"){
                $("#back").html("Record Not found");
               
            }else{
                $("#Record1").html(response);
                $(".h2").css("display:none");
            }
          
        }
    })
}

$(document).on("click",".pagination li a",function(e){
    e.preventDefault();
    var pageId=$(this).attr("id");
    loadTable(pageId);
})
$(document).on("click",".order-button",function(){
    var id=$(this).data("id");
    document.documentElement.scrollTop = 0;
   $.ajax({
       url:"Register.php",
       type:"POST",
       data:{
           id:id
       },
       success:function(response){
           
           if(response=="1"){
            $(".span1").slideDown(1000);
   $(".span1").slideUp(5000);
           }else if(response=="2"){
            $(".span2").slideDown(1000);
   $(".span2").slideUp(5000);
           }
       }
   })
   
})


})

function advancedSearch() {
	if(document.getElementById("change1").style.display == "none") {
		document.getElementById("change1").style.display="block";
		document.getElementById("change2").style.display="block";
		document.getElementById("change3").style.display="block";
		document.getElementById("change4").style.display="block";
		document.getElementById("change5").style.display="block";
	}
	else {
		document.getElementById("change1").style.display="none";
		document.getElementById("change2").style.display="none";
		document.getElementById("change3").style.display="none";
		document.getElementById("change4").style.display="none";
		document.getElementById("change5").style.display="none";
	}
}
</script>

</body>
</html>