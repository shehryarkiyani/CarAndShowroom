<?php
session_start();
$email=$_SESSION['clientemail'];

if(isset($_POST['prev'])&&isset($_POST['pass'])){
    include '../connection.php';
    $Prev=$_POST['prev'];
    $New=$_POST['pass'];
    $query="SELECT password FROM customer where email='$email'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    if($row['password']==$Prev){
        $query1="UPDATE customer SET password='$New' where email='$email'";
        $result1=mysqli_query($conn,$query1);
        if($result1){
            echo "1";
        }else{
            echo "2";
        }
        
    }else{
        echo "0";
    }
}else{
    $image=$_FILES['file']['name'];
    echo $image;
}
?>