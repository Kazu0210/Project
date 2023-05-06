<?php

session_start(); // Start a session

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "demafelis_villacruz_dblinfo";  
      
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']); 

    $sql = "SELECT id, user_type FROM tbl_user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    
    // If result matched $username and $password, table row must be 1 row
    if($count == 1) {
        $_SESSION['login_user'] = $username;
        $_SESSION['user_id'] = $id;           // store username in session
        
        if ($row['user_type'] == "Admin") {
            $_SESSION['user_type'] = "Admin"; // store user type in session
            header("location: tableadmin.php"); // redirect to admin dashboard
        } else {
            $_SESSION['user_type'] = "User"; // store user type in session
            header("location: tableuser.php"); // redirect to user dashboard
        }
    } else {
        echo "<script>alert('Your Login Name or Password is invalid');</script>";
        header("location: login.php");
    }
}
?>