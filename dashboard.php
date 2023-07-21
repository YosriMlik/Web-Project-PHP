<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Dashboard</title>
    <style>
        img{
            width: 147px;
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
    $req = "SELECT * FROM produit";
    $res = $pdo->query($req);
?>    
    <div class="container">
        <div class="d-flex flex-row justify-content-between mt-5 mb-4">
            <div class="">
                <h1 class="my-4" style="display: inline;">Products List</h1>
            </div>
            <div class=" align-self-right">
                <button class="btn btn-success mt-2"><a href="addProduct.php"> + Add</a></button>
            </div>
        </div>   
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Cathgory</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col" style="padding-left: 15px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    foreach($res as $row) {
                        echo "<tr><th scope='row'>$row[0]</th>";
                        echo "<td><img src='images/$row[6]' alt='photo'> </td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[5]</td>";
                        echo "<td style=''><a href ='editProduct.php?id=$row[0]' style='background-color: #2496dd; border: none; border-radius: 20px; padding: 4px 15px 6px 15px; margin-right: 15px; text-decoration: none; color: #000;'>Edit</a>";
                        echo "<a href='delete.php?id=$row[0]' style='background-color: #ff0000bf; border: none; border-radius: 20px; padding: 4px 15px 6px 15px; text-decoration: none; color: #000;'>Delete</a></td></tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
    </div>
    <?php require_once('footer.php'); ?>
</body>
</html>