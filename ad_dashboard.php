<?php
include_once "connection.php";

if (isset($_SESSION['login_admin'])) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ad_dashboard.css">
    <link rel="stylesheet" type="text/css" href="dashboard_style.css">

    <link rel="stylesheet" type="text/css" href="addform_style.css">
    <style>
    </style>

</head>

<body>
    <?php
    include "navbar_ad.php";


    ?>

    <div class=" home">

        <div class="container-fluid display-table">

            <div class="row display-table-row">

                <div class="col-md-2 col-sm-1 " style="background-color:  rgb(31, 30, 29);" ; id="navigation1">

                    <div class="navi">
                        <ul>
                            <li><a href="index.php"><span>Home</span></a></li>
                            <!-- <li><a href="ad_books.php"><span class="hidden-xs hidden-sm">Total Books</span></a></li> -->
                            <li><a href="member.php"><span class="hidden-xs hidden-sm">Total Members</span></a></li>
                            <li><a href="issued_books1.php"><span class="hidden-xs hidden-sm">Issued books</span></a></li>
                            <li><a href="returned_books.php"><span class="hidden-xs hidden-sm">Returned books</span></a></li>

                            <li><a href="genres_ad.php"><span class="hidden-xs hidden-sm">Genres</span></a></li>
                        </ul>
                    </div>
                </div>

                <!--
                <div class="col-md-10 col-sm-11 display-table-cell v-align">
                    <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <!--               <div class="row">
                        <div class="user-dashboard">
                            <h1>Hello, <?php echo $_SESSION['login_admin']; ?> </h1>
                            <div class="row">
                                <div class="container bootstrap snippets bootdey ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- START widget-->

                <!--                             <div class="panel widget">
                                                <div class="panel-body bg-primary text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                                    </svg>
                                                    <br> <br>
                                                    <h4 class="mt0">
                                                        <li><a href="edit_books.php" style="color:white; text-decoration:none; float: center;">Edit Books</a></li>
                                                    </h4><br>


                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                    <!-- END widget-->
                <!--                       </div>
                                <div class="col-md-4">
                                    <!-- START widget-->
                <!--                            <div class="panel widget">
                                        <div class="panel-body bg-primary text-center">

                                            <br>
                                            <h4 class="mt0">
                                                <li><a href="edit_books.php" style="color:white; text-decoration:none; float: center;">Edit Books</a></li>
                                            </h4><br>


                                        </div>
                                    </div>
                                    <!-- END widget-->
                <!--                       </div>


                                <div class="col-md-4">
                                    <div class="panel widget">
                                        <div class="panel-body bg-info text-center">

                                            <img src="https://bootdey.com/img/Content/user_2.jpg" alt="Image" class="img-thumbnail img-circle thumb96">
                                            <h4 class="mt0">Margareth Danky</h4>
                                            <p class="m0">
                                                <em class="fa fa-fw fa-map-marker"></em>San Francisco, California
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <!-- START widget-->
                <!--           <div class="panel widget">
                                    <div class="panel-body bg-info text-center">

                                        <img src="https://bootdey.com/img/Content/user_2.jpg" alt="Image" class="img-thumbnail img-circle thumb96">
                                        <h4 class="mt0">Margareth Danky</h4>
                                        <p class="m0">
                                            <em class="fa fa-fw fa-map-marker"></em>San Francisco, California
                                        </p>

                                    </div>
                                </div>
                                <!-- END widget-->
                <!--                    </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
        </div>
