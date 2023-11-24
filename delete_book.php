<?php
include_once "connection.php";
include "navbar_ad.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete book</title>
</head>

<body style="background-image: url(images/bukbg.jpg);">


    <br>


    <div class="srch">
        <br>


        <form class="navbar-form" method="post" name="form1">

            <input class="form-control me-sm-0" type="text" name="search" placeholder="search books" required="" style="width: 300px; display: inline-block;">

            <button style="background-color: black;color:azure ;  " type="submit" name="submit" class="btn btn-default my-2 my-sm-0">search
            </button>
            <button class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px; "> <a href="edit_books.php" style="text-decoration: none; color: white;">Back</a></button>


        </form>
    </div>

    <h2 style="color: white;">List of books</h2>
    </div> <br>



    <?php

    if (isset($_POST['submit'])) {
        $q = mysqli_query($db, "SELECT * from books where name like '%$_POST[search]%' ");

        if (mysqli_num_rows($q) == 0) {
            echo "Sorry! No book found. Try searching again.";
        } else {
            echo "<table class='table table-bordered bg-dark ' style='color: white; opacity:0.8;' >";
            echo "<tr style='color: white'>";
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
            echo "<th>";
            echo "Delete book";
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
                echo "<td>";
                echo '<form method="post" action="delete_book.php">';
                echo "<input type='hidden' name='bid' value='" . $row['bid'] . "' />";
                echo '<input type="submit" value="delete" style="background-color: black;color:azure ; margin: 30px;" name="submit2" class="btn btn-default my-2 my-sm-0" />';
                echo '</form>';


                echo "</tr>";
            }
            echo "</table>";
        }
    }

    /*if button is not pressed.*/ else {
        $res = mysqli_query($db, "SELECT * FROM `books` ORDER BY `books`.`name` ASC;");

        echo "<table class='table table-bordered bg-dark ' style='color: white; opacity:0.8;'  >";
        echo "<tr style=' color: white;'>";
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
        echo "<th>";
        echo "Delete book";
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
            echo "<td>";
            echo '<form method="post" action="delete_book.php">';
            echo "<input type='hidden' name='bid' value='" . $row['bid'] . "' />";
            echo '<input type="submit" value="delete" style="background-color: black;color:azure ; margin: 30px;" name="submit1" class="btn btn-default my-2 my-sm-0" />';
            echo '</form>';

            echo "</tr>";
        }
        echo "</table>";
    }

    if (isset($_POST['submit1'])) {
        $bid = $_POST['bid'];
        mysqli_query($db, "DELETE FROM `books` WHERE `books`.`bid` = $bid");
    ?>
        <script type="text/javascript">
            alert("Book deleted Successfully.");
            window.location = "edit_books.php"
        </script><?php
                }

                if (isset($_POST['submit2'])) {
                    $bid = $_POST['bid'];
                    mysqli_query($db, "DELETE FROM `books` WHERE `books`.`bid` = $bid");
                    ?>
        <script type="text/javascript">
            alert("Book deleted Successfully.");
            window.location = "edit_books.php"
        </script>
    <?php
                }
    ?>

</body>

</html>