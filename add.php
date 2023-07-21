<?php 
    require_once("pdo.php");

    $name = $_POST['name'];
    $cathegory = $_POST['cathegory'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $photo = $_FILES['photo']['name'];
    $ficherTemp = $_FILES['photo']['tmp_name'];
    move_uploaded_file($ficherTemp, "images/".$photo);

    $sql = "INSERT INTO produit(nom, cathegorie, description, prix, quantite, image) VALUES ('$name', '$cathegory', '$description', '$price', '$quantity', '$photo')";
    $pdo->exec($sql);

    header("Location: dashboard.php");
?>