<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Products</title>
    <style>
        img{
            width: 145px;
            height: 150px;
        }
        a{
            text-decoration: none;
            color: #fff;
        }
        a:hover{
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>
<body>
<?php 
    require_once("header.php");
    require_once("pdo.php");
    $gaming_laptops = $pdo->query("SELECT * FROM produit WHERE cathegorie = 'Gaming Laptop'");
    $gaming_pcs = $pdo->query("SELECT * FROM produit WHERE cathegorie = 'Gaming PC'");
    $workstation_laptops = $pdo->query("SELECT * FROM produit WHERE cathegorie = 'Workstation Laptop'");
    $workstation_pcs = $pdo->query("SELECT * FROM produit WHERE cathegorie = 'Workstation PC'");
?>  
<div class="row gx-0 solde-bar w-100 py-1">
    <div class="col-8">
        <h2 class="mb-0 promos">
            Gaming Laptop
        </h2>
    </div>
    <div class="col-4 align-self-center text-end">
        <a href="#" class="btn rounded-pill border voir-plus">
            Plus <i class="bi bi-caret-right-fill"></i>
        </a>
    </div>
</div>
            
<div class="row justify-content-center gy-2 gx-0 mt-4">
    <?php
    foreach($gaming_laptops as $prod){
        require("productCard.php");
    } ?>
</div>


<br><br><br>
<div class="row gx-0 solde-bar w-100 py-1">
    <div class="col-8">
        <h2 class="mb-0 promos">
            Gaming PC
        </h2>
    </div>
    <div class="col-4 align-self-center text-end">
        <a href="#" class="btn rounded-pill border voir-plus">
            Plus <i class="bi bi-caret-right-fill"></i>
        </a>
    </div>
</div>
            
<div class="row justify-content-center gy-2 gx-0 mt-4">
    <?php
    foreach($gaming_pcs as $prod){
        require("productCard.php");
        
    } ?>
</div>


<br><br><br>
<div class="row gx-0 solde-bar w-100 py-1">
    <div class="col-8">
        <h2 class="mb-0 promos">
            Workstation Laptop
        </h2>
    </div>
    <div class="col-4 align-self-center text-end">
        <a href="#" class="btn rounded-pill border voir-plus">
            Plus <i class="bi bi-caret-right-fill"></i>
        </a>
    </div>
</div>
            
<div class="row justify-content-center gy-2 gx-0 mt-4">
    <?php
    foreach($workstation_laptops as $prod){
        require("productCard.php");
    } ?>
</div>


<br><br><br>
<div class="row gx-0 solde-bar w-100 py-1">
    <div class="col-8">
        <h2 class="mb-0 promos">
            Workstation PC
        </h2>
    </div>
    <div class="col-4 align-self-center text-end">
        <a href="#" class="btn rounded-pill border voir-plus">
            Plus <i class="bi bi-caret-right-fill"></i>
        </a>
    </div>
</div>
<div class="row justify-content-center gy-2 gx-0 mt-4">
    <?php
    foreach($workstation_pcs as $prod){
        require("productCard.php");
    } ?>
</div>
<br> <br>
<?php require_once('footer.php'); ?>
</body>
</html>