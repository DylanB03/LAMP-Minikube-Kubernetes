<?php
// set vars
session_start();
// if appropriate session variables arent set, send the user back to the home page
if(!isset($_SESSION['userID']) || !isset($_SESSION['classID']) || !isset($_SESSION['className']) || !isset($_SESSION['classCode'])){
  header("Location:../index.php");
  die();
}
$studentID=$_SESSION['userID'];
$classID=$_SESSION['classID'];
$className=$_SESSION['className'];
$classCode=$_SESSION['classCode'];

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- default make stuff -->
    <meta charset = "utf-8">
    <title>Progress Check Website</title>
    <link rel ="icon" href="../img/logo.png"/>
    <link rel ="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="ht../tps://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <script src = "../js/script.js"></script>
</head> 

<body>

<div class="nav-bar" style="font-size: 30px">
      <div class = "nav-container">
            
      <img src="../img/logo.png" 
        width = "40"
        height = "40"
        alt = "logo"  
        id="logo"
        style="border: 1px solid black">
        
        <div class ="stuff">
           <!-- nav bar, hyper links to other pages. color and text decoration removes the default blue underline for hlinks  -->
            <a href="../index.php"style="color: black; text-decoration:none">Home</a>
            <a href="../class/dashboard.php"style="color: black; text-decoration:none" id="dash">Dashboard</a>
            <a href="../login/logoutPage.php"style="color: black; text-decoration:none"id="lO">Log Out</a>
        </div>
</div>
     </div>
<!-- big text + home button -->
     <div class = "myDashboard">
        <b>Create Assignment</b>
</div>
<div class = "homeButton">
  <button onclick="location.href='../class/classPageRedirect.php';" style ="border:0;background:transparent;float:right;margin-top:5px">
  <img src ="../img/home.png" style="height:50px;width:50px;border-radius:25px;overflow:hidden"></button>
</div>

<!-- form to accept assignment create -->
     <div class = "enterInfo" style="margin-top:15%;">
<!-- collect user input -->
    <form class = "createAssignmentInput" action="../class/createAssignmentHandler.php" id = "createForm" method ="post">

        <input class = "text-field" type="text" id ="taskName" name = "taskName" placeholder="Task Name" required>
        <input class = "text-field" type="text" id = "description" name="description" placeholder="Task Descrition" style= "padding:50px;padding-left:20px;padding-top:15px;">
        <input class = "button" type="submit" value="Create Asssignment">
</div>
</div>