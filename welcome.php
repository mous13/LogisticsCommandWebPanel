<?php
        error_reporting(E_ALL);
ini_set('display_errors', 1);
// Initialize the session

session_start();
require_once "config.php";
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
$role = $_SESSION["role"];

if($_SESSION["loggedin"] && $role !== "admin") {
    header("location: auth.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGCOM Web Panel</title>
    <link rel="stylesheet" href="webpanel.css">
    <script src="webpanel.js"></script>


</head>
<body>
<!-- Beginning of the Static Side Bar Navigation-->
<div id="mySidenav" class="sidenav">
    <img src="https://i.imgur.com/H7MlHw6.png" width="150px">
    <h1>Dashboard</h1>
    <hr>
    <span><a href="#"  onclick="showhide('home');" >Home</a></span>
    <span><a href="#"  onclick="showhide('section1');" >Page #1</a></span>
    <span><a href="#"  onclick="showhide('section2');" >Page #2</a></span>
    <span><a href="#"  onclick="showhide('section3');" >Page #3</a></span>
</div>

<!-- End of the Static Side Bar Navigation-->
<div class="container">

    <!-- START OF SECTION 1 -->
    <div class="container_child" id="home">
        <div class="center">
            <h2><u>Home</u></h2>
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            <p>
        </div>
    </div>
    <!-- END OF SECTION 1 -->
    <!-- START OF SECTION 2 -->
    <div class="container_child" id="section1">
        <div class="center">
            <h2><u>Page #1</u></h2>
        </div>
    </div>
    <!-- END OF SECTION 2 -->
    <div class="container_child" id="section2">
        <div class="center">
            <h2><u>Page #2</u></h2>
        </div>
    </div>
    <!-- END OF SECTION 2 -->
</div>
</body>
</html>