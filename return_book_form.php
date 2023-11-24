<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>return book form</title>

    <link rel="stylesheet" type="text/css" href="addform_style.css">
</head>

<body style="background-image: url(images/issue_return.jpg); opacity: 0.9; ">
    <?php

    include "navbar_ad.php";

    ?>
    <br>
    <form method="post" action="">
        <div class="row">
            <div class="col-3">
                <h4>select book</h4>
                <select name="book" style="bg-white rounded-pill px-4 py-3 shadow-sm; background-color: black;color: white; opacity: 0.8; " class="selectpicker w-100">

                    <?php
                    $p = mysqli_query($db, "SELECT bid, name from books ");

                    while ($row = mysqli_fetch_assoc($p)) {
                        echo "<option value='" . $row['bid'] . "'>" . $row['name'] . "</option>";
                    }
                    ?>
                </select><br> <br>
            </div>
            <div class="col-3">
                <h4 style="color: black;">Select member name</h4>
                <select name="member1" style="bg-white rounded-pill px-4 py-3 shadow-sm; background-color: black;color: white; opacity: 0.8; " class="selectpicker w-100">

                    <?php
                    $r1 = mysqli_query($db, "SELECT firstname from msignup");

                    while ($row = mysqli_fetch_assoc($r1)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['firstname'] . "</option>";
                    }
                    ?>
                </select> <br> <br>
            </div>
            <div class="col-3">
                <h4>select username</h4>

                <select name="member" style="bg-white rounded-pill px-4 py-3 shadow-sm; background-color: black;color: white; opacity: 0.8; " class="selectpicker w-100">

                    <?php
                    $q = mysqli_query($db, "SELECT id, username from msignup ");

                    while ($row = mysqli_fetch_assoc($q)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['username'] . "</option>";
                    } ?>

                </select><br> <br>
            </div>

        </div><br><br>
        <input type="submit" value="return" name="submit1" style="background-color: black;color:azure ; margin:10px;" class="btn btn-default my-2 my-sm-0" />

    </form><?php
            if (isset($_POST['submit1'])) {
                $BID = $_POST['book'];
                $q = mysqli_query($db, "SELECT quantity from books where bid = $BID");
                $r = mysqli_fetch_assoc($q);


                $p = mysqli_query($db, "SELECT * FROM `issue_return` where mem_id= $_POST[member] AND book_id= $_POST[book]");

                $n = mysqli_num_rows($p);
                if ($n == 0) {
                    echo "Sorry! No  record found. Try searching again.";
                } else {
                    while ($row = mysqli_fetch_assoc($p)) {
                        $update_quanity = mysqli_query($db, "UPDATE books set quantity = quantity + 1 WHERE bid=$BID");
                        $s = mysqli_query($db, "UPDATE issue_return SET return_date = CURRENT_TIMESTAMP, 
                    status= 'returned' where id= '$row[id]' ");

            ?>

                <script type="text/javascript">
                    alert("Book returned Successfully.");
                    window.location = "ad_dashboard.php"
                </script>
    <?php
                    }
                }
            }


    ?>

</body>

</html>