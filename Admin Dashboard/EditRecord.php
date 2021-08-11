<?php
session_start();
if(isset($_FILES['file']['name']) &&isset($_POST['carname'])&&isset($_POST['city'])&&isset($_POST['price'])&&isset($_POST['manufacturer'])&&isset($_POST['assembly'])&&isset($_POST['color'])&&isset($_POST['engine'])&&isset($_POST['body'])){
    include '../connection.php';
    $previd=$_SESSION['carid'];
    $getdata="SELECT car_image FROM car WHERE car_id='$previd'";
    $getresult=mysqli_query($conn,$getdata);
    $getrow=mysqli_fetch_assoc($getresult);
    $previmage=$getrow['car_image'];
    $prevpath="../CarImages/".$previmage;
    if(unlink($prevpath)){

    }

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
 if(($extension=="jpg")||($extension=="png")||($extension=="jpeg")||($extension=="gif")||($extension=="JPG")||($extension=="PNG")){
     if($imagesize<=50000){

       
       $result1=move_uploaded_file($_FILES['file']['tmp_name'],$imageLocation);
        $insertquery="UPDATE car SET model='$name',city='$city',price='$price',manufacturer='$manufacturer',engine_type='$engine',color='$color',transmission_type='$transmission',assembly_type='$assembly',body_type='$body',car_image='$image' WHERE car_id='$previd'";
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