-->

                <div class="col-md-10 col-sm-11 display-table-cell v-align" style="background-image: url(images/dashhh.jpg); height:810px;">
                    <div class="one">

                        <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                        <div class="row">

                            <div class="user-dashboard">
                                <h1>Hello Admin </h1>
                                <div class="row">
                                    <div class="container bootstrap snippets bootdey ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <div class="panel-body bg-dark text-center" style="opacity: .7;">
                                                        <br>
                                                        <li>
                                                            <a href="edit_books.php" style="color:white; text-decoration:none; float: center;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-book-half" viewBox="0 0 16 16">
                                                                    <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                                                </svg>
                                                                <!--<img src="https://bootdey.com/img/Content/user_3.jpg" alt="Image" class="img-thumbnail img-circle thumb96">-->
                                                                <h4 class="mt0">
                                                                    Books
                                                            </a>
                                                        </li>
                                                        </h4>
                                                        <p class="m0" style="color:white; text-decoration:none; float: center;">Add Update Delete <br> <br>
                                                        </p>


                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-md-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <div class="panel-body bg-dark text-center" style="opacity: .7;">
                                                        <br>
                                                        <li>
                                                            <a href="issuebook_form.php" style="color:white; text-decoration:none; float: center;">
                                                                <svg xmlns=" http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-journal-arrow-down" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 5a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5A.5.5 0 0 1 8 5z" />
                                                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                                </svg> <br> <br>
                                                                <!-- <img src="https://bootdey.com/img/Content/user_1.jpg" alt="Image" class="img-thumbnail img-circle thumb96"> -->
                                                                <h4 class="mt0">
                                                                    Issue Book
                                                            </a>
                                                        </li>
                                                        </h4> <br>
                                                        <p class="m0">

                                                        </p>

                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>


                                            <div class="col-md-4">
                                                <div class="panel widget">
                                                    <div class="panel-body bg-dark text-center" style="opacity: .7;">
                                                        <br>
                                                        <li>
                                                            <a href="return_book_form.php" style="color:white; text-decoration:none; float: center;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-journal-arrow-up" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M8 11a.5.5 0 0 0 .5-.5V6.707l1.146 1.147a.5.5 0 0 0 .708-.708l-2-2a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L7.5 6.707V10.5a.5.5 0 0 0 .5.5z" />
                                                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                                </svg> <br> <br>
                                                                <!-- <img src="https://bootdey.com/img/Content/user_2.jpg" alt="Image" class="img-thumbnail img-circle thumb96">-->
                                                                <h4 class="mt0">
                                                                    Return Book
                                                            </a>
                                                        </li>
                                                        </h4><br>
                                                        <p class="m0">

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <!-- START widget-->
                                                <div class="panel widget">
                                                    <div class="panel-body bg-dark text-center" style="opacity: .7;">
                                                        <br>
                                                        <li>
                                                            <a href="edit_member.php" style="color:white; text-decoration:none; float: center;">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                                                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                                                    <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z" />
                                                                    <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z" />
                                                                </svg>
                                                                <!--<img src="https://bootdey.com/img/Content/user_2.jpg" alt="Image" class="img-thumbnail img-circle thumb96">-->
                                                                <br><br>
                                                                <h4 class="mt0">
                                                                    Members
                                                            </a>

                                                            </h4>

                                                            <p class="m0" style="color:white; text-decoration:none; float: center;"> Add Update Delete

                                                            </p>
                                                        </li>
                                                    </div>
                                                </div>
                                                <!-- END widget-->
                                            </div>
                                            <div class="col-md-4">
                                                <div class="panel widget">
                                                    <div class="panel-body bg-dark text-center" style="opacity: .7;">
                                                        <br>
                                                        <li>
                                                            <a href="book_record.php" style="color:white; text-decoration:none; float: center;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="white" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                                                                    <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                                                                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                                </svg>
                                                                <!--<img src="https://bootdey.com/img/Content/user_2.jpg" alt="Image" class="img-thumbnail img-circle thumb96">-->
                                                                <br><br>
                                                                <h4 class="mt0">
                                                                    Books Record
                                                            </a>
                                                        </li>
                                                        </h4>

                                                        <p class="m0" style="color:white; text-decoration:none; float: center;">books issued/ returned

                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-4">



                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>






    </div>

    </div>


</body>

</html>