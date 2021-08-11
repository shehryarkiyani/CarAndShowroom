<?php
session_start();
$email=$_SESSION['clientemail'];
include '../connection.php';
$id=$_POST['id'];
$query1="SELECT status FROM car where car_id='$id'";
$result=mysqli_query($conn,$query1);
date_default_timezone_set("Asia/Karachi");
$today = date("F j, Y, g:i a"); 
$query2="SELECT CNIC FROM customer where email='$email'";
$cusResult=mysqli_query($conn,$query2);
$cusRow=mysqli_fetch_assoc($cusResult);
$cnic=$cusRow["CNIC"];
$carstatus="ordered";
if($result){
    $row=mysqli_fetch_assoc($result);
    if($row['status']=="pending"){
        $updatecar="UPDATE car set status='order' WHERE car_id='$id'";
        $result2=mysqli_query($conn,$updatecar);
        $addOrder="INSERT into carorder(CNIC,car_id,order_date,status) VALUES('$cnic','$id','$today','$carstatus')";
        $result3=mysqli_query($conn,$addOrder);
        echo "1";
    }else{
        echo "2";
    }
}

?>