<?php
include "connection.php";
session_start();

$email = $_POST['email'];
$password = $_POST['passwd'];
$password_hash = sha1($password);
$query_result=false;
// check for errors and connect to database
if($conn -> connect_error){
    die("connection failed:" .$conn-> $connect_error);
}else{
    if(!empty($email) && !empty($password)){
        $query = $conn->prepare("SELECT * FROM customer where email=? and passwd=?;");
        $query-> bind_param("ss",$email,$password_hash);
        $query->execute();
        $query_result = $query->get_result();
        if ($query_result->num_rows > 0){
            $row = $query_result->fetch_assoc();
            if($row['passwd'] === $password_hash && $row['email']=== $email){  
                // $_SESSION['online_shopping']='true';
                $_SESSION['online_shopping'] = array('custno' => $row['custno'],'email' => $row['email']);
                $_SESSION['status'] = "Logged in successfully";
                header('location:index.php');
            }
        }else{
            $_SESSION['status'] = "Invalid email or password";
            header('location: login.php');
        }
    }
    else{
        $_SESSION['status'] = "fill in all fields";
        header('location: login.php');
    }
    
}
?>