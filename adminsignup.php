<?php
include "connection.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="stylesheet" type="text/css" href="addform_style.css">
    <!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    jQuery library 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

-->
    <title>AdminSignup</title>
</head>

<body style="background-color:rgba(10, 0, 10, 0.5);">
    <div class="only_nav">

        <header>

            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
                <h1 style="color: rgba(110, 61, 1, 0.952);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>

            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="memberlogin.php">MEMBER LOGIN</a></li>
                    <li><a href="adminlogin.php">ADMIN-LOGIN</a></li>

                </ul>
            </nav>


        </header>
        <section>
            <div class="bg2"> <br>
                <div class="adsignup">

                    <form name="login" action="ad_register.php" method="post">

                        <h1 style="text-align: center; font-size: 40px; ">ADMIN SIGN-UP FORM</h1>
                        <label for="firstname">ENTER FIRST NAME</label><br>
                        <input type="text" name="firstname" id="firstname" placeholder="firstname" required="" style="color: black;border: 10px; border-color: black ; height: 30px; width: 250px; "><br> <br>
                        <label for="lastname">ENTER LAST NAME</label><br>
                        <input type="text" name="lastname" id="lastname" placeholder="lastname" required="" style="color: black;border: 10px; border-color: black ; height: 30px; width: 250px; "><br><br>

                        <label for="username">ENTER EMAIL</label><br>

                        <input type="text" name="username" id="username" placeholder="email" required="" style="color: black;border: 10px; border-color: black ; height: 30px; width: 250px; "><br><br>
                        <label for="password">ENTER PASSWORD</label><br>
                        <input type="password" name="password" id="password" placeholder="password " required="" style="color: black;border: 10px; border-color: black ; height: 30px; width: 250px; "><br><br>
                        <label for="contact">CONTACT NO.</label><br>
                        <input type="tel" name="contact" id="contact" placeholder="contact" required="" style="color: black;border: 10px; border-color: black ; height: 30px; width: 250px; "><br><br>
                        <!--<button style=" border: 10px; border-radius: 10%; border-color: black;">SUBMIT</button><br><br>-->
                        <input type="submit" name="submit" id="submit" value="submit" style="color: black; color: black; border: 15px; border-color: black; height: 30px; width: 80px;">
                    </form>
                </div>
            </div>
        </section>



</body>

</html>