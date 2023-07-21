<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Cart</title>
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
        if(isset($_SESSION['connected'])){            
            require_once("pdo.php");
            $prods_ids = $pdo->query("SELECT id_produit FROM panier WHERE id_client = ".$_SESSION["connected"]);
            $prods = $pdo->query("SELECT * FROM produit WHERE id in (SELECT id_produit FROM panier WHERE id_client = ".$_SESSION["connected"].")");
        } else{ 
            header("Location: loginForm.php?msg=Connect first"); 
        }
    ?>
    
    <div class="container">
        <h1 class="my-4 mt-5 mb-4">
            Cart
            <svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
        </h1>
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Cathgory</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Disp</th>
                    <th scope="col" style="padding-left: 15px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <?php
                    $total = 0;
                    foreach($prods as $row) {
                        $total += $row[4];
                        echo "<tr><td><img src='images/$row[6]' alt='photo'> </td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        if($row[5] > 0) echo "<td class='text-success'><b>Yes</b></td>";
                        else echo "<td class='text-danger'><b>No</b></td>";
                        echo "<td><a class='ms-2' href='deleteCart.php?id=$row[0]' style='background-color: #ff0000bf; border: none; border-radius: 20px; padding: 4px 15px 9px 15px; text-decoration: none; color: #fff;'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                                    <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                                </svg>
                            </a></td></tr>";
                    }
                ?>
                </tr>
            </tbody>
        </table>
        <div class="d-flex flex-row justify-content-between mt-5 mb-4">
            <div class="">
                <h2>Total : <?php echo"".$total; ?> DT</h2>
            </div>
            <div class=" align-self-right">
                <button class="btn btn-success mt-1"><a href="#">Order</a></button>
            </div>
        </div>           
    </div>
    <?php require_once('footer.php'); ?>
</body>
</html>