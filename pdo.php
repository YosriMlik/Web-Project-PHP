<?php
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=projet web 2', 'root','');
    } catch(PDOExeption $e){
        print "Erreur à la connection au base ".$e->getMessage();
    }
?>