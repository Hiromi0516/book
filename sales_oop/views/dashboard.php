<?php
session_start();
require '../classes/User.php';
$user       = new User;
$all_products  = $user->getAllProducts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Dashboard</title>
</head>
<body>
   
    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <h2 class="text-center">Product List</h2>
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th><!-- for photo --></th>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th><!-- for action buttons --></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                while ($user=$all_products->fetch_assoc()){
                ?>
                    <tr>
                        <td>
                          
                        </td>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['product_name'] ?></td>
                        <td><?= $user['price'] ?></td>
                        <td><?= $user['quantity'] ?></td>
                        <td>
                            <?php
                            if ($_SESSION['id'] == $user['id']) {
                            ?>
                                <a href="edit-user.php" class="btn btn-outline-warning" title="Add product">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                                <a href="delete-user.php" class="btn btn-outline-danger" title="Delete">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                                <a href="buy-product.php" class="btn btn-outline-success" title="Buy product">
                                <i class="fa-solid fa-conveyor-belt-arm"></i>
                                </a>
                            <?php
                            }
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>









