<?php


include "../classes/product.php";

$product_obj = new Product;

$product_list = $product_obj->displayAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sales Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
    <nav class="navbar navbar-expand">
        <div class="container">
            <a href="dashboard.php" class="navbar-link text-dark">
            <i class="fas fa-home fa-2x"></i></a>
        </div>
        <div>
        </div>
        <div class="ms-auto">
            <a href="../actions/logout.php" class="navbar-link text-danger"><i class="fas fa-user-times fa-2x"></i></a>

        </div>

    </nav>

    <main class="container">

        <a href="add-product.php" class="btn text-info float-end"><i class="fas fa-plus fa-2x"></i></a>
        <!-- data-bs-toggle="modal" data-bs-target="#add-product" -->

        <h1 class="mt-5 fw-bold">Product List</h1>
        <div class="row">
            <div class="col w-75">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                        while($product_details = $product_list->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?= $product_details['id']?></td>
                            <td><?= $product_details['product_name']?></td>
                            <td><?= $product_details['price']?></td>
                            <td><?= $product_details['quantity']?></td>
                            <td>
                                <a href="edit-product.php?product_id=<?=$product_details['id']?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="../actions/delete-product.php?product_id=<?=$product_details['id']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                            <td>
                                <a href="buy-product.php?product_id=<?=$product_details['id']?>" class="btn btn-success"><i class="fas fa-cash-register"></i></a>

                            </td>
                        </tr>
                        <?php
                        }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


 
    <div class="modal fade" id="add-product" tabindex="-1" aria-labelledby="add-product" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <button type="button" class="close ms-auto" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button> 




                <div class="w-50 my-auto mx-auto">
                    <div class="header border-0 py-lg-5">
                        <h1 class="text-center text-info"><i class="fas fa-box"></i> Add Product</h1>
                    </div>
                    <div class="body">
                        <form action="../actions/add-product.php" method="post">
                            <div class="mb-3">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" name="product_name" id="product_name" class="form-control">
                            </div>

                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label for="price" class="form-label">Price</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">$</div>
                                        <input type="number" name="price" id="price" class="form-control">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control">
                                </div>
                            </div>

                                <button type="submit" class="btn btn-info w-100 mb-5">Add</button>

                        </form>
                                            
                    </div>
                    
                </div>



            </div>
        </div>
    </div>
            
</body>
</html>
