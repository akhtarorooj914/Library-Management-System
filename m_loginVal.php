<?php

include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT * FROM msignup WHERE username='$myusername' and passcode='$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if ($count == 1) {

        $_SESSION['login_member'] = $myusername;

        header("location: mem_dashboard.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}

/*
<?php


if (isset($_POST['login'])) {
    session_start();
    $count = 0;
    $query = "SELECT * FROM 'msignup' WHERE username = '$_POST[username]' && password = '$_POST[password];
    $result = mysqli_query($db, $query);
    $count = mysqli_num_rows($result);
  

if($count>0)
{
    $_SESSION[username]= $_POST[username];
    $_SESSION[id]= $_POST[id];

header(Location:index.php);
 exit();
}
 else
{
  
            header(Location: index.php?error=Incorect User name or password);

            exit();

}
  else
{
    header(Location: index.php);

    exit();
}
   } 

?>
*/
