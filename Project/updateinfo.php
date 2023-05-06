<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "demafelis_villacruz_dblinfo";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$sql = "SELECT * FROM tbl_info";
$result = mysqli_query($con, $sql);   
    
if (!$result){
    die ("Invalid Query: " . $con->error);
}

if (isset($_POST['updateinfo'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $Fname = mysqli_real_escape_string($con, $_POST['fname']);
    $Lname = mysqli_real_escape_string($con, $_POST['lname']);
    $Mname = mysqli_real_escape_string($con, $_POST['mname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    // Update record in database
    $sql = "UPDATE tbl_info SET F_name='$Fname', L_name='$Lname', M_name='$Mname', address ='$address', gender ='$gender', age ='$age', birthday='$birthday', email='$email' WHERE id='$id'";
    mysqli_query($con, $sql);
    
    // Record updated, redirect to homepage
    header("Location: table.user");
    exit();
}

// Retrieve record to edit
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);
    
    // Select record from database
    $sql = "SELECT * FROM tbl_info WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User Information</title>
</head>
<body>
	<h1>Edit User Information</h1>
	<form method="post" action="updateinfo.php">
		
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	
    <label>First Name:</label>
		<input type="text" name="fname" value="<?php echo $row['F_name']; ?>"><br><br>
	
        <label>Last Name:</label>
		<input type="text" name="lname" value="<?php echo $row['L_name']; ?>"><br><br>
	
        <label>Middle Name:</label>
		<input type="text" name="mname" value="<?php echo $row['M_name']; ?>"><br><br>
	
        <label>Address:</label>
		<input type="text" name="address" value="<?php echo $row['address']; ?>"><br><br>
	
        <label>Gender:</label>
		<select type="text" name="gender" value="<?php echo $row['gender']; ?>">
        <option value=""></option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                        <option value="Preferred_Not_To_Say">Preferred Not To Say</option>
        </select>
                        <br><br> 
	            
        <label>Age:</label>
		<input type="text" name="age" value="<?php echo $row['age']; ?>"><br><br>

        <label>Birthday:</label>
		<input type="text" name="birthday" value="<?php echo $row['birthday']; ?>"><br><br>

        <label>Email:</label>
		<input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>

        <input type="submit" name="update" value="Update">

    </form>

</body>

    <a href="tableadmin.php">Logout</a>

</html>