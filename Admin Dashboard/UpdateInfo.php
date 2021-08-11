<?php
session_start();
$adminemail=$_SESSION['adminemail'];
if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])){
    include '../connection.php';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $query="UPDATE admin set first_name='$firstname',last_name='$lastname',email='$email' WHERE email='$adminemail'";
    $result=mysqli_query($conn,$query);
    if($result){
        $_SESSION['adminemail']=$email;
     echo $_SESSION['adminemail'];

    }else{
        echo "0";
    }
}

?>