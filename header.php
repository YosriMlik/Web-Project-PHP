<?php 
    session_start();
    require_once('pdo.php');
    $name = "";
    $admin = "";
    if(isset($_SESSION['connected'])){
        $name = $pdo->query("SELECT nom FROM client WHERE id = '".$_SESSION["connected"]."';")->fetchColumn();
        $admin = $pdo->query("SELECT nom_u FROM admin WHERE id = '".$_SESSION["connected"]."';")->fetchColumn();
    }
?>
<style>
    .navbar-item{
        font-size: 25px !important;
    }
    .navbar-item:hover{
        transition: .5s !important;
        color: #000 !important;
    }
    ._icon{
        width: 28px;
        height: 28px;
        margin-right: 5px;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-3 fs-5">
    <div class="container-fluid">
        <?php         
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="26 " height="26 " fill="currentColor" class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                 </svg>';
            if($name != "" and $admin == "")
                echo '<a class="navbar-brand display-5" href="userAccount.php" style="width: 110px; font-size: 25px; font-weight: 400;">
                    '.$name.
                '</a>';
            else if($admin != "" and $name == "")
                echo '<a class="navbar-brand display-5" href="dashboard.php" style="width: 110px; font-size: 25px; font-weight: 400;">
                        '.$admin.
                    '</a>';
            else
                echo '<a class="navbar-brand display-5" href="loginForm.php" style="width: 110px; font-size: 25px; font-weight: 400;">
                    Login
                </a>';            
            
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item me-5">
                    <a class="nav-link navbar-item" href="index.php">Home</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link navbar-item" href="products.php">Products</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link navbar-item" href="cart.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navbar-item" href="contact.php">Contact</a>
                </li>
            </ul>
            <span class="nav-item">
                <a class="nav-link text-danger" href="disconnect.php">
                    <?php 
                        if($name != "" or $admin != "")
                            echo '<span class="">Disconnect</span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="p-0 bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                  </svg>';
                        else
                            echo "";
                        echo '';
                    ?>
                </a>
            </span>
        </div>
    </div>
</nav>
