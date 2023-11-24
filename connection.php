<?php

$db = mysqli_connect("localhost", "root", "", "lms");
/*servername, root, password,database */

if (!$db) {
    die("connection failed: " . mysqli_connect_error());
}

echo "connected successfully";
