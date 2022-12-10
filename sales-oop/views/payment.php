<?php

include "../classes/product.php";
$product = new Product;
$product_id = $_GET['product_id'];
$product_row = $product->getProduct($product_id);

// $product->setProduct($price, $stocks_left, $buy_quantity);
// $result = $product->countProduct();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main-style.css">
</head>
<body>
    <div class="w-50 my-auto mx-auto">
        <div class="header border-0 py-lg-5">
            <h1 class="text-center text-success"> Payment</h1>
        </div>
        <div class="body w-50 my-auto mx-auto">
            <form action="../actions/product-actions.php" method="post">
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Name</label>
                    <h1><?= $product_row['product_name']?></h1>
                </div>

                <div class="row">
                    <div class="col-6 mb-3">
                        <label for="price" class="form-label">Total Price</label>
                        <h1>total</h1>
                    </div>

                    <div class="col-6">
                        <label for="buy_quantity" class="form-label">Buy Quantity</label>
                        <input type="number" name="quantity" id="buy_quantity" class="form-control w-50 my-auto mx-auto">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="payment" class="form-label">Payment</label>
                    <input type="number" name="payment" id="payment" class="form-control w-50 my-auto mx-auto">
                </div>

                <button type="submit" class="btn btn-success w-100 mb-5">Pay</button>
            </form>
        </div>

    </div>
    
</body>
</html>