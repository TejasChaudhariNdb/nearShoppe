<?php
session_start();
include("include/connect.php");

$name =  $_POST['sname'];
$password =  $_POST['spassword'];
$phone =  $_POST['smobile'];


if($name && $password){

    $check_query = mysqli_query($con,"SELECT * from users where phone_number='$phone' ");

    $num_rows = mysqli_num_rows($check_query);

if($num_rows === 0){

    $query = mysqli_query($con,"INSERT INTO users (name,phone_number,password) values('$name','$phone','$password')");

    if($query){
        echo "insert";
    
        $_SESSION['phone'] = $phone;
        header("location:home.php");
    
    }else{
        echo "Error aaahe Bhoooo";
    }
    

}else{
    echo "number already";
}




}



?>