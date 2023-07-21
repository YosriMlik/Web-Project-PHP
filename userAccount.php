<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once("header.php");
    ?>

    <form action="modifyClient.php" method="post" class="my-3 m-auto forme-inscription shadow-lg" >
        <h3 class="display-6">Modify your informations</h3>
        <br>
        <input type="text" name="name" id="" class="form-control" maxlength="30" required placeholder="Name">
        <br>
        <input type="text" name="phone" id="" class="form-control" minlength="8" maxlength="8" required placeholder="Phone number">
        <br>
        <input type="email" name="email" id="" class="form-control" maxlength=30 required placeholder="E-mail">
        <input type="text" name="adress" id="" class="form-control mt-3" maxlength=30 required placeholder="Adress">
        <br>
        <input type="text" name="username" id="" class="form-control" minlength="3" maxlength="10" required placeholder="Username">
        <br>
        <input type="password" name="password" id="" class="form-control" minlength="3" maxlength="10" required placeholder="Password">
        <br>
        <input class=" btn btn-success rounded-pill px-3" type="submit" value="Submit">
        <br>
    </form>
    <?php require_once('footer.php'); ?>
</body>
</html>