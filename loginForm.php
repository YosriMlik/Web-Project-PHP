<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Login</title>

</head>
<body>
    <?php 
        require_once('header.php');
        if($name != "" or $admin != ""){
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                Déconnecter dabord !!
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        } else {
            echo
            "<div class='forme-authentification mx-auto my-5 shadow-lg'>
                <form action='login.php' method='post'>
                    <h3 class='text-center display-6'>Login</h3>
                    <br>";
                    if(isset($_GET["msg"]))
                        echo "
                        <div class='alert alert-danger alert-dismissible fade show' role='alert'>".
                            $_GET["msg"]
                            ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>";
                    echo "
                    <input type='text' name='username' class='form-control' maxlength='20' placeholder='Username'>
                    <br>
                    <input type='password' name='password' class='form-control' maxlength='10' placeholder='Password'>
                    <br>
                    <input class='w-100 btn btn-primary rounded-pill' type='submit' value='Connect'>
                    <br> <br>
                    <div class='row gx-2 gy-1'>
                        <div class='col-sm-auto small-txt'>You don't have account ?</div>
                        <div class='col-sm-auto small-txt'><a href='registration.php'>create one</a></div>
                </form>
            </div> </div> ";
        }
    ?>
    <?php require_once('footer.php'); ?>
    <script src="css/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>