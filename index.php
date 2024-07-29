<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message']) {
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message'); </script>";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <title> Student Mangement System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="background1.jpg" class="body_deg">
    <nav>
        <label class="logo">Engineering College</label>
        <ul>
            <li> <a href="">Home</a></li>
            <li> <a href="">Contact</a></li>
            <li> <a href="">Admission</a></li>
            <li> <a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <label class="first_text"> We dont guarantee placements, We assure you jobs </label>
        <img class="main_str" src="first.jpg">
    </div>
    <div class="container">
        <div class="'row">
            <div class="col-md-4">
                <img class="campus_img" src="campus.jpg">
            </div>
            <div class="col-md-8">
                <h1> Welcome to Engineering College</h1>
                <p> Engineering College was established in 1998. Now, ours is one of the premier Engineering Colleges in the self-financing category .  </p>
            </div>
        </div>
    </div>

    <centre>
        <h1>Staff</h1>
    </centre>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="teacher" src="teacher1.png">
                    <p> <h3>Machine Learning</h3></p>
                </div>
                <div class="col-md-4">
                    <img class="teacher" src="teacher2.jpg">
                    <p> <h3>Artifical Intelligence</h3></p>
                </div>
                <div class="col-md-4">
                    <img class="teacher" src="teacher3.jpg">
                    <p> <h3>Engineering Graphics</h3></p>
                </div>
            </div>
        </div>
     <centre>
        <h1> Courses</h1>
    </centre>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="course1.png">
                <h3>Web development</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="course2.jpg">
                <h3>Artificial Intelligence</h3>
            </div>
            <div class="col-md-4">
                <img class="teacher" src="course3.jpg">
                <h3> Marketing</h3>
            </div>
        </div>
    </div>
    <centre>
        <h1> Enroll Now</h1>
    </centre>
    <div align="centre" class="enroll_now">
        <form action="data_check.php" method="POST">
            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>
            <div  class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>
            <div  class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>
            <div  class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_text" name="message"></textarea>
            </div>
            <div  class="adm_int"></div>
                <input class="btn btn-primary" id="submit" type="Submit" value="Enroll" name="enroll">
            </div>
        </form>
    </div>
    <footer>
        <h4 class="footer_text"> All @copyRight reserved by Engineering College</h4>
    </footer>
</body>
</html>