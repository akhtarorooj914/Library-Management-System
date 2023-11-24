<?php
include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add member</title>
    <link rel="stylesheet" type="text/css" href="addform_style.css">
</head>

<body style="background-image: url(images/mem.jpg); opacity: 0.9;">
    <?php
    include "navbar_ad.php";
    ?>

    <div class="form-body ">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" style="background-color:black; opacity: 0.8;">
                        <h2 style="color: white">Add Member</h2>

                        <form class="requires-validation" method="post" style="font-weight: bold;">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="firstname" placeholder="First name" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="lastname" placeholder="last name" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div> <br>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Email" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="password" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div> <br>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="contact" placeholder="contact" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>


                            <form>

                                <div class="form-button mt-3">
                                    <button name="submit" id="submit" type="submit" class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px;">Register</button>

                                    <button class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px; "> <a href="edit_member.php" style="text-decoration: none; color: white;">Back</a></button>

                                </div>

                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><?php

            if (isset($_POST['submit'])) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $contact = $_POST['contact'];
                $password = $_POST['password'];
                $sql = "INSERT INTO msignup (firstname, lastname, username, password, contact) VALUES ('$firstname','$lastname','$username', '$password', '$contact')";
                if (mysqli_query($db, $sql)) {
            ?><strong>New record created successfully !</strong>
            <script type="text/javascript">
                window.location = "edit_member.php"
            </script>

    <?php

                } else {
                    echo "Error: " . $sql . "
" . mysqli_error($db);
                }
                mysqli_close($db);
            } ?>

</body>

</html>