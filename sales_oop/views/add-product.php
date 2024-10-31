<?php
session_start();

if(isset($_SESSION)){
     
   header("location: ../views/");
   exit;

}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body>
  <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">Add product</h2>
            <form action="" method="POST">

            <label for="product_name"class="form-label" fw-bold>Product name</label>
            <input type="text" name="product_name" id="product_name"class="form-control">
            
            <label for="price"class="form-label" fw-bold>Price</label>
            <input type="text" name="price" id="price"class="form-control" min="1">

            <label for="quantity"class="form-label" fw-bold>Quantity</label>
            <input type="text" name="quantity" id="quantity"class="form-control" min="1">

            </div>
            <button type="submit" class="text-danger bg-transparent border-0">Add</button>
             
              </form>
    </main>
</body>
</html>


   