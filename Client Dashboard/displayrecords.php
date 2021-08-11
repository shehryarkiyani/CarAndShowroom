<?php
include "../connection.php";
session_start();
$email=$_SESSION['clientemail'];
$limitperpage=4;
$page="";
if(isset($_POST['page'])){
    $page=$_POST['page'];
}else{
    $page=1;
}
$getQuery="SELECT CNIC,first_name,last_name From customer where email='$email'";
$getResult=mysqli_query($conn,$getQuery);
$getRow=mysqli_fetch_assoc($getResult);
$cnic=$getRow['CNIC'];
$firstname=$getRow['first_name'];
$lastname=$getRow['last_name'];
$fullname=$firstname." ".$lastname;
$offset=($page-1)* $limitperpage;
$getOrder="SELECT car_id,order_id FROM carorder where CNIC='$cnic' LIMIT {$offset},{$limitperpage} ";
$OrderResult=mysqli_query($conn,$getOrder);
$output="";

if(mysqli_num_rows($OrderResult)>0){
    $output .="<div class='container'><div class='row'>";
    while($OrderRow=mysqli_fetch_assoc($OrderResult)){
        $carId=$OrderRow['car_id'];
        $query="SELECT * FROM car WHERE car_id='$carId'";
        $result=mysqli_query($conn,$query);
     
    
         
            while($rows=mysqli_fetch_assoc($result)){
                $image=$rows['car_image'];
                $loc="../CarImages/".$image;
                $output.='<div class="col-sm-6 check">
                <div class="card text-primary">';
                $output.="<img class='card-img-top' width='200px' height='200px' src='".$loc."' alt='Card image cap'>";
                $output.=" <h5 class='card-title'>Car Name: {$rows["model"]}</h5>";
                $output.=" <h5 class='card-title'>Car Price: {$rows["price"]} lac</h5>";
                $output.=" <h5 class='card-title'>Order By: {$fullname}</h5>";
                $output.="<button class='btn btn-primary cancel-button' data-id={$rows["car_id"]}>Cancel Order</button>";
                $output.=" </div> </div>";
            }
           
        
    }
    $output.='</div></div>';
    $totalresult="SELECT * FROM carorder where CNIC='$cnic'";
    $result2=mysqli_query($conn,$totalresult);
    $total=mysqli_num_rows($result2);
    $totalpage=ceil($total/$limitperpage);
    $output .='<nav aria-label="Page navigation example">
<ul class="pagination">';
for($i=1;$i<=$totalpage;$i++){
    if($i==$page){
        $output .="<li class='page-item'><a class='page-link active' id='{$i}' href=''>{$i}</a></li>";
    }else{
        $output .="<li class='page-item'><a class='page-link' id='{$i}' href=''>{$i}</a></li>";
    }
   
}
$output.='</ul>
</nav>';
echo $output;
    
}else{
    echo "0";
}








?>