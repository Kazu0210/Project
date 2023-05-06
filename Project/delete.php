<?php    


$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "demafelis_villacruz_dblinfo";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

// Delete process
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);
    
    // Delete record from tbl_info table
    $sql1 = "DELETE FROM tbl_info WHERE id='$id'";
    mysqli_query($con, $sql1);
    
    // Delete record from tbl_user table
    $sql2 = "DELETE FROM tbl_user WHERE id='$id'";
    mysqli_query($con, $sql2);
    
    // Records deleted, redirect to homepage
    header("Location: updateadmin.php");
    exit();
}

?>