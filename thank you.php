<?php
 $db = "id21630567_memorymaker";
    $server = "localhost";
    $username = "id21630567_root";
    $pwd = "memoryMaker&28";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Memory Makers</title>
    <link href="images/logo.jpg" rel="icon" type="image/x-icon" >
    <link rel="stylesheet" href="thank you.css">
 
</head>
<body>
    <div >
        <div class="navbar">

            <img src="images/logo.jpg" width="50" height="50" class="logo">
            <i class="fa fa-times"></i>
            <div class="nav-links">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="new services page.html">Services</a></li>
                <li><a href="new about page.html">About Us</a></li>
                <li><a href="new gallary page.html">Gallery</a></li>
                <li><a href="new price page.html">price</a></li>
                <li><a href="new review.html">review</a></li>
                <li><a href="new contact.html">Contact Us</a></li>
                </ul>
        </div>
    </div>
 </div>

<div class="container">
    
    <div class="popup" id="popup">
       <img src="images/check-mark.png">
       <h2>Thank You.</h2>
       <p>"Have a wonderful day!"</p>
       <button id="btn" type="button">OK</button>
        </div>
</div>
<script>
        document.getElementById("btn").addEventListener("click", function () {
            // Redirect to index.html
            window.location.href = "index.html";
        });
    </script>
<footer>
    <div class="footercontainer">
        <div class="socialicons">
            <a href="https://www.whatsapp.com"><img src="images/whatsapp.png" width="32" height="32" alt=""/></a>&nbsp;&nbsp;&nbsp;
				<a href="https://www.facebook.com"><img src="images/facebook.png" width="32" height="32" alt=""/></a>&nbsp;&nbsp;&nbsp;
				<a href="https://www.instegram.com"><img src="images/instagram.png" width="32" height="32" alt=""/></a>&nbsp;&nbsp;&nbsp;
				<a href="https://www.youtube.com"><img src="images/youtube.png" width="32" height="32" alt=""/></a>&nbsp;&nbsp;&nbsp;
				<a href="https:www.nsbm.ac.lk"><img src="images/nsbm.png" width="32" height="32" alt=""/>
                </a>
            </div>
            <div class="footerNav" >
                <ul>
                    <li><a href="index.html">Home</a></li>
                <li><a href="new services page.html">Services</a></li>
                <li><a href="new about page.html">About Us</a></li>
                <li><a href="new gallary page.html">Gallery</a></li>
                <li><a href="new price page.html">price</a></li>
                <li><a href="new review.html">review</a></li>
                <li><a href="new contact.html">Contact Us</a></li>
                    </ul><br><br> &nbsp;&nbsp;&nbsp;
               <center> <p style="color: black;">Copyright @ 2023 All rights reserved</p></center>
            </div>
           
    </div>   
</footer>  