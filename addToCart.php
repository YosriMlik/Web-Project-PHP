<?php
    require_once("pdo.php");
    session_start();
    if(isset($_SESSION['connected'])){
        $pdo->exec("INSERT INTO panier (id_client, id_produit) VALUES ('".$_SESSION["connected"]."', '".$_GET["id"]."')");
        header("Location: cart.php");
    } else{
        header("Location: loginForm.php?msg=Connect first");
    }
?>