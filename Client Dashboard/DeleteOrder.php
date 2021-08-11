<?php

include "../connection.php";
$id=$_POST['id'];
$query="UPDATE car SET status='pending' WHERE car_id='$id'";
$result1=mysqli_query($conn,$query);
$query1="DELETE FROM carorder WHERE car_id='$id' AND status='ordered'";
$result2=mysqli_query($conn,$query1);
if($result2){
    echo "1";
}
else{
    echo "0";
}


?>