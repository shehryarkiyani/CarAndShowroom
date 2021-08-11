<?php
session_start();

$value=$_POST['value'];
$manufacturer=array('Suzuki','Honda','Toyota','Mercedes','Daihastu','Mazda','Hyundai','Mitsubishi','Bmw','Kia');
$city=array("rawalpindi","lahore","karachi","quetta","abbottabad","chakwal","peshawar","faisalabad","sialkot");
$body=array("sedan","pickup","offroad","minivan","crossover","suv","hatchback");
if(in_array($value,$manufacturer,TRUE)){
    $query=$value;
    $_SESSION["query"]=$query;
    $_SESSION['check']="manufacturer";
    echo "1";
}else{
    if(in_array($value,$city,TRUE)){
        $query=$value;
        $_SESSION["query"]=$query;
        $_SESSION["check"]="city";
        echo "1";
    }else{
        if(in_array($value,$body,TRUE)){
            $query=$value;
            $_SESSION["query"]=$query;
            $_SESSION["check"]="body_type";
            echo "1";
        }else{
            $query=$value;
            $_SESSION["query"]=$query;
            $_SESSION["check"]="price";
            echo "1";
        }

    }
}

?>