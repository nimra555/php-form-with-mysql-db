<?php

include("connect.php");
error_reporting(0);


if($_SERVER[ 'REQUEST_METHOD' ]=='POST'){

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['Email'];
$paswd = $_POST['password'];
$cpaswd = $_POST['confirm_password'];

$query="INSERT INTO users (firstName,lastName,Email,password,confirm_password) values ('$fname','$lname','$email','$paswd','$cpaswd')";
$data = mysqli_query($conn,$query);

if($data){
    echo "sucessfully register";
}
else{
    echo "unsucessfully not register";
}

}

?>