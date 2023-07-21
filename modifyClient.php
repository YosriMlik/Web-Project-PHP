<?php 
    session_start();
    require_once('pdo.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE client SET nom='".$name."', nom_u='".$username."', mot_de_passe='".$password."', email='".$email."', tel='".$phone."', adresse='".$adress."'
            WHERE id='".$_SESSION['connected']."';";
    $pdo->exec($sql) ;

    header("Location: index.php");
?>