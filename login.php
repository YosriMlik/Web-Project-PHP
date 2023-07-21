<?php
    require_once('pdo.php');
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM client WHERE(nom_u = '$username' AND mot_de_passe = '$password');";
    $id = $pdo->query($sql)->fetchColumn();

    $sql2 = "SELECT id FROM admin WHERE(nom_u = '$username' AND mot_de_passe = '$password');";
    $id2 = $pdo->query($sql2)->fetchColumn();

    /*echo" value :".$id.", type of id = ".gettype($id)."    <br>  ";

    echo" value :".$id2.", type of id2 = ".gettype($id2)."  <br>";  */
    if($id2 > 0 and $id == false) {        
        $_SESSION["connected"] = $id2;
        header("Location: dashboard.php");
    } else if($id > 0 and $id2 == false){        
        $_SESSION["connected"] = $id;
        header("Location: index.php");
    } else{
        $msg = "Nom d'utilisateur ou mot de passe incorrecte";
        header("Location: loginForm.php?msg=".$msg);  
    }
  
    
?>