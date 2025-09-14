<?php
require_once 'anti-clone.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?php echo $pageTitle ?? 'GAB & GAB Integrated Concept Ltd'; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body oncopy="return false" oncut="return false" onpaste="return false">
    <header>
        <nav class="container">
            <div class="logo">
                <a href="index.php">GAB & GAB</a>
            </div>
            <button class="mobile-toggle">☰</button>
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>