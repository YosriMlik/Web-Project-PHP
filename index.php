<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="images/icons8-store-100.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>    
    <style>
        .products{
            justify-content: center;
            align-items: center;
        }    
    
        .header-section{
            margin-top: -20px;
            background: radial-gradient(#fff,#eaf2fb);
        }
        .row{
            display: flex;
            justify-content:space-around;
            align-items:center;
            flex-wrap: wrap;
        } 
        .col2{
            padding-left : 50px;
            flex-basis: 50% ;

        }
        .col2 img{
            width: 85% ;
            padding: 30px 0;
        }
  
        h1{
            font-size: 50px;
            line-height: 60px;
            margin: 25 0;
        }
        .col2 a {
            text-decoration: none;
            padding: 10px 30px;
            background: #0929db;
            margin-top: 25px;
            border-radius: 30px;
            color: #fff;
        }
        .products{    
            display : flex;
            justify-content: center;
            align-items: center;  
        }
        .content-show img{
            width: 50px;
            height: 50px;
        }
   </style>
</head>
<body>
<?php 
        require_once("header.php");
    ?>
    <section class="header-section">
        <div class="row w-100">
            <div class="col2">
                <h1>Welcome to our Laptop Web Store !</h1>
                <p>Find the perfect PC for your needs.</p>
                <p>Over 100 PCs are available in our online store. Feel free to place an order.</p>
                <a href="products.php">Explore Now &#8594;</a>
            </div>
            <div class="col2">
                <img src="images/Icones/12.png" alt="">
            </div>
        </div>
    </section>
    <br><br><br><br>
    <!--h1 class="text-center mt-5">Contact Us</h1>
    <br>
    <section-- class="d-flex justify-content-center">
        
        <div class="mx-3 content-show">
            <div><img src="images/Icones/insta.png" alt="">
                <div class="title">instagram</div>
            </div>

        </div>
        <div class="mx-3 content-show">
            <div><img src="images/Icones/face.png" alt="">
                <div class="title">facebook</div>
            </div>
        </div>
        <div class="mx-3 content-show">
            <div><img src="images/Icones/wha.png" alt="">
                <div class="title">whatsapp</div>
            </div>
        </div>
    </section-->
    <?php 
        require_once("footer.php");
?>
</body>
</html>