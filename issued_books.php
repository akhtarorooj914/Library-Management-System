<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Issued</title>
</head>

<body style="background-image: url(images/issued.jpg); opacity: 0.9;">
    <?php
    include "navbar_mem.php";
    ?>
    <section>
        <br>





        <br>
        <h2 style="color: white;">List Of Books</h2>
        <?php

        $member_id = $_SESSION['login_member'];
        $sql = "SELECT ir.id, ir.book_id, ir.mem_id, b.name, m.username, b.authors,
                 ir.issue_date, ir.due_date, ir.return_date, ir.status, b.quantity  FROM
                  issue_return ir, books b, msignup m WHERE ir.mem_id=$_SESSION[login_member] AND ir.status like '%issued%'AND b.bid=ir.book_id AND m.id= ir.mem_id";

        $res1 = mysqli_query($db, $sql);

        if (mysqli_num_rows($res1) == 0) {
            echo "Sorry! No book found. Try searching again.";
        } else {

            echo "<table  class='table table-bordered bg-dark ' style='color: white; '>";
            echo "<tr >";
            //Table header
            echo "<th>";
            echo "ID";
            echo "</th>";
            echo "<th>";
            echo "Book ID";
            echo "</th>";
            echo "<th>";
            echo "Member ID";
            echo "</th>";
            echo "<th>";
            echo "Book-Name";
            echo "</th>";
            echo "<th>";
            echo "Member User Name";
            echo "</th>";
            echo "<th>";
            echo "Authors Name";
            echo "</th>";
            echo "<th>";
            echo "Issue date";
            echo "</th>";
            echo "<th>";
            echo "Due date";
            echo "</th>";
            echo "<th>";
            echo "Return date";
            echo "</th>";
            echo "<th>";
            echo "Status";
            echo "</th>";

            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res1)) {
                echo "<tr>";
                echo "<td>";
                echo $row['id'];
                echo "</td>";
                echo "<td>";
                echo $row['book_id'];
                echo "</td>";
                echo "<td>";
                echo $row['mem_id'];
                echo "</td>";
                echo "<td>";
                echo $row['name'];
                echo "</td>";
                echo "<td>";
                echo $row['username'];
                echo "</td>";
                echo "<td>";
                echo $row['authors'];
                echo "</td>";
                echo "<td>";
                echo $row['issue_date'];
                echo "</td>";
                echo "<td>";
                echo $row['due_date'];
                echo "</td>";
                echo "<td>";
                echo $row['return_date'];
                echo "</td>";
                echo "<td>";
                echo $row['status'];
                echo "</td>";



                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </section>





</body>

</html>