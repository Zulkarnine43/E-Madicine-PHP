<?php

if(isset($_POST['btn'])){
$targetDir = "uploads/";
$fileName = basename($_FILES['image']['name']);
$targetFilePath = $targetDir.$fileName;
move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);

$link = mysqli_connect("localhost","root","","test");

$sql = "INSERT INTO addcategory (file,categoryName,price,categoryDescription,longDescription) VALUES ('$targetFilePath','$_POST[categoryName]','$_POST[price]','$_POST[categoryDescription]','$_POST[longDescription]')";
      mysqli_query($link,$sql);
}

?>
    
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" >
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin Name
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item" href="?Logout=true">Logout</a>
                  </div>
              </li>


          </ul>

      </div>

  </div>
</nav>

 
<div class="container " style="margin-top: 200px ">
    <div class="row">
        <div class="col-sm-6 mx-auto">

            <div class="card">
                <div class="card-title">
                    <p align="center"><i><b>Category</b></i></p>

                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">

                        <div class="form-group row">
                            <label for="Name" class="col-sm-3 col-form-label">Product image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control" value="" id="image" placeholder="product image">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Name" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="categoryName" class="form-control" value="" id="Name" placeholder="product Name">
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="Name" class="col-sm-3 col-form-label">product price</label>
                            <div class="col-sm-9">
                                <input type="number" name="price" class="form-control" value="" id="price" placeholder="Price" min="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Description" class="col-sm-3 col-form-label">Product Description</label>
                            <div class="col-sm-9">
                                <input type="text" name="categoryDescription" class="form-control"  value="" id="Description" placeholder="product Description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea"   name="longDescription" value="" rows="5" cols="40"></textarea>
                            </div>
                        </div>
                </div>
      
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="btn" class="btn btn-success btn-block" value="submit">Save Category Info</button>
                            </div>
                      
                    </form>
                      <a href="Home.php" style="color: red;">Back to Home page</a>
           
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>