<?php 
    require_once("pdo.php");
    $prod = $pdo->query("SELECT * FROM produit WHERE id = ".$_GET["id"])->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Details</title>
</head>
<body>
<?php require_once("header.php"); ?>
    <div class="container">
        <br>
        <div>
            <h3><?php echo "".$prod[1] ?></h3>
        </div>

        <div class="row justify-content-start">
            <div class="col-auto">
                <img src="images/<?php echo "".$prod[6] ?>" class="me-3 mb-4" width="380px" height="350px"/>
            </div>

            <div class="col-md">
                <div class="row">
                    <div class="col-md-4">
                        <p style="font-size: 1.5rem;">
                            <span class="fw-bold">Price : <?php echo "".$prod[4] ?> DT</span>
                        </p>
                    </div>
                    <div class="col-md-8">
                        <div class="row justify-content-end gy-2">
                            <div class="col-md-auto">
                                    <?php 
                                        $verif = $pdo->query("SELECT id FROM panier WHERE id_produit = ".$_GET["id"])->fetch();
                                        if($verif != false){
                                            echo '<a href="deleteCart.php?id='.$prod[0].'" class="btn btn-danger" style="color: #fff;">
                                                    Delete from cart
                                                 </a>';
                                        } else{
                                            echo '<a href="addToCart.php?id='.$prod[0].'" class="btn btn-warning" style="color: #fff;">
                                                    Add to cart
                                                 </a>';
                                        }
                                    ?>

                                    
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <h3>Description</h3>
                <p style="white-space: pre-wrap; font-size: 20px;"><?php echo "".$prod[3] ?></p>
            </div>
        </div>       
    </div>
    <?php require_once('footer.php'); ?>
</body>
</html>