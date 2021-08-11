<?php
include "../connection.php";
$limitperpage=6;
$page="";
if(isset($_POST['page'])){
    $page=$_POST['page'];
}else{
    $page=1;
}
 
$offset=($page-1)* $limitperpage;
$query="SELECT * FROM carorder ORDER BY order_id DESC LIMIT {$offset},{$limitperpage}";
$result=mysqli_query($conn,$query);
$output="";
if(mysqli_num_rows($result)>0){
    $output .="<table class='table table-striped'>  <thead>
    <tr>
      <th scope='col'>Order Id</th>
      <th scope='col'>Car Name</th>
      <th scope='col'>Person Name</th>
      <th scope='col'>Order Date</th>
    </tr>
  </thead>
  <tbody>";
    while($rows=mysqli_fetch_assoc($result)){
        $cnic=$rows["CNIC"];
        $carId=$rows['car_id'];
       $carquery="SELECT model FROM car where car_id='$carId'";
       $carresult=mysqli_query($conn,$carquery);
       $carRow=mysqli_fetch_assoc($carresult);
       $carName=$carRow['model'];
      $customerquery="SELECT first_name,last_name FROM customer where CNIC='$cnic'";
      $customerResult=mysqli_query($conn,$customerquery);
      $customerRow=mysqli_fetch_assoc($customerResult);
      $fullName=$customerRow['first_name']." ".$customerRow['last_name'];
      $orderDate=$rows["order_date"];
      $orderId=$rows["order_id"];
      $output.="<tr>
      <th scope='row'>{$orderId}</th>
       <td>{$carName}</td>
      <td>{$fullName}</td>
     
      <td>{$orderDate}</td>
    </tr>";
    }
    $output.='</tbody>
</table>';
    $totalresult="SELECT * FROM carorder";
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