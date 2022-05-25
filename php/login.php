<?php
if(isset($_POST["submit"])) {
    include "dbconnect.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sqllogin = "SELECT * FROM tbl_user WHERE user_email = '$email' AND user_password = '$password'";
    $stmt = $conn->prepare($sqllogin);
    $stmt ->execute();
    $number_of_rows = $stmt->fetchColumn();

    if($number_of_rows > 0) {
        echo "<script>alert('Login Success');</script>";
        echo "<script> window.location.replace('main.php')</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
        echo "<script> window.location.replace('login.php')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <script src="../js/login.js"></script>
    <title>Document</title>
    
</head>
<body>
    <!-- Navbar -->
    <div class="w3-top">
        <nav class="w3-bar w3-white w3-card w3-padding-large">
            <a href="#home" class="w3-bar-item w3-button"><b>My</b>Tutor</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">About</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact us</a>
            </div>
        </nav>
    </div>

    <div class="content">
        <div class="login-content">
            <a href="" class="logo-column"></a>
            <div class="login-form">
                <h1>Login Form</h1>
                <form action="login.php" method="post">
                    <p>
                        <label for="email">Email</label><br>
                        <input class="w3-input w3-border w3-round" type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="password">Password</label><br>
                        <input class="w3-input w3-border w3-round" type="password" id="password" name="password" required>
                    </p>
                    <p>
                        <input type="checkbox" name="remember" id="rememberme" value="remember">
                        <label for="remember">Remember me</label>
                    </p>
                    <p>
                        <input class="w3-btn w3-round w3-white w3-block" type="submit" name="submit"></input>
                    </p>
                    <p style="text-align:center">
                        New User? 
                        <a href="register.php" target="_self">
                            <b>Sign Up</b>
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="w3-bar w3-white w3-padding-large">
            <p style="color:black; text-align: center;">
                Copyright &copy; <b>Goh Wen Xuan 277153</b>
            </p>
        </div>
    </footer>
</body>
</html>