<?php
session_start();
include_once "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

     Latest compiled JavaScript 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
-->
    <link rel="stylesheet" type="text/css" href="addform_style.css">

    <title>MemberLogin</title>
</head>

<body style="background-color: black;">
    <div class="only_nav">

        <header>

            <div class="logo">
                <img src="images/logo.jpg" alt="logo">
                <h1 style="color: rgba(110, 61, 1, 0.952);">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>

            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="membersignup.php">SIGN-UP</a></li>
                    <li><a href="adminlogin.php">ADMIN-LOGIN</a></li>

                </ul>
            </nav>


        </header>
        <section>
            <div class="bg2"> <br> <br> <br> <br>
                <div class="login"> <br>

                    <form name="login" action="" method="post">

                        <h1 style="text-align: center; font-size: 40px; ">MEMBER LOGIN FORM</h1>
                        <label for="username" style="text-align: left;">ENTER USERNAME OR EMAIL</label><br><br>

                        <input type="text" name="username" id="username" placeholder="username" required="" style="color: black; border: 10px; border-color: black ; height: 30px; width: 250px; "><br><br>
                        <label for="password">ENTER PASSWORD</label><br><br>
                        <input type="password" name="password" id="password" placeholder="password " required="" style="color: black; border: 10px; border-color: black ; height: 30px; width: 250px; "><br><br>
                        <!-- <button style=" border: 10px; border-radius: 10%; border-color: black;">SUBMIT</button><br><br>-->
                        <!--<button style=" border: 10px; border-radius: 10%; border-color: black;">SUBMIT</button><br><br>-->
                        <input type="submit" name="login" id="login" value="submit" style="color: black; border: 15px; border-color: black; height: 30px; width: 80px;">

                        <UL>
                            <br><br>
                            <a href="membersignup.php" style="text-decoration: none; color: white;">NEW MEMBER?SIGN-UP</a>
                        </UL>
                    </form>
                </div>
            </div>
        </section>

        <?php

        if (isset($_POST['login'])) {
            $count = 0;
            $res = mysqli_query($db, "SELECT * FROM `msignup` WHERE username='$_POST[username]' && password='$_POST[password]';");
            $count = mysqli_num_rows($res);

            if ($count == 0) {
        ?>
                <!--
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              -->
                <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: rgba(189, 140, 81, 0.822); color: white">
                    <strong>The username and password doesn't match</strong>
                </div>
                <?php
            } else {
                while ($row = mysqli_fetch_assoc($res)) {

                    $_SESSION['login_member'] = $row['id'];
                ?>




                    alert("login successful.");
                    <script type="text/javascript">
                        window.location = "mem_dashboard.php"
                    </script>
        <?php
                }
            }
        }
        ?>

    </div>

</body>

</html>