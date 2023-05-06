<?php 

session_start(); // start the session

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "demafelis_villacruz_dblinfo";  
      
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  

if(isset($_SESSION['login_user'])) {
    $username = $_SESSION['login_user']; // get the username from the session
    echo "<h1>Welcome, " . $username . "!</h1>";
    echo "<br>";
}

$sql = "SELECT id, F_name, L_name, M_name, address, gender, age, birthday, email FROM tbl_info";
$result = mysqli_query($con, $sql);   
    
if (!$result){
    die ("Invalid Query: " . mysqli_error($con));
}
?>

<html>
    <title>Table</title>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" contents="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body style="margin: 50px;"> 
        <h1>CUSTOMERS</h1>
        <br>
    <Table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Middle Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Email</th>
        <th>Option</th>
    </tr>
    </thead>

    <?php 
    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>  $row[id]  </td>
        <td>  $row[F_name]  </td>
        <td>  $row[L_name]  </td>
        <td>  $row[M_name]</td>
        <td>  $row[address]  </td>
        <td>  $row[gender]  </td>
        <td>  $row[age]  </td>
        <td>  $row[birthday]</td>
        <td>  $row[email]</td>
        <td>
                <a href='updateinfo.php?id=" . $row['id'] . "'>Edit</a>
                <a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
        </td>
        </tr>";
    }
?>
   
    </Table>

    <Table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>User Type</th>
        <th>Option</th>
    </tr>
    </thead>

    <?php 

    $sql = "SELECT * FROM tbl_user";
    $result = mysqli_query($con, $sql);   
    
    if  (!$result){
        die ("Invalid Query: " . $connetion->error);
    }

    while ($row = $result->fetch_assoc()){
        echo "<tr>
        <td>  $row[id]  </td>
        <td>  $row[username]  </td>
        <td>  $row[password]  </td>
        <td>  $row[user_type] </td>
        <td>
                <a href='updateadmin.php?id=" . $row['id'] . "'>Edit</a>
                <a href='delete.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\")'>Delete</a>
        </td>
        </tr>";
    }

?>

    
   
    </Table>


    </body>
    <a href="LP1.html">Logout</a>
</html>