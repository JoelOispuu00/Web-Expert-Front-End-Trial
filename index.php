<?php session_start(); ?>
<head>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/dist/css/main.css">
    <script type="text/javascript" src="assets/dist/js/vendors/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="assets/dist/js/main.js"></script>
</head>

<div class="container">
    <?php      
        include 'template-parts/users.php'; 
        include 'functions.php';
    ?>
</div>