<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book record</title>
</head>

<body style="background-image: url(images/genre.jpg); opacity: 0.9;">
    <?php
    include "navbar_ad.php";
    ?>
    <section>
        <br>

        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                <button style="background-color: black;color:azure ;  float: right;" type="submit" name="submit" class="btn btn-default my-2 my-sm-0">search

                </button>
                <input class="form-control me-sm-2" type="text" name="search" placeholder="search books id.." required="" style="width: 400px; display: inline-block; float: right;">

            </form>
        </div>



        <br>
        <h2 style="color:white;">List Of Books</h2>
        <?php
        if (isset($_POST['submit'])) {
            $q = mysqli_query($db, "SELECT ir.id, ir.book_id, ir.mem_id, b.name, m.username, b.authors,
                 ir.issue_date, ir.due_date, ir.return_date, ir.status, b.quantity  FROM
                  issue_return ir, books b, msignup m WHERE  b.bid=ir.book_id AND m.id= ir.mem_id AND bid= '$_POST[search]' ");

            if (mysqli_num_rows($q) == 0) {
                echo "Sorry! No book found. Try searching again.";
            } else {
                echo "<table  class='table table-bordered bg-dark ' style='color: white; opacity:0.9;'>";
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
                echo "<th>";
                echo "Quantity";
                echo "</th>";

                echo "</tr>";

                while ($row = mysqli_fetch_assoc($q)) {
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
                    echo "<td>";
                    echo $row['quantity'];
                    echo "</td>";


                    echo "</tr>";
                }
                echo "</table>";
            }
        } else {


            $res = mysqli_query($db, "SELECT ir.id, ir.book_id, ir.mem_id, b.name, m.username, b.authors,
                 ir.issue_date, ir.due_date, ir.return_date, ir.status, b.quantity  FROM
                  issue_return ir, books b, msignup m WHERE b.bid=ir.book_id AND m.id= ir.mem_id ");

            echo "<table  class='table table-bordered bg-dark ' style='color: white; opacity:0.9;'>";
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
            echo "<th>";
            echo "Quantity";
            echo "</th>";
            echo "</tr>";

            while ($row = mysqli_fetch_assoc($res)) {
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