<?php

include "navbar_ad.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit book</title>
</head>

<body style="background-image: url(images/mem.jpg); opacity: 0.9;">

    <section>
        <br>

        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                <button type="button" class="btn btn-dark btn-lg" style="margin: 10px;"><a href="add_member.php" style="text-decoration: none; color: white;">Add Member</a></button>
                <button type="button" class="btn btn-dark btn-lg" style="margin: 10px;;"><a href="update_mem.php" style="text-decoration: none; color: white;">Update Member</a></button>
                <button type="button" class="btn btn-dark btn-lg" style="margin: 10px;;"><a href="delete_mem.php" style="text-decoration: none; color: white;">Delete Member</a></button>

                <button style="background-color: black;color:azure ;  float: right;" type="submit" name="submit" class="btn btn-default my-2 my-sm-0">search

                </button>
                <input class="form-control me-sm-2" type="text" name="search" placeholder="search books.." required="" style="width: 400px; display: inline-block; float: right;">

            </form>
        </div>

        <br>

        <h2 style="color: white;">List Of Members</h2>
        <?php

        if (isset($_POST['submit'])) {
            $q = mysqli_query($db, "SELECT firstname ,lastname, username, contact FROM `msignup` where firstname like '%$_POST[search]%' ");

            if (mysqli_num_rows($q) == 0) {
                echo "Sorry! No student found with that username. Try searching again.";
            } else {
                echo "<table class='table table-bordered bg-dark ' style='color: white; ' >";
                echo "<tr >";
                //Table header
                echo "<th>";
                echo "First Name";
                echo "</th>";
                echo "<th>";
                echo "Last Name";
                echo "</th>";
                echo "<th>";
                echo "Username";
                echo "</th>";
                echo "<th>";

                echo "Contact";
                echo "</th>";

                echo "</tr>";

                while ($row = mysqli_fetch_assoc($q)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row['firstname'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['lastname'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['username'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contact'];
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</table>";
            }
        }
        /*if button is not pressed.*/ else {
            $res = mysqli_query($db, "SELECT firstname, lastname ,username, contact FROM `msignup`;");

            echo "<table class='table table-bordered bg-dark ' style='color: white; ' >";
            echo "<tr style='background-color: black ; color: white;'>";
            //Table header
            echo "<th>";
            echo "First Name";
            echo "</th>";
            echo "<th>";
            echo "Last Name";
            echo "</th>";
            echo "<th>";
            echo "Username";
            echo "</th>";
            echo "<th>";
            echo "Contact";
            echo "</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";

                echo "<td>";
                echo $row['firstname'];
                echo "</td>";
                echo "<td>";
                echo $row['lastname'];
                echo "</td>";
                echo "<td>";
                echo $row['username'];
                echo "</td>";
                echo "<td>";
                echo $row['contact'];
                echo "</td>";

                echo "</tr>";
            }
            echo "</table>";
        }

        ?>
    </section>

</body>

</html>