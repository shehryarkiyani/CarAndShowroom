<?php
include "connection.php";
$limitperpage=6;
$page="";
$model=$_POST['model'];
$city=$_POST['city'];
$price=$_POST['price'];

 $engine=$_POST['engine'];
$body=$_POST['body'];
$transmission=$_POST['transmission'];
$assembly=$_POST['assembly'];
if(isset($_POST['page'])){
    $page=$_POST['page'];
}else{
    $page=1;
}
$offset=($page-1)* $limitperpage;
$query="SELECT * FROM car WHERE model='$model' AND price<='$price' AND city='$city' AND engine_type='$engine' AND color='$body' AND transmission_type='$transmission' AND assembly_type='$assembly' LIMIT {$offset},{$limitperpage} ";
$result=mysqli_query($conn,$query);
$output="";
if(mysqli_num_rows($result)>0){
    $output .="<div class='container'><div class='row'>";
    while($rows=mysqli_fetch_assoc($result)){
        $image=$rows['car_image'];
        $loc="CarImages/".$image;
        $output.='<div class="col-sm-6 check">
        <div class="card text-primary">';
        $output.="<img class='card-img-top' width='200px' height='200px' src='".$loc."' alt='Card image cap'>";
        $output.=" <h5 class='card-title'>Car Name: {$rows["model"]}</h5>";
        $output.=" <h5 class='card-title'>Car Price: {$rows["price"]} lac</h5>";
        $output.=" <h5 class='card-title'>Car Engine: {$rows["engine_type"]}</h5>";
        $output.=" <h5 class='card-title'>Company : {$rows["manufacturer"]}</h5>";
        $output.="<button class='btn btn-primary order-button' data-id={$rows["car_id"]}>Order Car</button>";
        $output.=" </div> </div>";
    }
    $output.='</div></div>';
    $totalresult="SELECT * FROM car";
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