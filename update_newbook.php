<?php
include "navbar_ad.php";

?>
<!DOCTYPE html>
<html>

<head>
    <title>edit profile</title>
    <style type="text/css">
        .form1 {
            margin: 0 540px;
        }
    </style>
</head>

<body style=" background-image: url(images/bggg.jpg);">

    <?php

    $bid = $_GET['bid'];
    /* $sql = "SELECT * FROM admin WHERE username='$_SESSION[login_user]'";
    $result = mysqli_query($db, $sql) or die(mysql_error());*/
    $sql = "SELECT * from books where bid=$bid";
    $result = mysqli_query($db, $sql);
    if ($row = mysqli_fetch_assoc($result)) {


        //if (isset($_POST['submit'])) {
        $bid = $row['bid'];
        $name =
            $row['name'];
        $authors =
            $row['authors'];
        $edition =
            $row['edition'];
        $status = $row['status'];
        $quantity = $row['quantity'];
        $department = $row['department'];
    }
    // }
    ?>


    <div class="form-body">
        <h2 style="text-align: center; color:black;">Update books</h2>

        <div class="row">

            <form method='post' action='update_newbook.php'>
                <div class="form1">

                    <label>
                        <h4><b>Book ID: </b></h4>
                    </label>
                    <input class="form-control" type="text" name="bid" value="<?php echo $bid; ?>">

                    <label>
                        <h4><b>Book Name</b></h4>
                    </label>
                    <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">

                    <label>
                        <h4><b>Authors</b></h4>
                    </label>
                    <input class="form-control" type="text" name="authors" value="<?php echo $authors; ?>">

                    <label>
                        <h4><b>Edition</b></h4>
                    </label>
                    <input class="form-control" type="text" name="edition" value="<?php echo $edition; ?>">

                    <label>
                        <h4><b>Status</b></h4>
                    </label>
                    <input class="form-control" type="text" name="status" value="<?php echo $status; ?>">

                    <label>
                        <h4><b>Quantity</b></h4>
                    </label>
                    <input class="form-control" type="text" name="quantity" value="<?php echo $quantity; ?>">
                    <label>
                        <h4><b>Department</b></h4>
                    </label>
                    <input class="form-control" type="text" name="department" value="<?php echo $department; ?>">

                    <br>
                    <div style="padding-left: 100px;">
                        <button class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px; " type="submit" name="submit">save</button>
                    </div>

                </div>

            </form>
        </div>
    </div>

    <?php

    if (isset($_POST['submit'])) {

        $bid = $_POST['bid'];
        $name = $_POST['name'];
        $authors = $_POST['authors'];
        $edition = $_POST['edition'];
        $status = $_POST['status'];
        $quantity = $_POST['quantity'];
        $department = $_POST['department'];

        $sql1 = "UPDATE books SET name='$name', authors='$authors', edition='$edition', 
        status='$status', quantity='$quantity', department='$department' WHERE `books` . `bid` = $bid ";

        if (mysqli_query($db, $sql1)) {
    ?>
            <script type="text/javascript">
                alert("Saved Successfully.");
                window.location = "update_book.php";
            </script>
    <?php
        }
    }
    ?>
</body>

</html>