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

    $sql = "UPDATE produit SET nom='".$name."', cathegorie='".$cathegory."', description='".$description."', prix=".$price.", quantite=".$quantity.", image='".$photo."' WHERE id = ".$_GET['id'];
    $pdo->exec($sql);

    header("Location: dashboard.php");
?>