<?php

include "navbar_ad.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <style type="text/css">
        .wrapper {
            width: 300px;
            margin: 0 auto;
            color: white;
        }
    </style>
</head>

<body style="background-color: white; ">
    <div class="container">
        <form action="" method="post">
            <button class="btn btn-default" style="float: right; width: 70px;" name="submit1" type="submit">Edit</button>
        </form>

        <div class="wrapper">
            <?php

            if (isset($_POST['submit1'])) {
            ?>
                <script type="text/javascript">
                    window.location = "edit.php"
                </script>
            <?php
            }


            $q = mysqli_query($db, "SELECT * FROM ad_register where username='$_SESSION[login_admin]' ;");
            ?>
            <h2 style="text-align: center;">My Profile</h2>

            <?php
            $row = mysqli_fetch_assoc($q);


            ?>
            <div style="text-align: center;"> <b>Welcome, </b>
                <h4>
                    <?php echo $_SESSION['login_admin']; ?>
                </h4>
            </div>



            <?php
            echo "<b>";
            echo "<table class='table table-bordered'>";
            echo "<tr>";
            echo "<td>";
            echo "<b> First Name: </b>";
            echo "</td>";

            echo "<td>";
            echo $row['firstname'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b> Last Name: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['lastname'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b> User Name: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['username'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td>";
            echo "<b> Password: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['password'];
            echo "</td>";
            echo "</tr>";



            echo "<tr>";
            echo "<td>";
            echo "<b> Contact: </b>";
            echo "</td>";
            echo "<td>";
            echo $row['contact'];
            echo "</td>";
            echo "</tr>";


            echo "</table>";
            echo "</b>";
            ?>
        </div>
    </div>
</body>

</html>