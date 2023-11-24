<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="addform_style.css">
    <title>issue form</title>
</head>

<body style="background-image: url(images/issue_return.jpg); opacity: 0.9; ">
    <?php
    include "navbar_ad.php";
    ?>
    <br>
    <form method="post" action="" style=" float: initial;">
        <div class="row">

            <div class="col-3">
                <h4 style="color:black;">Select book</h4> <br>
                <select name="books" style="bg-white rounded-pill px-4 py-3 shadow-sm; background-color: black;color: white; opacity: 0.8; " class="selectpicker w-100">

                    <?php
                    $p = mysqli_query($db, "SELECT bid, name from books ");

                    while ($row = mysqli_fetch_assoc($p)) {
                        echo "<option value='" . $row['bid'] . "'>" . $row['name'] . "</option>";
                    }
                    ?>
                </select> <br><br>
            </div>
            <div class="col-3">
                <h4 style="color: black;">Select member name</h4> <br>
                <select name="member1" style="bg-white rounded-pill px-4 py-3 shadow-sm; background-color: black;color: white; opacity: 0.8; " class="selectpicker w-100">

                    <?php
                    $r = mysqli_query($db, "SELECT firstname from msignup");

                    while ($row = mysqli_fetch_assoc($r)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['firstname'] . "</option>";
                    }
                    ?>
                </select> <br> <br>
            </div>
            <div class="col-3">
                <h4 style="color: black;">Select member email</h4> <br>

                <select name="member" style="bg-white rounded-pill px-4 py-3 shadow-sm; background-color: black;color: white; opacity: 0.8; " class="selectpicker w-100">

                    <?php
                    $q = mysqli_query($db, "SELECT id, username from msignup ");

                    while ($row = mysqli_fetch_assoc($q)) {

                        echo "<option value='" . $row['id'] . "'>" . $row['username'] . "</option>";
                    } ?>

                </select>
            </div>

        </div><br><br>
        <input type="submit" value="Issue" name="submit3" style="background-color: black;color:azure ;margin: 10px; " class="btn btn-large my-2 my-sm-0" />

    </form>


    <?php

    if (isset($_POST['submit3'])) {
        $BID = $_POST['books'];
        $q = mysqli_query($db, "SELECT quantity from books where bid = $BID");
        $r = mysqli_fetch_assoc($q);

        $in = "INSERT INTO issue_return(`mem_id`, `book_id`, `due_date`, `return_date`, `status`) VALUES
         ('$_POST[member]','$_POST[books]', DATE_ADD(CURRENT_DATE, INTERVAL 14 DAY),null,'issued')";

        if ($r['quantity'] > 0) {


            $p = mysqli_query($db, $in);

            $update_quanity = mysqli_query($db, "UPDATE books set quantity = quantity - 1 WHERE bid=$BID");
    ?>
            <script type="text/javascript">
                alert("Book Available.");
                alert("Book Issued Successfully.");
                window.location = "ad_dashboard.php"
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Book Not Available");
            </script>
    <?php
        }
    }
    ?>


    </div>

</body>

</html>