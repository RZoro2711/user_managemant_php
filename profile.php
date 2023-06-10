<?php
    // session_start();
    include("vendor/autoload.php");
    use Helpers\Auth;
    $user = Auth::check();


    if(!isset($_SESSION["user"])){
        header('location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
    <style>
        body{
            /* width:40%; */
            margin:auto;
            box-shadow:1px 1px 9px blue;
            /* padding:10px; */
        }
    </style>
</head>
<body>
<div class="navbar navbar-dark navbar-expands bg-primary">
        <div class="container ">
            <a href="#" class="navbar-brand">Admin</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="admin.php" class="btn btn-outline-light nav-link">User Management</a></li>
                <li class="nav-item"><a href="_actions/logout.php" class="btn btn-outline-light nav-link">Log out</a></li>
            </ul>
        </div>
    </div>
    <div class="container mt-5">
        <h1 class="mb-3 mt-3">Nico Robin (Straw Hat Pirate)</h1>
        <?php if(isset($_GET["error"])) : ?>
            <div class="alert alert-warning">
                Cannot Uplode file 
            </div>
        <?php endif ?>

        <?php if(file_exists("_actions/photos/profile.jpg")) : ?>
            <img src="_actions/photos/profile.jpg" alt="Profile Photo" width="200px" class="rounded-circle">
        <?php endif ?>

        <form action="_actions/upload.php" method="post" enctype="multipart/form-data">
            <div class="input-group mb-3 mt-3">
                <input type="file" name="photo" id="" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> robin@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b>(09) 243 867 645
            </li>
            <li class="list-group-item">
                <b>Address:</b> Thousand Sunny
            </li>
        </ul>
        <br>
        <a href="_actions/logout.php" class="btn btn-primary mb-3">Log Out</a>
        <a href="admin.php" class="btn btn-primary mb-3">User Manage</a>
    </div>
</body>
</html>