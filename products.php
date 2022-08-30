<!doctype html>
<html lang="en">

    <head>
        
        <title>Shopping Site</title>
        
        <link rel="stylesheet" href="products.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    </head>

    <body>

        <div class="container"> 

            <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">

                <div class="container-fluid">
                    <a class="navbar-brand" href="products.php"><img src="images/logo.PNG" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="myMenu">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </nav>

            <div class="row">

                <button 
                    data-toggle="modal" 
                    data-target="#addModal" 
                    class="btn btn-primary">Add New Product
                </button>

            </div>
            
            <div class="row m-4">

            <?php
                require 'configuration/db.php';

                $query = "SELECT * FROM Product";
                $query_run = mysqli_query($connection, $query);
                $check_products = mysqli_num_rows($query_run) > 0;

                if($check_products){
                    while($row = mysqli_fetch_array($query_run)){
            ?>

                <div class="col-sm-3 shadow m-4" >
                    <div class="card-body">
                        <img src="images/<?php echo $row['ProductImage'] ?>" class="image w-100"/>
                        <div class="card-details text-center">
                            <h5 class="name" > <?php echo $row['ProductName'] ?> </h5>
                            <span class="price" > <?php echo $row['ProductPrice'] ?> </span>
                        </div>
                    </div>
                </div>

            <?php
                    }   
                }
            ?>

            </div> 
            
        </div>

    </body>

    <?php include 'footer.php'; ?> 

    <!-- Modal -->
    <div
      class="modal fade"
      id="addModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="modelTitleId"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add New Product</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="add-form">
            <div class="form-group">
              <label for="name">Product Name</label>
              <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                aria-describedby="nameHelp"
                placeholder="Name of the Product"
              />
              <div class="invalid-feedback"
                >Name of the Product is required</div>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input
                type="text"
                class="form-control"
                name="price"
                id="price"
                aria-describedby="priceHelp"
                placeholder="Product price"
              />
              <div class="invalid-feedback"
                >Price of the Product is required</div>
            </div>
            <div class="form-group">
              <label for="image">Image</label>
              <input 
                type="file" 
                id="image" 
                name="image" 
                class="form-control"
              />
              <div class="invalid-feedback"
                >Image of the Product is required</div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="addBtn" class="btn btn-info">Add Product</button>
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

</html>