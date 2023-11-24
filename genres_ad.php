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

<body style="background-image: url(images/genre.jpg); opacity: 0.9;">

    <section>
        <br>

        <h2 style="color: white;">List Of Books</h2>
        <?php
        if (isset($_POST['submit'])) {
            $q = mysqli_query($db, "SELECT * from books where department like '%$_POST[search]%' ");

            if (mysqli_num_rows($q) == 0) {
                echo "Sorry! No genre found. Try searching again.";
            } else {
                echo "<table class='table table-bordered bg-dark ' style='color: white; '>";
                echo "<tr >";
                //Table header
                echo "<th>";
                echo "ID";
                echo "</th>";
                echo "<th>";
                echo "Department";
                echo "</th>";
                echo "<th>";
                echo "Book-Name";
                echo "</th>";
                echo "<th>";
                echo "Authors Name";
                echo "</th>";
                echo "<th>";
                echo "Edition";
                echo "</th>";
                echo "<th>";
                echo "Status";
                echo "</th>";
                echo "<th>";
                echo "Quantity";
                echo "</th>";

                echo "</tr>";

                while ($row = mysqli_fetch_assoc($q)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row['bid'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['department'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['name'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['authors'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['edition'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['status'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['quantity'];
                    echo "</td>";


                    echo "</tr>";
                }
                echo "</table>";
            }
        } else {


            $res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`department` ASC;");

            echo "<table class='table table-bordered bg-dark ' style='color: white; '>";
            echo "<tr >";
            //Table header
            echo "<th>";
            echo "ID";
            echo "</th>";
            echo "<th>";
            echo "Genre";
            echo "</th>";
            echo "<th>";
            echo "Book-Name";
            echo "</th>";
            echo "<th>";
            echo "Authors Name";
            echo "</th>";
            echo "<th>";
            echo "Edition";
            echo "</th>";
            echo "<th>";
            echo "Status";
            echo "</th>";
            echo "<th>";
            echo "Quantity";
            echo "</th>";

            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>";
                echo $row['bid'];
                echo "</td>";
                echo "<td>";
                echo $row['department'];
                echo "</td>";
                echo "<td>";
                echo $row['name'];
                echo "</td>";
                echo "<td>";
                echo $row['authors'];
                echo "</td>";
                echo "<td>";
                echo $row['edition'];
                echo "</td>";
                echo "<td>";
                echo $row['status'];
                echo "</td>";
                echo "<td>";
                echo $row['quantity'];
                echo "</td>";


                echo "</tr>";
            }
            echo "</table>";
        } ?>


    </section>

</body>

</html>