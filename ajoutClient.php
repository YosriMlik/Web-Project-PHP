<?php 
    require_once('pdo.php');

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adress = $_POST['adress'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $res = $pdo->query("SELECT * FROM client WHERE nom_u = '".$username."'");
    if($res != false){
        header("Location: registration.php?msg=Username already exists");
    } else{
        $sql = "INSERT INTO client (nom, nom_u, mot_de_passe, email, tel, adresse) VALUES ('$name', '$username', '$password', '$email', '$phone', '$adress')";
        $pdo->exec($sql);
    
        header("Location: index.php");
    }

?>