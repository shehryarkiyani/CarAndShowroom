<?php
session_start();
$clientemail=$_SESSION['clientemail'];
if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['phone'])&&isset($_POST['cnic'])){
    include '../connection.php';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $cnic=$_POST['cnic'];
    $query="UPDATE customer set CNIC='$cnic', first_name='$firstname',last_name='$lastname',email='$email',phone='$phone' WHERE email='$clientemail'";
    $result=mysqli_query($conn,$query);
    if($result){
        $_SESSION['clientemail']=$email;
     echo $_SESSION['clientemail'];

    }else{
        echo "0";
    }
}

?>