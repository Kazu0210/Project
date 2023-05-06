

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <title>Login | Tech Corner</title>
</head>
<body>

    <!-- LOGIN FORM -->
    <div id="login-form">
        <form action="authentication.php" method="post">
            <label for="username">Username</label>
            <br>
            <input type="text" id="username" name="username">
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" id="password" name="password">
            <br>
            <input type="submit" value="Login" id="submit1">
            <hr>
            <div class="text-container">
                <h2 id="text">Don't have an account?</h2>
            </div>
            <input type="button" value="Sign Up" id="submit2" onclick="gotoSignUp()">
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

        function gotoSignUp(){
            window.location.href = "signup.php";
        }
    </script>
</body>
</html>