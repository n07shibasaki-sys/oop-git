<?php
  session_start();

  if (!isset($_SESSION['product'], $_SESSION['buy_quantity'], $_SESSION['total_price'])) {
    header("location: Dashboard.php");
    exit;
  }

  $product = $_SESSION['product'];
  $buy_quantity = $_SESSION['buy_quantity'];
  $total_price = $_SESSION['total_price'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
  <nav class="navbar navbar-expand navbar-warning bg-warning" style="margin-bottom:50px">
    <div class="container">
      <a href="Dashboard.php" class="navbar-brand">
        <i class="fa-regular fa-house display-5 text-light"></i>
      </a>
      <div class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
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
            <i class="fa-solid fa-hand-holding-dollar"></i>
            Payment
          </h1>

          <div class="mb-4">
            <small class="text-muted">Product Name</small>
            <h2 class="fw-bold"><?= $product['product_name'] ?></h2>
          </div>

          <div class="row text-center mb-4">

            <div class="col">
              <small class="text-muted d-block">
                Total Price
              </small>

              <span class="fs-2 fw-bold">
              <?= $total_price ?>
              </span>
            </div>

            <div class="col">
              <small class="text-muted d-block">
                Buy Quantity
              </small>

              <span class="fs-2 fw-bold">
              <?= $buy_quantity ?>
              </span>
            </div>

          </div>

          <form action="../actions/Payment.php" method="post">

            <label class="form-label fw-bold">
              Payment
            </label>

            <div class="input-group mb-4">
              <span class="input-group-text">
                $
              </span>

              <input
                type="number"
                name="payment"
                class="form-control"
                min="<?= $total_price ?>"
                required
              >
            </div>

            <button
              type="submit"
              class="btn btn-success w-100"
            >
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
