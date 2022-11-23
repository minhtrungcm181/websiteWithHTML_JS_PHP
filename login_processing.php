<?php
   include("connectdb.php");
session_start();
$usrname = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($con,$_POST['username']);
    $mypassword = mysqli_real_escape_string($con,$_POST['password']);

    $sql = "SELECT * FROM account WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($con,$sql);
   

    $count = mysqli_num_rows($result);
    

    if($count == 1) {
        if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])) {
            $_SESSION['user'] = $_COOKIE['user'] = $myusername;
        }
        
        header("location:home_logged.php");
        
        return isset($_SESSION['user']);
        
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
 