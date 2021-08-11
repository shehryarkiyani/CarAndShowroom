<?php
include 'connection.php';
if(isset($_POST['email'])&& isset($_POST['pass'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $emailerr="";
    $passerr="";
    $err="0";
    $query="SELECT email,password FROM admin";
    $result=mysqli_query($conn,$query);
    while($rows=mysqli_fetch_assoc($result)){
        if($email== $rows['email']){
            if($pass==$rows['password']){
                session_start();
                $_SESSION["adminemail"]=$email;
               $err="1";
            }else{
                $passerr="Password donot match";
            }
        }else{
            $emailerr="Inncorrect Email";
        }
    }
    $array=array("emailerr"=>$emailerr,"passerr"=>$passerr,"err"=>$err);
    echo json_encode($array);
}
?>