<!doctype html>
<html lang="en">
  <head>
    <title>Add Form</title>
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
        <form class="my-form" action="../CRUD/insert.php" method="POST" name="myForm" id="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col text-center mt-4">
                    <h3>Add Product</h3>
                </div>
            </div>
            <div class="row align-center">
                <div class="col text-center m-3">
                    <input type="text" class="form-control mb-3" name="name" placeholder="Product Name" >
                    
                    <input type="text" class="form-control mb-3" name="price" placeholder="Product Price">

                    <input class="form-control mb-3" type="file" name="image"/>

                    <button type="submit" name="submit" class="btn btn-success btn-block mb-3">Add Product</button>
                </div>
            </div>
        </form>    
    </div>
</body>
</html>