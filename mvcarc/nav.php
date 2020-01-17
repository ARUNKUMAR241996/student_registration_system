<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>NavBar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- partial:index.partial.html -->
<div>
<nav class="nav">
        <div class="container">
            <div class="logo">
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="#">About</a></li>
                    <li><a href="views/registration.php">Registration</a></li>
                    <li><a href="views/slogin.php">Login</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    </div>
    <br><br><br><br><br>
    

<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
<!-- partial -->
  <script  src="./script.js"></script>

