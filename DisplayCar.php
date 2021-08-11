<?php
session_start();
include "connection.php";
$check=$_POST['result'];
$sk=$_POST['query'];
$limitperpage=6;
$page="";
if(isset($_POST['page'])){
    $page=$_POST['page'];
}else{
    $page=1;
}
$offset=($page-1)* $limitperpage;
$query="";
if($check=="manufacturer"){
$query="SELECT * FROM car WHERE manufacturer='$sk' LIMIT {$offset},{$limitperpage}";
}else if($check=="price"){
    $query="SELECT * FROM car WHERE price<='$sk' LIMIT {$offset},{$limitperpage}";
}else if($check=="city"){
    $query="SELECT * FROM car WHERE city='$sk' LIMIT {$offset},{$limitperpage}";
}else{
    $query="SELECT * FROM car WHERE body_type='$sk' LIMIT {$offset},{$limitperpage}";
}
$result=mysqli_query($conn,$query);
$output="";
if(mysqli_num_rows($result)>0){
    $output .="<div class='container'><div class='row'>";
    while($rows=mysqli_fetch_assoc($result)){
        $image=$rows['car_image'];
        $loc="CarImages/".$image;
        $output.='<div class="col-sm-4 check">
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
    $totalresult="";
    if($check=="manufacturer"){
        $totalresult="SELECT * FROM car WHERE manufacturer='$sk' ";
        }else if($check=="price"){
            $totalresult="SELECT * FROM car WHERE price<='$sk' ";
        }else if($check=="city"){
            $totalresult="SELECT * FROM car WHERE city='$sk' ";
        }else{
            $totalresult="SELECT * FROM car WHERE body_type='$sk'";
        }
    $result2=mysqli_query($conn,$totalresult);
    $total=mysqli_num_rows($result2);
    $totalpage=ceil($total/$limitperpage);
    $output .='<nav aria-label="Page navigation example">
<ul class="pagination">';
for($i=1;$i<=$totalpage;$i++){
    if($i==$page){
        $output .="<li class='page-item active'><a class='page-link ' id='{$i}' href=''>{$i}</a></li>";
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