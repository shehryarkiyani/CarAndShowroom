<?php
$searchitem=$_POST['search'];
if(!empty($searchitem)){
    include "../connection.php";
$query="SELECT * FROM car WHERE model LIKE '%{$searchitem}%'";
$result=mysqli_query($conn,$query);
$output="";
    if(mysqli_num_rows($result)>0){
        $output .="<div class='container'><div class='row'>";
        while($rows=mysqli_fetch_assoc($result)){
            $image=$rows['car_image'];
            $loc="../CarImages/".$image;
            $output.='<div class="col-sm-6 check">
            <div class="card text-primary">';
            $output.="<img class='card-img-top' width='200px' height='200px' src='".$loc."' alt='Card image cap'>";
            $output.=" <h5 class='card-title'>Car Name: {$rows["model"]}</h5>";
            $output.=" <h5 class='card-title'>Car Price: {$rows["price"]} lac</h5>";
            $output.=" <h5 class='card-title'>Car Engine: {$rows["engine_type"]}</h5>";
            $output.=" <h5 class='card-title'>Company : {$rows["manufacturer"]}</h5>";
            $output.="<button class='btn btn-danger delete-button' data-id='{$rows["car_id"]}' >Delete</button>";
            $output.=" </div> </div>";
        }
        $output.='</div></div>';
        echo $output;
    }else{
        echo "0";
    }
}

else{
    echo "3";
}
?>