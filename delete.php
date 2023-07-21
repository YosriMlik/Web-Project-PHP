<?php 
    require_once("pdo.php");
    // Use fetchColumn to Return a single column from the next row of a result set 
    /*$imgname = $pdo->query("SELECT image FROM produit WHERE id = ".$_GET['id'].";")->fetchColumn();
    unlink("images/".$imgname);*/
    $pdo->exec("DELETE FROM produit WHERE id = ".$_GET['id']);
    header("Location: dashboard.php");
?>