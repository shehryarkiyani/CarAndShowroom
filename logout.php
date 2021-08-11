<?php
session_start();
if(isset($_SESSION['adminemail'])){
    session_destroy();
    header("Location:mainwebpage.php");
}

?>