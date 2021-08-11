<?php
session_start();
if(isset($_SESSION["adminemail"])){
  header("Location:Admin Dashboard/maindashboard.php");
}else if(isset($_SESSION["clientemail"])){
  header("Location:Client Dashboard/ClientDashboard.php");
}else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .Field{
            width: 80%;
            text-align: center;
        }.div{
            width: 80%;
            border: 1px solid gray;
            margin-top: 50px;
        }.form{
            margin-left: 30px;
            margin-top: 20px;
        }
        body{
          background: rgb(0,0,0);
background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(21,35,65,1) 0%, rgba(39,154,143,1) 41%, rgba(42,71,134,1) 74%, rgba(62,104,197,1) 94%, rgba(81,134,254,1) 97%, rgba(0,212,255,1) 99%);
 
        }span{
          color:red;
        }label{
      color:white;
    }a{
      color:white;
    }
        
        
    </style>
</head>
<body>
<div class="container">
        <div class="div ">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Admin Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Client Login</a>
                </li>
               
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="" class="form" id="form1" >
                        <div class="form-group">
                           
                            <label for="Email" class="labelemail">Email </label>
                            <i class="fa fa-envelope email" aria-hidden="true"></i>
                            <input type="text" class="form-control Field" id="AdminEmail" placeholder="Enter Email" name="adminemail">
                           <span class="emailERR"></span>
                      
                          </div>
                          <div class="form-group ">
                            <label for="Password" class="labelpass">Password</label>
                            <i class="fa fa-lock pass" aria-hidden="true"></i>
                            <input type="password" class="form-control Field" id="AdminPassword" placeholder="Enter Password" name="adminpass">
                          <span class="PassErr"></span>
                          </div>
                          <div class="form-group ">
                            <input type="submit" value="submit" class="btn btn-primary">
                            </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="" class="form" id="form2" >
                        <div class="form-group">
                           
                            <label for="Email" class="labelemail">Email </label>
                            <i class="fa fa-envelope email" aria-hidden="true"></i>
                            <input type="text" class="form-control Field" id="ClientEmail" placeholder="Enter Email">
                            <span class="ClientemailERR"></span>
                          </div>
                          <div class="form-group ">
                            <label for="Password" class="labelpass">Password</label>
                            <i class="fa fa-lock pass" aria-hidden="true"></i>
                            <input type="password" class="form-control Field" id="ClientPassword" placeholder="Enter Password">
                            <span class="ClientPassErr"></span>
                          </div>
                          <div class="form-group ">
                          <input type="submit" value="submit" class="btn btn-primary"> </div>
                    </form>
		<a href="signup.php" style="margin-left: 30px;">Don't have an account? Create one.</a>
                </div>
        
              </div>
        </div>
        
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$("#form1").on("submit",function(e){
 e.preventDefault();
var email=$("#AdminEmail").val();
var pass=$("#AdminPassword").val();
$.ajax({
  url:"ValidateAdmin.php",
  type:"POST",
  data:{
    email:email,
    pass:pass,
  },
  success:function(result){
    var response=$.parseJSON(result);
    if(response.err=="1"){
    
      window.location.href="Admin Dashboard/maindashboard.php";
    }else{
      $(".PassErr").html(response.passerr);
      $(".emailERR").html(response.emailerr);
    }
  }
})
});
$("#form2").on("submit",function(e){
 e.preventDefault();
var email=$("#ClientEmail").val();
var pass=$("#ClientPassword").val();
$.ajax({
  url:"Checkclient.php",
  type:"POST",
  data:{
    email:email,
    pass:pass,
  },
  success:function(result){
    var response=$.parseJSON(result);
    if(response.err=="1"){
      window.location.href="AfterLogin/clientafterlogin.php";
    }else{
      $(".ClientPassErr").html(response.passerr);
      $(".ClientemailERR").html(response.emailerr);
    }
  }
})
});



});

</script>
</body>
</html>
<?php
}
?>