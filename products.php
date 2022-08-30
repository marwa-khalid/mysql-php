<!doctype html>
<html lang="en">

    <head>
        
        <title>Shopping Site</title>
        
        <link rel="stylesheet" href="products.css">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
            
            <div class="row mr-4 ml-4 mb-4">

            <?php
                require 'config/db.php';

                $query = "SELECT * FROM Product";
                $query_run = mysqli_query($connection, $query);
                $check_products = mysqli_num_rows($query_run) > 0;

                if($check_products){
                    while($row = mysqli_fetch_array($query_run)){
            ?>

                <div class="col-sm-3 shadow m-4" >
                    <div class="card-body">
                        <img src="images\cutetop.png" class="image w-100"/>
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

</html>