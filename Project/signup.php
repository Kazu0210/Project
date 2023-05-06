<?php 
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$firstname = $_POST['firstname'];
        $middlename = $_POST['mname'];
		$lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $birthday = $_POST['birthdate'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
        $default_user_type = 'User';

		if(!empty($firstname) && !empty($middlename)  && !empty($lastname)  && !empty($username)  && !empty($address)  && !empty($gender) && !empty($age) && !empty($birthday) && !empty($email) && !empty($password) && !empty($confirm_password)){
            if($password == $confirm_password){
                //save to database
                $query = "insert into tbl_info (F_name, L_name, M_name, Address, Gender, Age, Birthdate, Email) values 
                ('$firstname','$lastname','$middlename','$address','$gender','$age', '$birthday','$email')";
                mysqli_query($con, $query);

                $query = "insert into tbl_user(username, password, user_type) values 
                ('$username','$password', '$default_user_type')";
                mysqli_query($con, $query);
                header("Location: login.php");
                die;
            }
        }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/signup.css">
    <title>Sign Up | Tech Corner</title>
</head>
<body>

    <!-- LOGIN FORM -->
    <div id="login-form">
        <div class="image-container">
            <img src="styles/img/phone.png" alt="" id="phone-img">
        </div>
        <div class="link-container">
            <a href="login.php">Already have an account?</a>
        </div>
        
        <form action="#" method="post">

            <div class="form-container">
                <h1 id="form-title">CREATE ACCOUNT</h1>
                <div id="fname-container">
                    <label for="">First name</label>
                    <br>
                    <input type="text" id="fname" name="firstname" required>
                </div>
    
                <div id="lname-container">
                    <label for="">Last name</label>
                    <br>
                    <input type="text" id="lname"   name="lastname" required>
                </div>

                <div id="mname-container">
                    <label for="">Middle name</label>
                    <br>
                    <input type="text" id="mname" name="mname" required>
                </div>
                
                <div id="username-container">
                    <label for="">Username</label>
                    <br>
                    <input type="text" id="username" name="username" required>
                </div>
                
                <div id="address-container">
                    <label for="">Address</label>
                    <br>
                    <input type="text" id="address" name="address" required>
                </div>

                <div id="gender-container">
                    <label for="">Gender</label>
                    <br>
                    <!-- <input type="text" name="gender" id="gender"> -->
                    <select name="gender" id="gender" required>
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                        <option value="N/A">Preferred not to say</option>
                    </select>
                </div>

                <div id="age-container">
                    <label for="">Age</label>
                    <br>
                    <input type="text" name="age" id="age" required>
                </div>

                <!-- birthdate -->
                <div id="birthdate-container">
                    <label for="">Birthdate</label>
                    <br>
                    <input type="date" name="birthdate" id="birthdate" required>
                </div>

                <div id="email-container">
                    <label for="">Email</label>
                    <br>
                    <input type="text" id="email" name="email" required>
                </div>
    
                <!-- <div id="phone-container">
                    <label for="">Phone number</label>
                    <br>
                    <input type="text" id="phone" name="phone_number">
                </div> -->
    
                <div id="password-container">
                    <label for="">Password</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                </div>
    
                <div id="confirmpass-container">
                    <label for="">Confirm Passowrd</label>
                    <br>
                    <input type="password" id="confirmpass" name="confirm_password" required>
                </div>

                <input type="submit" value="Sign Up" id="signup-button" onclick=checkPassword()>
            </div>
            
        </form>
    </div>

    <div class="container">
        <div class="navbar-container">
            <img src="styles/img/TechCornerLogo.png" alt="shoplogo" id="logo">
            <!-- login and cart button -->
            <div class="button" id="link2">
                <ul>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
            <div class="button" id="link3">
                <ul>
                    <li><a href="#">Cart</a></li>
                </ul>
            </div>
            <!-- links -->
            <div class="link1">
                <ul>
                    <li><a href="#">Mobile phone</a></li>
                    <li><a href="#">Keyboard</a></li>
                    <li><a href="#">Mouse</a></li>
                    <li><a href="#">Laptop</a></li>
                    <li><a href="#">Headphone</a></li>
                </ul>
            </div>
        </div>
    
        <div class="content-container">
            <div class="background">
                <h2 id="background-title">apple</h2>
            </div>
            <div class="image2-container" style="background-image: linear-gradient(rgba(37, 37, 37, 0.5), rgb(0, 0, 0)),
        url(styles/img/iPhone-img2.jpg)"></div>
            
            <div class="info">
                <div class="title-container">
                    <h1 id="product-name">iPhone 14 Pro Max</h1>
                </div>
                <h1 id="overview-title">Overview</h1>
                <div class="description">
                    iPhone 14 Pro Max. Capture incredible detail with a 48MP Main camera. Experience iPhone in an whole new way with Dynamic Island and Always-On display. Crash Detection, a new safety feature calls for help when you can't.
                </div>
            </div>
            <div class="image1-container">
                <img src="styles/img/iPhone-img1.png" alt="image" id="image1">
            </div>
        </div>
    </div>

    <script>
        function checkPassword(){
            var pass = document.getElementById("password").value;
            var confirm_pass = document.getElementById("confirmpass").value;

            if(pass != confirm_pass || confirm_pass != pass){
                alert("Please check your password.")
            }
        }
    </script>
</body>
</html>