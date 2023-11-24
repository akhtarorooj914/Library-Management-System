<?php
include "navbar_ad.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>update member info</title>
    <style type="text/css">
        .form1 {
            margin: 0 540px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="addform_style.css">
</head>

<body style="background-image: url(images/mem.jpg); opacity: 0.9;">
    <br><br>
    <?php

    $id = $_GET['id'];
    $sql = "SELECT * from msignup where id=$id";
    $result = mysqli_query($db, $sql);
    if ($row = mysqli_fetch_assoc($result)) {


        //if (isset($_POST['submit'])) {
        $id = $row['id'];
        $firstname =
            $row['firstname'];
        $lastname =
            $row['lastname'];
        $username =
            $row['username'];
        $contact = $row['contact'];
    }
    // }
    ?>


    <div class=" form-body ">
        <h2 style=" text-align: center; color:white;">Update Member</h2>

        <div class="row">

            <form method='post' action='update_mem1.php' style="color: white;">
                <div class="form1">

                    <label>
                        <h4><b>Member ID: </b></h4>
                    </label>
                    <input class="form-control" type="text" name="id" value="<?php echo $id; ?>">
                    <br>
                    <label>
                        <h4><b>First Name</b></h4>
                    </label>
                    <input class="form-control" type="text" name="firstname" value="<?php echo $firstname; ?>">
                    <br>
                    <label>
                        <h4><b>Last Name</b></h4>
                    </label>
                    <input class="form-control" type="text" name="lastname" value="<?php echo $lastname; ?>">
                    <br>
                    <label>
                        <h4><b>Username</b></h4>
                    </label>
                    <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
                    <br>
                    <label>
                        <h4><b>Contact</b></h4>
                    </label>
                    <input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">
                    <br>
                    <br>
                    <div style="padding-left: 100px;">
                        <button class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px; " type="submit" name="submit">save</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

    <?php

    if (isset($_POST['submit'])) {

        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];

        $contact = $_POST['contact'];


        $sql1 = "UPDATE msignup SET firstname='$firstname', lastname='$lastname', username='$username', 
        contact='$contact' WHERE `msignup` . `id` = $id ";

        if (mysqli_query($db, $sql1)) {
    ?>
            <script type="text/javascript">
                alert("Saved Successfully.");
                window.location = "update_mem.php";
            </script>
    <?php
        }
    }
    ?>
</body>

</html>