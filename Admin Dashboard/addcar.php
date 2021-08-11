<?php
session_start();
$email=$_SESSION['adminemail'];
if(isset($_FILES['file']['name']) && isset($_POST['carname'])&&isset($_POST['city'])&&isset($_POST['price'])&&isset($_POST['manufacturer'])&&isset($_POST['assembly'])&&isset($_POST['color'])&&isset($_POST['engine'])&&isset($_POST['body'])){
    include '../connection.php';
    $adminquery="SELECT admin_id FROM admin WHERE email='$email'";
    $result=mysqli_query($conn,$adminquery);
    $row=mysqli_fetch_assoc($result);
    $adminid=$row['admin_id'];
  
    $image=$_FILES['file']['name'];
    $name=$_POST['carname'];
$city=$_POST['city'];
$price=$_POST['price'];
$manufacturer=$_POST['manufacturer'];
$assembly=$_POST['assembly'];
$color=$_POST['color'];
$engine=$_POST['engine'];
$body=$_POST['body'];
$transmission=$_POST['transmission'];
$imageLocation="../CarImages/".$image;
$extension=pathinfo($imageLocation,PATHINFO_EXTENSION);
$imagesize=$_FILES['file']['size'];
$status="pending";
if(($extension=="jpg")||($extension=="png")||($extension=="jpeg")||($extension=="gif")||($extension=="JPG")||($extension=="PNG")){
    if($imagesize<=50000){
        $result1=move_uploaded_file($_FILES['file']['tmp_name'],$imageLocation);
        $insertquery="INSERT into car (model,city,price,manufacturer,engine_type,color,transmission_type,assembly_type,body_type,admin_id,car_image,status)VALUES('$name','$city','$price','$manufacturer','$engine','$color','$transmission','$assembly','$body','$adminid','$image','$status')";
        $result2=mysqli_query($conn,$insertquery);
        if($result2){
            echo "1";
        }
  
    }else{
        echo "File size must be less than or equal to 5MB";
    }
}else{
    echo "File extensions must be jpg,png,jpeg,gif";
}


}else{
    echo "0";
}
?>