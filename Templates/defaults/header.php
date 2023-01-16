<?php
include_once('head.php');
?>

<nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(0,0,0);
background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(255,255,255,1) 100%);">
    <div class="container-fluid">
        <a href="/home">
            <img class="wheel" src="/img/wheel.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="header_btn" class="nav-link text-light" href="/categories">Catogoriën</a>
                </li>
                <li class="nav-item">
                    <a id="header_btn" class="nav-link text-light" href="/huren.php">Huren</a>
                </li>
                <li class="nav-item me-auto">
                    <a id="header_btn2" class="nav-link text-dark" style="margin-left: 1450px" href="/login">Login</a>
                </li>
                <li class="nav-item me-auto">
                    <a id="header_btn2" class="nav-link text-dark" href="/register">Registeer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div><img src="/img/header.jpg" class="w-100" style="height: 150px; object-fit: cover;"></div>
