<?php 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        @font-face {
            font-family: "CustomFont";
            src: url('ArticulatCF-Bold.ttf') format('truetype'),
                url('ArticulatCF-Light.ttf') format('truetype'),
                url('Global-mL1qm.ttf') format('truetype');
        }
        /* remove all padding and margin */
        * {
            margin: 0;
            padding: 0;
        }
        body{
            background-color: #0a0a0a;
            overflow: hidden;
        }

        /* navigation bar */
        #navbar-container{
            background-image: linear-gradient(#080808, #0a0a0a);
            height: 100px;
            width: 100%;
            border-bottom: 1px solid white;
        }
        
        #logo{
            position: static;
            width: auto;
            height: 50px;
            margin: 10px;
            transition-duration: .3s;
        }

        /* login button & cart button */
        .button-container{
            width: fit-content;
            /* position */
            position: absolute;
            right: 25px;
            top: 20px;
        }
        #login-button, #cart-button{
            background-color: #151419;
            /* font */
            color: white;
            font-family: 'CustomFont';
            font-weight: bold;

            /* border */
            border-color: #151419;
            border-style: solid;
            border-radius: 50px;

            /* width & height */
            width: 65px;
            height: 30px;

            /* trasition */
            transition: border-color .2s ease 0s;

            /* cursor */
            cursor: pointer;
        }
        /* login button & cart button animation */
        #login-button:hover, #cart-button:hover{
            /* border */
            border-color: #ffffff;
        }

        /* links */
        .links{
            /* position */
            margin-left: 10px;
        }
        ul{
            width: fit-content;
            list-style-type: none;
        }
        li{
            float: left;
        }
        li a{
            display: block;

            /* font */
            text-align: center;
            text-decoration: none;
            font-family: 'CustomFont';
            font-weight: bold;
            font-size: 15px;
            color: white;
            background: #080808;
            /* spacing */
            padding: 4px 15px;
            /* border */
            border-right: 1px solid white;
            /* transition */
            transition-duration: .5s;
        }
        li a:hover{
            border-right: #080808;
            border-radius: 10px 10px 0px 0px;
            background-color: white;
            color: black;
        }

        /* form */
        .form-container{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: royalblue;
            opacity: .5;
            width: 100%;
            height: 100%;
            position: absolute;
        }
        form{
            background-color: red;
            position: relative;
            padding: 0;
            margin: 0;
            text-align: center;
            width: 300px;
            height: 400px;
        }

        .title{
            color: white;
            font-family: 'CustomFont';
            font-weight: bold;
            font-size: 35px;
            margin: 40px 0px 0px 0px;
        }

        input{
            height: 27px;
            width: 230px;
            margin: 20px 0px 0px 0px;
            border-width: 1px;
            border-radius: 5px;
            outline-width: 1px;
            outline: none;

            padding-inline-start: 10px;
            font-size: 12px;
            font-family: 'CustomFont';

            transition-duration: .2s;
        }
        button{
            cursor: pointer;
        }
        /* login button */
        #login-button2{
            font-family: 'CustomFont';
            font-weight: bold;
            position: absolute;
            width: 150px;
            height: 30px;
            border: none;
            border-radius: 50px;
            margin: 25px 0px 0px 0px;
            top: 55%;
            left: 50%;
            transform: translate(-50%, -50%);   
        }
        /* signup button */
        #signup-button{
            font-family: 'CustomFont';
            font-weight: bold;
            width: 100px;
            height: 30px;
            top: 90%;
            border: none;
            border-radius: 50px;
            margin: 45px 0px 0px 0px;
        }

        /* horizontal line */
        hr{
            width: 50%;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);   
        }
        /* input box */
        input:hover{
            background-color: rgb(218, 218, 218);
            opacity: 1;
        }
        input:focus{
            background-color: rgb(83, 83, 83);
            color: white;
        }
        input:focus::placeholder{
            color: white;
        }

        /* login form */
        #container{
            display: none;
            opacity: .9;
            background-color: bisque;
        }
        .login-form-container{
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 90vh;
            background-color: #09090a;
            border-radius: 20px;
            top: 105px;
        }
        #login-form{
            background-color: #000000;
            border-radius: 15px;
            position: relative;
            width: 370px;
            height: 400px;
            top: -40px;
        }

                /* iFrame styles */
        .iframe-container {
            background-color: #151419;
            height: 100vh;
            top: 0;
            width: 100%;
        }

        #apple {
            height: 100vh;
            top: 0;
            width: 100%;
        }
    </style>
    <title>Tech Corner</title>
</head>
<body>

    <div class="container" id="container">
        <div class="login-form-container" id="login-container">
            <iframe src="login.php" frameborder="0" id="login-form"></iframe>
        </div>
    </div>

    <div id="navbar-container">
        <img src="TechCornerLogo.png" alt="logo" id="logo">
        <nav class="links">
            <ul>
                <li><a href="#">Headphone</a></li>
                <li><a href="#">Keyboard</a></li>
                <li><a href="#">Mouse</a></li>
                <li><a href="#">Laptop</a></li>
                <li><a href="#">Mobile Phone</a></li>
            </ul>
        </nav>
        <div class="button-container">
            <button id="login-button" onclick="showLoginForm()">Login</button>
            <button id="cart-button" onclick="showLoginForm()">Cart</button>
        </div>
    </div>

    <div class="iframe-container">
        <iframe src="apple.php" frameborder="0" id="apple"></iframe>
        <iframe src="index.php" frameborder="0" id="frame2"></iframe>
    </div>

    <script>
        // show login form when button is clicked
        function showLoginForm(){
            var show = document.getElementById("container");
            show.style.display = "block";
        }

        var hideLogin = document.getElementById("container");
        
        // close login form when outside is clicked
        window.addEventListener('mouseup', function(event){
            if(event.target != hideLogin && event.target.parentNode != hideLogin){
                hideLogin.style.display = "none";   
            }
        })
    </script>
</body>
</html>
