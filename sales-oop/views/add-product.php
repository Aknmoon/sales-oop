<?php

include "../classes/product.php";
$product = new Product;

//addProduct($product_name, $price, $quantity);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
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
    
</body>
</html>