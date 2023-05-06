<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "demafelis_villacruz_dblinfo";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

$sql = "SELECT * FROM tbl_user";
$result = mysqli_query($con, $sql);   
    
if (!$result){
    die ("Invalid Query: " . $con->error);
}

if (isset($_POST['update'])) {
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $usertype = mysqli_real_escape_string($con, $_POST['usertype']);
    
    
    // Update record in database
    $sql = "UPDATE tbl_user SET username='$username', password='$password', user_type='$usertype' WHERE id='$id'";
    mysqli_query($con, $sql);
    
    // Record updated, redirect to homepage
    header("Location: tableadmin.php");
    exit();
}

// Retrieve record to edit
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($con, $_GET['id']);
    
    // Select record from database
    $sql = "SELECT * FROM tbl_user WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User Login Information</title>
</head>
<body>
	<h1>Edit User Login Information</h1>
	<form method="post" action="updateadmin.php">
		<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		<label>Username:</label>
		<input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
		<label>Password:</label>
		<input type="text" name="password" value="<?php echo $row['password']; ?>"><br><br>
		<label>User Type:</label>
		<select name="usertype">
			<option value=""></option>
			<option value="User" <?php if ($row['user_type'] == 'User') { echo "selected"; } ?>>User</option>
			<option value="Admin" <?php if ($row['user_type'] == 'Admin') { echo "selected"; } ?>>Admin</option>
		</select><br><br>
		<input type="submit" name="update" value="Update">
	</form>
</body>
<a href="tableadmin.php">Cancel</a>
</html>