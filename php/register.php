<?php
if(isset($_POST["submit"])) {
    include "dbconnect.php";
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phonenumber = $_POST["phonenumber"];
    $homeaddress = $_POST["homeaddress"];

    $sqlinsert = "INSERT INTO tbl_user(user_name, user_email, user_password, user_phone, user_homeAddress) VALUES ('$username', '$email', '$password', '$phonenumber', '$homeaddress')";

    try {
        $conn-> exec($sqlinsert);
        if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
            $last_id = $conn->lastInsertId();
            uploadImage($last_id);
            echo "<script>alert('Success')</script>";
            echo "<script>window.location.replace('login.php')</script>";
        }
    } catch (PDOException $e) {
        echo "<script>alert('Register Failed');</script>";
        echo "<script>window.location.replace('register.php')</script>";
    }    
}

function uploadImage($filename)
{
    $target_dir = "../css/assets/images/user_profile/";
    $target_file = $target_dir . $filename . ".png";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <script src="../js/upload-image.js">
    </script>
    <title>Document</title>

</head>
<body>
    <!-- Navbar -->
    <div class="w3-top">
        <nav class="w3-bar w3-white w3-card w3-padding-large">
            <a href="#home" class="w3-bar-item w3-button"><b>My</b> Tutor</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
            <a href="#about" class="w3-bar-item w3-button">About</a>
            <a href="#contact" class="w3-bar-item w3-button">Contact us</a>
            </div>
        </nav>
    </div>

    <div class="content-page-signup">
        <div class="register-content">
            <div class="register-form">
                <form action="register.php" method="post" style="width: 130%; margin: auto" enctype="multipart/form-data">
                    <h1 style="text-align: center;">Sign Up Form</h1>
                        <div class="avatar">
                            <img class="avatar-image" src="../assets/images/user.png" style="height:100%"><br><br>
                            <input type="file" name="fileToUpload" onchange="previewFile()">
                        </div>
                        <br><br>
                        <p>
                            <label for="username">Username</label><br>
                            <input class="w3-input w3-border w3-round" type="text" id="username" name="username" required>
                        </p>
                        <p>
                            <label for="email">Email</label><br>
                            <input class="w3-input w3-border w3-round" type="email" id="email" name="email" required>
                        </p>
                        <p>
                            <label for="password">Password</label><br>
                            <input class="w3-input w3-border w3-round" type="password" id="password" name="password" required>
                        </p>
                        <p>
                            <label for="phonenumber">Phone Number</label><br>
                            <input class="w3-input w3-border w3-round" type="text" id="phonenumber" name="phonenumber" required>
                        </p>
                        <p>
                            <label for="homeaddress">Home Address</label><br>
                            <textarea class="w3-input w3-border w3-round" id="homeaddress" name="homeaddress" rows="3" cols="30" required="true">
                            </textarea>
                        </p>
                        <p>
                            <input type="checkbox" name="agreement" id="agreement" value="agree">
                            <label for="agreement">I read and agree to 
                                <a href="#" target="_blank" style="text-decoration:underline">
                                    <b>Terms & Conditions</b>
                                </a>
                            </label>
                        </p>
                        <p>
                            <input class="w3-btn w3-round w3-white w3-block" type="submit" name="submit"></input>
                        </p>
                    <p style="text-align:center">
                        Already have account ? 
                        <a href="login.php" target="_self">
                            <b>Login</b>
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>