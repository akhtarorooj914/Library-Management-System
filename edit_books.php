<?php

include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit book</title>
</head>

<body style="background-image: url(images/buk.jpg); opacity: 0.9;">
    <?php

    include "navbar_ad.php";
    ?>

    <section>
        <br>

        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                <button type="button" class="btn btn-dark btn-lg" style="margin: 10px;"><a href="add_book.php" style="text-decoration: none; color: white;">Add Book</a></button>
                <button type="button" class="btn btn-dark btn-lg" style="margin: 10px;;"><a href="update_book.php" style="text-decoration: none; color: white;">Update Book</a></button>
                <button type="button" class="btn btn-dark btn-lg" style="margin: 10px;;"><a href="delete_book.php" style="text-decoration: none; color: white;">Delete Books</a></button>

                <button style="background-color: black;color:azure ;  float: right;" type="submit" name="submit" class="btn btn-default my-2 my-sm-0">search

                </button>
                <input class="form-control me-sm-2" type="text" name="search" placeholder="search books.." required="" style="width: 400px; display: inline-block; float: right;">

            </form>
        </div>

        <br>
        <h2 style='color: white;'>List Of Books</h2>
        <?php
        if (isset($_POST['submit'])) {
            $q = mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");

            if (mysqli_num_rows($q) == 0) {
                echo "Sorry! No book found. Try searching again.";
            } else {
                echo "<table class='table table-bordered bg-dark ' style='color: white; opacity:0.8; '>";
                echo "<tr >";
                //Table header
                echo "<th>";
                echo "ID";
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
                echo "<th>";
                echo "Genre";
                echo "</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($q)) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row['bid'];
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
                    echo "<td>";
                    echo $row['department'];
                    echo "</td>";

                    echo "</tr>";
                }
                echo "</table>";
            }
        } else {


            $res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

            echo "<table class='table table-bordered bg-dark ' style='color: white; opacity:0.8 ;'>";
            echo "<tr >";
            //Table header
            echo "<th>";
            echo "ID";
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
            echo "<th>";
            echo "Department";
            echo "</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>";
                echo $row['bid'];
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
                echo "<td>";
                echo $row['department'];
                echo "</td>";

                echo "</tr>";
            }
            echo "</table>";
        } ?>

    </section>

</body>

</html>