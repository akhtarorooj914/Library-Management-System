<?php
include_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add books</title>
    <link rel="stylesheet" type="text/css" href="addform_style.css">
</head>

<body style="background-image: url(images/bukbg.jpg);  ">
    <?php
    include "navbar_ad.php";
    ?>

    <div class="form-body ">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items" style="background-color:black; opacity: 0.8;">
                        <h2 style="color: white;">Add books</h2>

                        <form class="requires-validation" method="post">

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="name" placeholder="Book name" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="authors" placeholder="Authors name" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div> <br>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="edition" placeholder="Edition" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="status" placeholder="Status" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div> <br>
                            <div class="col-md-12">
                                <input class="form-control" type="number" name="quantity" placeholder="Quantity" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="department" placeholder="Genre" required>
                                <div class="valid-feedback">field is valid!</div>
                                <div class="invalid-feedback">field cannot be blank!</div>
                            </div>



                            <div class="form-button mt-3">
                                <button name="submit" id="submit" type="submit" class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px;">Add</button>

                                <button class="btn btn-default my-2 my-sm-0" style="background-color: black;color:azure ;margin: 10px; "> <a href="edit_books.php" style="text-decoration: none; color: white;">Back</a></button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><?php
            if (isset($_POST['submit'])) {

                mysqli_query($db, "INSERT INTO books VALUES ('$_POST[bid]', '$_POST[name]', '$_POST[authors]', '$_POST[edition]', '$_POST[status]', '$_POST[quantity]', '$_POST[department]') ;");
            ?>
        <script type="text/javascript">
            alert("Book Added Successfully.");
            window.location = "edit_books.php"
        </script><?php
                } ?>
</body>

</html>