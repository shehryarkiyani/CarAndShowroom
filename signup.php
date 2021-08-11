<?php
if(isset($_SESSION['adminemail'])){
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
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
 .Field{
     width: 60%;
     text-align: center;
  }
    .names{
       position: absolute;
       margin-top: 35px;
       margin-left: -60px;
    }.email{
        position: absolute;
       margin-top: 35px;
       margin-left: -30px;
    }.number{
        position: absolute;
       margin-top: 35px;
       margin-left: -84px;
    }
    #City{
        height: 40px;
        width: 60%;
    }
    .pass{
        position: absolute;
       margin-top: 35px;
       margin-left: -55px;
    }.cpass{
        position: absolute;
       margin-top: 35px;
       margin-left: -110px;
    }body{
      background: rgb(0,0,0);
background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(21,35,65,1) 0%, rgba(39,154,143,1) 41%, rgba(42,71,134,1) 74%, rgba(62,104,197,1) 94%, rgba(81,134,254,1) 97%, rgba(0,212,255,1) 99%);
    }p{
      opacity: 0;
      color: red;
      font-weight: bold;
    }label{
      color:white;
    }
</style>
<script>

   const patterns={
    firstname:/^[a-zA-z]{3,20}$/i,
    lastname:/^[a-zA-z]{3,20}$/i,
    pass:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/,
    conpass:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/,
    email:/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/,
    phone:/^[0-9]{11}$/,
    cnic:/^[0-9]{13}$/
  }
  function validate(field){
   
    var id=$(field).attr("id");
    var next=$(field).next().attr("id");
    if(patterns[field.name].test(field.value)){
     
      document.getElementById(id).style.border="3px solid green";
      document.getElementById(next).style.opacity="0";
       $("#errcnic").css("opacity","0");
    } else{
      document.getElementById(id).style.border="3px solid red";
      document.getElementById(next).style.opacity="1";
       $("#errcnic").css("opacity","0");
    }
  }
  function validatePass(field){
    var id=$(field).attr("id");
    var id2=document.getElementById('Password').value;
    var value1=document.getElementById('confirmpass').value;
    var next=$(field).next().attr("id");
    if(value1==id2){
      document.getElementById(id).style.border="3px solid green";
      document.getElementById(next).style.opacity="0";
      return true;
    }else{
      document.getElementById(id).style.border="3px solid red";
      document.getElementById(next).style.opacity="1";
      return false;
    }
  }
</script>
</head>
<body>
   <div class="container">
   
    <form action="" class="form" id="form1">
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <i class="fa fa-user-circle-o names" aria-hidden="true"></i>
            <input type="text" onkeyup="validate(this)" pattern="^[a-zA-z]{3,12}$" class="form-control Field" id="FirstName" placeholder="Enter First Name" name="firstname" required>
            <p id="first">FirstName must be letters and contain 3 - 20 characters</p>
          </div>
       
          <div class="form-group">
            <label for="LastName">Last Name</label>
            <i class="fa fa-user-circle-o names" aria-hidden="true" ></i>
            <input type="text" class="form-control Field" id="LastName" placeholder="Enter Last Name" name="lastname" onkeyup="validate(this)" pattern="^[a-zA-z]{3,12}$" required>
            <p id="last">Lastname must be letters and contain 3 - 20 characters</p>
          </div>
          <div class="form-group">
            <label for="CNIC">CNIC</label>
            <i class="fa fa-user-circle-o email" aria-hidden="true"></i>
            <input type="text" class="form-control Field " id="CNIC" placeholder="Enter CNIC (without dashes)" name="cnic" onkeyup="validate(this)" pattern="^[0-9]{13}$" required>
            <p id="cni">CNIC must be a valid CNIC number (13 digits)</p>
            <p id="errcnic">This CNIC is Already Exist</p>
          </div>
          <div class="form-group">
            <label for="Email">Email</label>
            <i class="fa fa-envelope email" aria-hidden="true"></i>
            <input type="text"  class="form-control Field" id="Email" placeholder="Enter Email" name="email" onkeyup="validate(this)" required>
            <p id="mail">Email must be a valid address, e.g. me@mydomain.com</p>
          </div>
          <div class="form-group">
            <label for="Phone">Phone number</label>
            <i class="fa fa-phone-square number" aria-hidden="true"></i>
            <input type="tel" class="form-control Field " id="Phone" placeholder="Enter Phone number" name="phone" onkeyup="validate(this)" pattern="^[0-9]{11}$" required>
            <p id="num">Phone number must be a valid phone number (11 digits)</p>
          </div>
          <div class="form-group">
            <label for="Gender">Gender &nbsp;&nbsp;&nbsp;</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Gender" id="Male" value="male" checked>
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="Gender" id="Female" value="female">
              <label class="form-check-label" for="female">Female</label>
            </div>

        </div>
        <div class="form-group">
            <label for="City">Select City &nbsp;</label>
            <select name="city" id="City" class="form-control " >
              <option value="rawalpindi">Rawalpindi</option>
              <option value="lahore">Lahore</option>
              <option value="karachi">Karachi</option>
              <option value="peshawar">Peshawar</option>
              <option value="islamabad">Islamabad</option>
              <option value="Faisalabad">Faisalabad</option>
              <option value="Sialkot">Sialkot</option>
              <option value="Quetta">Quetta</option>
              <option value="Abottobad">Abottobad</option>
              <option value="Chakwal">Chakwal</option>
            </select>
        </div>
          <div class="form-group">
            <label for="Password">Password</label>
            <i class="fa fa-lock pass" aria-hidden="true"></i>
            <input type="password"  class="form-control Field" id="Password" placeholder="Enter Password" name="pass" onkeyup="validate(this)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            <p id="Opass">Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters</p>

          </div><div class="form-group">
            <label for="confirmpass">Confirm Password</label>
            <i class="fa fa-lock cpass" aria-hidden="true"></i>
            <input type="password"  class="form-control Field" id="confirmpass" placeholder=" Re Enter Password" name="conpass" onkeyup="validatePass(this)" required>
            <p id="Cpass">Password donot match</p>

          </div>
         
          
          <div class="form-group">
          <input type="submit" value="submit" class="btn btn-primary">
          <a href="mainwebpage.php" style="color:white">Go back to main page</a>
          </div>
         
          
          
      </form>
   
   </div>
    
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

$("#form1").on("submit",function(e){
  e.preventDefault();
  var formdata=$("#form1").serialize();
  $.ajax({
    url:"ValidateClient.php",
    type:"POST",
    data:formdata,
    success:function(response){
      
      if(response=="1"){
        window.location.href="login.php";
      }else if(response=="0"){
        alert("something wrong");
      }else if(response=="2"){
        alert("record not inserted");
      }else if(response=="3"){
          $("#errcnic").css("opacity","1");
      }
    }
  })
})


})


</script>

    
</body>
</html>
<?php
}
?>