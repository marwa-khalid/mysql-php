
<!doctype html>
<html lang="en">
  <head>
    <title>Update Form</title>
    <link rel="stylesheet" href="../css/form.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
  <body>
    
    <div class="container">
        <nav id="navbar" class="navbar navbar-light bg-dark fixed-top">
            <a class="navbar-brand" href="../products.php">:(</a>
        </nav>
        

        <form class="my-form" action="../CRUD/update.php?id=<?php echo $_GET['id'];?> " method="POST" name="myForm" id="form" enctype="multipart/form-data" >
            <div class="row">
                <div class="col text-center mt-4">
                    <h3>Update Product</h3>
                </div>
            </div>
            <div class="row align-center">
            
            <?php 

                require "../configuration/db.php";

                $productId = $_GET['id'];

                $query = "SELECT * FROM product WHERE product_id='$productId'";

                $queryRun = mysqli_query($connection, $query);

                $checkProduct = mysqli_num_rows($queryRun) > 0;

                if($checkProduct){
                    $update = true;
                    
                    
                    $row = mysqli_fetch_array($queryRun);

                    $productName = $row['product_name'];
                    $productPrice = $row['product_price'];
                    $productImage = $row['product_image'];

                }

                ?>
                
                <div class="col text-center m-3">
                    <input type="text" class="form-control mb-3" name="name" value='<?php echo $productName;?>'>
                  
                    <input type="text" class="form-control mb-3" name="price" value="<?php echo $productPrice;?>">
                    
                    <input class="form-control mb-3" type="file" name="image" value="<?php echo $productImage;?>" />

                    <?php if ($update == true): ?>
                        <button class="btn btn-primary" type="submit" name="update">update</button>
                    <?php else: ?>
                        <button class="btn btn-danger " type="submit" name="save" >Save</button>
                    <?php endif ?>
                </div>
            </div>
        </form>    
    </div>
</body>
</html>