<?php

include "navbar_ad.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>update member</title>
    <style type="text/css">
        .srch {
            padding-left: 900px;
        }
    </style>
</head>

<body style="background-image: url(images/mem.jpg); opacity: 0.9;">
    <!--__________________________search bar________________________-->


    <div class="srch">
        <br>


        <form class="navbar-form" method="post" name="form1">

            <input class="form-control me-sm-0" type="text" name="search" placeholder="search members" required="" style="width: 300px; display: inline-block;">

            <button style="background-color: black;color:azure ;  " type="submit" name="submit" class="btn btn-default my-2 my-sm-0">search
            </button>
            <button class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px; "> <a href="edit_member.php" style="text-decoration: none; color: white;">Back</a></button>





        </form>
    </div>
    <h2 style="float: left; color: white;">List Of Members</h2>
    <br> <br>

    <?php

    if (isset($_POST['submit'])) {
        $q = mysqli_query($db, "SELECT id, firstname ,lastname, username, contact FROM `msignup` where firstname like '%$_POST[search]%' ");

        if (mysqli_num_rows($q) == 0) {
            echo "Sorry! No student found with that username. Try searching again.";
        } else {
            echo "<table class='table table-bordered bg-dark ' style='color: white; opacity:0.8;' >";
            echo "<tr style='color: white'>";
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
            echo "<th>";
            echo "Update member";
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
                echo "<td>";
                echo '<form method="get" action="update_mem1.php">';
                echo "<input type='hidden' name='id' value='" . $row['id'] . "' />";
                echo '<input type="submit" value="delete" style="background-color: black;color:azure ; margin: 30px;" name="submit2" class="btn btn-default my-2 my-sm-0" />';
                echo '</form>';


                echo "</tr>";
            }
            echo "</table>";

    ?>
    <?php
        }
    }
    /*if button is not pressed.*/ else {
        $res = mysqli_query($db, "SELECT id, firstname, lastname ,username, contact FROM `msignup`;");

        echo "<table class='table table-bordered bg-dark ' style='color: white; opacity:0.8; ' >";
        echo "<tr style=' color: white;'>";
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
        echo "<th>";
        echo "Update member";
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
            echo "<td>";
            echo '<form method="get" action="update_mem1.php">';
            echo "<input type='hidden' name='id' value='" . $row['id'] . "' />";
            echo '<input type="submit" value="update" style="background-color: black;color:azure ; margin: 30px;" name="submit1" class="btn btn-default my-2 my-sm-0" />';
            echo '</form>';
            echo "</td>";

            echo "</tr>";
        }
        echo "</table>";
    }




    ?>
</body>

</html>