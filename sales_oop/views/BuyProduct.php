<?php
session_start();

require "../classes/Product.php";

$product_obj = new Product();

$id = $_GET['id'];

$product = $product_obj->getProduct($id);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Buy Product</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>

  <nav class="navbar navbar-expand navbar-warning bg-warning mb-5">
    <div class="container">

      <a href="Dashboard.php" class="navbar-brand">
        <i class="fa-regular fa-house display-5 text-light"></i>
      </a>

      <div class="navbar-nav">

        <span class="navbar-text">
          <?= $_SESSION['full_name'] ?>
        </span>

        <form action="../actions/Logout.php" class="d-flex ms-2">

          <a href="../actions/Logout.php" class="btn p-0 border-0 bg-transparent">
    <i class="fa-solid fa-arrow-right-from-bracket display-6 text-light"></i>
</a>

        </form>

      </div>

    </div>
  </nav>

  <div class="container">

    <div class="row justify-content-center">

      <div class="col-md-5">

        <div class="card shadow border-0">

          <div class="card-body p-5">

            <h1 class="text-success text-center fw-bold mb-5">
              <i class="fa-solid fa-cash-register"></i>
              Buy Product
            </h1>

            <div class="mb-4">
              <small class="text-muted">
                Product Name
              </small>

              <h2 class="fw-bold">
                <?= $product['product_name'] ?>
              </h2>
            </div>

            <div class="row mb-4">

              <div class="col">

                <small class="text-muted d-block">
                  Price
                </small>

                <span class="fs-2 fw-bold">
                  $<?= number_format($product['price'], 2) ?>
                </span>

              </div>

              <div class="col">

                <small class="text-muted d-block">
                  Stocks Left
                </small>

                <span class="fs-2 fw-bold">
                  <?= $product['quantity'] ?>
                </span>

              </div>

            </div>

            <form action="../actions/BuyProduct.php" method="post">

              <input
                type="hidden"
                name="product_id"
                value="<?= $product['id'] ?>"
              >

              <label class="form-label fw-bold">
                Buy Quantity
              </label>

              <input
                type="number"
                name="buy_quantity"
                class="form-control mb-4"
                min="1"
                max="<?= $product['quantity'] ?>"
                required
              >

              <button
                type="submit"
                class="btn btn-success w-100">
                Pay
              </button>

            </form>

          </div>

        </div>

      </div>

    </div>

  </div>

</body>
</html>