<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/icons8-store-100.png" type="image/x-icon">
    <title>Add Product</title>
</head>
<body>
<?php 
    require_once("header.php");
?>  
    <div class="container">
        <h1>Add a product :</h1>
        <br>
        <form action="add.php" method="post" name="myForm" enctype="multipart/form-data">
            <div class="row" style="margin-bottom: 10px;">
                <label class="col-2" for="name">Name</label>
                <input class="col-3 form-control w-25" type="text" name="name" id="name" oninput="check();">
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <label class="col-2" for="cathegory">Cathegory</label>
                <select class="col-3 form-select w-25" aria-label="Default select example" name="cathegory">
                    <option selected>Gaming PC</option>
                    <option selected>Gaming Laptop</option>
                    <option>Workstation PC</option>
                    <option>Workstation Laptop</option>
                </select>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <label class="col-2" for="description">Description</label>
                <div class=" col-3 m-0 p-0">
                    <textarea class="form-control col-3" id="description" name="description" style="height: 100px"></textarea> 
                </div>            
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <label class="col-2" for="price">Price</label>
                <input class="col-3 form-control" style="width: 120px;" type="text" name="price" id="price">
                <span class="col" style="padding-top: 6px;">TND</span>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <label class="col-2" for="quantity">Quantity</label>
                <input class="col-3 form-control" style="width: 120px;" type="text" name="quantity" id="quantity">
                <span class="col" style="padding-top: 6px;">Pieces</span>
            </div>
            <div class="row" style="margin-bottom: 10px;">
                <label class="col-2" for="photo">Photo</label>
                <input class="col-3 p-0" type="file" name="photo" id="photo" accept="image/*">
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-3"><span id="errorMsg" style="color: red; font-size: 10px;"><br></span></div>
            </div>
            <button type="submit" id="_submit" class="btn btn-primary">Add</button>
        </form> 
    </div> 
    <?php require_once('footer.php'); ?>  
</body>
</html>