<?php
include_once 'connection.php';
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $contact = $_POST['contact'];
    $password = $_POST['password'];
    $sql = "INSERT INTO ad_register (firstname, lastname, username, password, contact)
	 VALUES ('$firstname','$lastname','$username', '$password', '$contact')";
    if (mysqli_query($db, $sql)) {
?><strong>New record created successfully !</strong>
        <script type="text/javascript">
            alert("Signup successful! You can Login");
            window.location = "adminlogin.php"
        </script>

<?php


    } else {
        echo "Error: " . $sql . "
" . mysqli_error($db);
    }
    mysqli_close($db);
}
