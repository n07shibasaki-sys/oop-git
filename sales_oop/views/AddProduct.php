<?php
  session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <title>Add Product</title>
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
<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2 class="fw-light mb-3">New Product</h2>

            <form action="../actions/AddProduct.php" method="post">
                <div class="mt-2">
                    <label class="form-label">Product Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="product_name"
                        required>
                </div>

                <div class="mt-2">
                    <label class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input
                            type="number"
                            class="form-control"
                            name="price"
                            required>
                    </div>
                </div>

                <div class="mt-2">
                    <label class="form-label">Quantity</label>
                    <div class="input-group">
                        <span class="input-group-text">kg</span>
                        <input
                            type="number"
                            class="form-control"
                            name="quantity"
                            required>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="reset" class="btn btn-outline-secondary w-25">
                        Cancel</button>
                    <button type="submit" name="btn_add" class="btn btn-success w-50">Add</button>
                </div>
            </form>
        </div>
    </div>
</main>

</body>
</html>