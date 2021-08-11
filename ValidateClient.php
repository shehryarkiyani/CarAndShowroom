<?php
include 'connection.php';
if($conn){
    if(isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])&&isset($_POST['cnic'])&&isset($_POST['pass'])&&isset($_POST['city'])&&isset($_POST['phone'])){
        $firstname= $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $pass=$_POST['pass'];
        $cnic=$_POST['cnic'];
        $gender=$_POST['Gender'];
        $city=$_POST['city'];
        $cnicquery="SELECT CNIC FROM customer";
        $AllResult=mysqli_query($conn,$cnicquery);
        $err="0";
        while($row=mysqli_fetch_assoc($AllResult)){
            if($row['CNIC']==$cnic){
                $err="1";
            }
        }
        if($err=="0"){
              $query="INSERT into customer(CNIC,first_name,last_name,email,phone,gender,city,password)VALUES('$cnic','$firstname','$lastname','$email','$phone','$gender','$city','$pass')";
        $result=mysqli_query($conn,$query);
    if($result){
        echo "1";
    }else{
        echo "2";
    }
        }else if($err=="1"){
            echo "3";
        }
      
    
    }
}
else{
    echo "0";
}
?>