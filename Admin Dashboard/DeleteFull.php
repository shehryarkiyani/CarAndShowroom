<?php

include "../connection.php";
$id=$_POST['id'];
$query="SELECT car_image FROM car WHERE car_id='$id'";
$result=mysqli_query($conn,$query);
$query1="DELETE FROM car WHERE car_id='$id'";
$result2=mysqli_query($conn,$query1);
if($result2){
    if(mysqli_num_rows($result)>0){
        while($rows=mysqli_fetch_assoc($result)){
            $image=$rows['car_image'];
            $loc="../CarImages/".$image;
            if(unlink($loc)){
                echo "1";
            }else{
                echo "0";
            }
        
        }
    }
    echo "1";
}
else{
    echo "0";
}


?>