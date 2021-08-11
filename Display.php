<?php
session_start();
$result=$_SESSION["query"];
$checktype=$_SESSION["check"];
if(isset($_SESSION["adminemail"])){
    header("Location:Admin Dashboard/maindashboard.php");
}else if(isset($_SESSION['clientemail'])){
    header("Location:Client Dashboard/ClientDashboard.php");
}else{


?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        width: 100%;
     
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
           height:350px;
          
         
       }
 </style>
 </head>
<body>
 <nav class="navbar navbar-expand-md navbar-dark">
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
   
 <script type="text/javascript">

$(document).ready(function(){
    loadTable();
function loadTable(page){
    $.ajax({
        url:"DisplayCar.php",
        type:"POST",
        data:{
            page:page,
            query:<?php echo json_encode($result); ?>,
            result:<?php echo json_encode($checktype); ?>
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
    alert("You are not login");
    window.location.href="login.php";
})


})


 </script>
 </body>
</html>
<?php

}?>