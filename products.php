<!doctype html>
<html lang="en">

  <head>
      
    <title>Shopping Site</title>
    
    <link rel="stylesheet" href="css/products.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="js/search.js"> </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

    <div class="container"> 

      <nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top bg-dark">

        <div class="container-fluid">
          <a class="navbar-brand" href="../products.php"><img src="images/logo.PNG" alt=""></a>
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

        <div class="add"> 

          <a href="forms/addForm.php">
            <button class="btn btn-primary"> Add New Product </button>
          </a>  
        
        </div>
        
        <div class="search ml-auto mr-3 ">
          
          <input type="text" name="search" id="search" placeholder="Search product" onkeyup="searchProduct()">
        
        </div>

      </div>
      
      <div class="row m-4" id="card-list">
        <div>
          <p  id = "unmatched">

          </p> 
        </div>

        <?php
          require 'configuration/db.php';

          $query = "SELECT * FROM product";
          $queryRun = mysqli_query($connection, $query);
          $checkProducts = mysqli_num_rows($queryRun) > 0;

          if($checkProducts){
              while($row = mysqli_fetch_array($queryRun)){
                
        ?>

        <div class = "col-sm-3 shadow m-4">
          
          <div class="card-body">
              
            <img src="images/<?php echo $row['product_image'] ?>" class="image w-100"/>
              
            <div class="card-details text-center">
              
              <h5 class="name" > <?php echo $row['product_name'] ?> </h5>
              <span class="price" > <?php echo $row['product_price'] ?> </span>
              
            </div>

            <div class="btn-container text-center mt-3">

              <a href="forms/updateForm.php?id=<?php echo $row['product_id']; ?>"><button class="edit-btn btn-warning">Edit</button></a>

              <a href="CRUD/delete.php?id=<?php echo $row['product_id']?>&picture=<?php echo $row['product_image']?>"><button class="own-btn btn-danger">Delete</button></a>

            </div>
          
          </div>

        </div>

        <?php
                }   
            }
        ?>
      
      </div> 
      
    </div>

    <?php include 'footer.php'; ?> 
    
  </body>
 
</html>