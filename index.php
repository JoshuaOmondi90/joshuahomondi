<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="-y1KXkxsAzFscGnxsJ9lIz1rV3DdnTByMyAL9zucYSQ" />
    <meta content="Joshua Omondi - The Best Web Developer in Nairobi. Expert in delivering high-quality, SEO-friendly, user-centered, and scalable websites. Contact Josh for a superior web development experience." name="description">
    <meta content="Discover the top developer in Nairobi: Developer Josh, Looking for the best web developer in Kenya? Josh is your top choice" name="keywords">
    <meta content="Josh" name="author">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet" crossorigin="anonymous" integrity="sha512-cn16Qw8mzTBKpu08X0fwhTSv02kK/FojjNLz0bwp2xJ4H+yalwzXKFw/5cLzuBZCxGWIA+95X4skzvo8STNtSg==" referrerpolicy="no-referrer">
    <link href="style.css" rel="stylesheet">
    <title>Josh | Software Developer</title>
</head>
<body>
    <style>
        #loader {
            background: #000 url("") no-repeat center;
            background-size: 50%;
            width: 100%;
            height: 100vh;
            position: fixed;
            z-index: 10000;
        }
    </style>
    <div id="loader"></div>
    <script>
        window.addEventListener('load', function(){
            let x= document.getElementById('loader');
            x.style.display='none';
        })
    </script>
    <header>
        <a href="#" class="logo">Joshua <span>Omondi</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="bx bx-moon" id="darkmode"></div>
    </header>
    <section class="home" id="home">
        <div class="social">
            <a href="https://github.com/JoshuaOmondi90"><i class="bx bxl-github"></i></a>
            <a href="https://instagram.com/joshuah_official"><i class="bx b
