<?php
session_start();
if(isset($_SESSION['adminemail'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .sidebar{
           width: 17%;
           background-color: rgb(22, 22, 36);
           height: 1050px;
           position: absolute;
           margin-top: -30px;
           z-index:1;
           
       }nav{
           z-index: 1;
       }.main{
           color: white;
           font-size: 17px;
          
           margin-top: 50px;
          
       }a{
          color: white; 
          
       }.Accounts{
       
       padding-top: 50px;
       justify-content: center;
       align-items: center;
       text-align: center;
       width: 70%;
       margin-left: 250px;
       margin-top: 30px;
   }.Field{
        width: 50%;
           align-self: center;
           margin-bottom: 10px;
       }.button1{
           width: 30%;
           align-self: center;
       }
       
       .active{
           background-color: black;
       }@media (max-width: 480px){
           .sidebar{
               width: 40%;
           }.h1{
                padding-left: 0px;
               font-size: 20px;
           }.Accounts{
               margin-left: 10px;
           }.Field{
            width: 100%;
           }
       }@media(max-width:770px){
        .sidebar{
               width: 30%;
           }
        .Accounts{
               margin-left: 30px;
           }.Field{
            width: 100%;
           }
       }
        .h1{
           margin-bottom: 50px;
           
       }.check{
           margin-bottom:5px !important;
       }#recorderr{
color:red;
       }#Record1{
           width:100%;
       }
       

    </style>
    <script>
        var i=0;
        var open2=true;
        var open1=true;
        var up="fa-sort-asc";
       var down="fa-sort-desc";
        function closesidebar(){
           if(i==0){
            $('.sidebar').animate({left:'-300px'},1000);
            i=1;
           }else if(i==1){
            $('.sidebar').animate({left:'0px'},1000);
            i=0;
           }
          
          
       }
       function openAccountMenu(s){
           if(open1==true){
            $('.OrderList').slideToggle(1000);
            $('#arrow1').removeClass(up);
            $('#arrow1').addClass(down);
            open1=false;
           }
          
           if(open2==false){
            $('.AccountList').slideToggle(1000);
            $('#arrow2').addClass(up);
                $('#arrow2').removeClass(down);
            open2=true;
           }else{
            $('.AccountList').slideToggle(1000);
            $('#arrow2').removeClass(up);
            $('#arrow2').addClass(down);
            open2=false;
            
           }
           
       }function openOrdertMenu(){
           if(open2==true){
            $('.AccountList').slideToggle(1000);
            $('#arrow2').removeClass(up);
            $('#arrow2').addClass(down);
            open2=false;
           }
           if(open1==false){
            $('.OrderList').slideToggle(1000);
            $('#arrow1').removeClass(down);
            $('#arrow1').addClass(up);
            open1=true;
           }else{
            $('.OrderList').slideToggle(1000);
            $('#arrow1').removeClass(up);
            $('#arrow1').addClass(down);
            open1=false;
           }
       }
    </script>
</head>
<body>
    <nav class="navbar navbar-nav bg-dark navbar-dark">
       
            <div class="mr-auto d-inline-block float-left">
                <button class="" type="button" onclick="closesidebar()" style="background-color: rgb(73, 68, 68);"><span class="navbar-toggler-icon"></span></button>
                <a href="#" class="navbar-brand">S&K Showrooms</a>
                
            </div>
     
        
        <div class="ml-auto d-none d-sm-inline-block" style="margin-top: -40px;">
            <a href="#" class="navbar-brand"><?php echo $_SESSION['adminemail']  ?></a>
            <a href="../logout.php" role="button" class="navbar-brand">Logout</a>
        </div>
        
       

    </nav>
    <div class="combine">
        <div class="sidebar">
          <ul class="navbar-nav">
                    <li class="nav-item main ">
                         <a href="maindashboard.php" class="nav-link" role="button" ><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link account " role="button" id="accountmenu" onclick="openOrdertMenu(this.id)"><i class="fa fa-cog" aria-hidden="true"></i> Car Module <i class="fa fa-sort-desc" aria-hidden="true" id="arrow1"></i></a>
                        <ul class="navbar-nav OrderList">
                            <li class="nav-item">
                                <a href="AddcarRecord.php" class="nav-link" role="button"  > &nbsp; &nbsp;<i class="fa fa-plus" aria-hidden="true"></i> Add Car Record</a>
                            </li>
                            <li class="nav-item">
                                <a href="DeleteCarRecord.php" class="nav-link" role="button" > &nbsp;&nbsp;<i class="fa fa-trash-o" aria-hidden="true"></i> Delete Car Record</a>
                            </li>
                            <li class="nav-item">
                                <a href="UpdateCarRecord.php" class="nav-link" role="button" > &nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> Update Car Record</a>
                            </li>
                            <li class="nav-item active">
                                <a href="SearchCarRecord.php" role="button"  class="nav-link" >&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i> Search Car Record</a>
                            </li>
                            <li class="nav-item">
                                <a href="DisplayCarRecords.php" role="button"  class="nav-link">&nbsp;&nbsp;<i class="fa fa-television" aria-hidden="true"></i> Display Car Record</a>
                            </li>
                            <li class="nav-item">
                                <a href="TotalSoldCars.php" role="button"  class="nav-link">&nbsp;&nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i> Car Orders</a>
                            </li>
                        
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link account " role="button" id="accountmenu" onclick="openAccountMenu(this.id)"><i class="fa fa-cog" aria-hidden="true"></i> Account Setting <i class="fa fa-sort-desc" aria-hidden="true" id="arrow2"></i></a>
                        <ul class="navbar-nav AccountList">
                            <li class="nav-item ">
                                <a href="EditInformation.php" role="button" onclick="EditInformation()" class="nav-link"> &nbsp; &nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> Edit Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="ChangePassword.php" role="button" onclick="ChangePass()" class="nav-link"> &nbsp;&nbsp;<i class="fa fa-key" aria-hidden="true"></i> Change Password</a>
                            </li>
                            
                        </ul>
                    </li>
                   
                    <li class="nav-item">
                        <a href="../logout.php" class="nav-link "><i class="fa fa-sign-out"></i> Log Out</a>
                    </li>
                   
                
                
                </ul>





                    
            </div>
            <div class="Accounts" >
                <div class="h1" >Search Car Record</div>

                
                <form class="form">
                    <div class="form-group" >
                        <div class="d-flex flex-column">
                            
                            <label for="Model">Enter Car Name</label>
                      
                            <input type="text" class="form-control Field" placeholder="Enter Car Name" id="Search">
                           <h2 id="recorderr"></h2>
                        </div>
                        </div>
                     
                      
                      </form>
                      <div  id="Record1">
                          
                </div>
                </div>
        </div>
    
    





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){

    $("#Search").on("keyup",function(){
        var searchitem=$(this).val();
       
        
        $.ajax({
            url:"SearchRecord.php",
            type:"POST",
            data:{
                search:searchitem
            },
            success:function(response){
                if(response=="0"){
                $("#recorderr").html("Record not found");
                $("#Record1").html("");
            }else if(response=="3"){
                $("#recorderr").html("Input Field is empty");
                $("#Record1").html("");
            }
            
            
            else{
                $("#recorderr").html("");
                $("#Record1").html(response);
            }
            }
        })
       
    })





})


</script>
  
</body>
</html>
<?php
}else{
    header("Location:../login.php");
}