<?php
session_start();
include("include/connect.php");

$password =  $_POST['lpassword'];
$phone =  $_POST['lphone'];


if($phone && $password){

    $check_query = mysqli_query($con,"SELECT * from users where phone_number='$phone' and password='$password'");

    $num_rows = mysqli_num_rows($check_query);



   if($check_query){

if($num_rows != 0){
    echo "login hoel";
    $_SESSION['phone'] = $phone;
    header("location:home.php");
     
}else{
    echo "worong password";
}



   }else{
       echo "nhi e baba";
   }

}

?>