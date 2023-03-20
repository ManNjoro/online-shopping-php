<?php
include "connection.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password1'];
$confirm = $_POST['password2'];
session_start();
$password_hash = sha1($password);
// $conn = new mysqli($host,$userName,$password,$dbName);
$query_result=false;
// check for errors and connect to database
if($conn -> connect_error){
    die("connection failed:" .$conn-> $connect_error);
}else{
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($mobile) && !empty($password) && !empty($confirm)){
        $query = "INSERT INTO customer (fname, lname, mobile, email,passwd ) VALUES ('$fname', '$lname','$mobile','$email', '$password_hash');";
        $query_result = mysqli_query($conn,$query);
    }
    else{
        echo "fill in all fields<br>";
    }
    
}

if ($query_result==true){
    $_SESSION['success']="Sign up successful";
    header("location: sign_up.php");
}else{
    $_SESSION['fail'] = "Sign up unsuccessful";
    header("location: sign_up.php");
}
?>