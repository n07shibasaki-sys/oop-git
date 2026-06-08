<?php
  session_start();

  require "../classes/Product.php";

  $product_obj = new Product;

  $all_products = $product_obj->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
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

  <main class="row justify-content-center gx-0">
    <div class="col-8 mx-auto">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Product List</h2>

        <a href="AddProduct.php"><i class="fa-regular fa-square-plus display-5 text-warning"></i></a>
      </div>

      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th></th>
            <th></th>
          </tr>
        </thead>
      <tbody>
<?php while($product = $all_products->fetch_assoc()){ ?>
  <tr>
    <td><?= $product['id'] ?></td>
    <td><?= $product['product_name'] ?></td>
    <td><?= $product['price'] ?></td>
    <td><?= $product['quantity'] ?></td>

    <td>
      <a href="../views/EditProduct.php?id=<?= $product['id'] ?>" class="btn btn-outline-warning" title="edit">
        <i class="fa-regular fa-pen-to-square"></i>
      </a>

      <a href="../actions/DeleteProduct.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger" title="delete">
        <i class="fa-regular fa-trash-can"></i>
      </a>
    </td>

    <td>
      <a href="BuyProduct.php?id=<?= $product['id'] ?>" class="btn btn-outline-success" title="buy">
        <i class="fa-solid fa-cart-plus"></i>
      </a>
    </td>
  </tr>
<?php } ?>
</tbody>
      </table>
    </div>
  </main>
  
</body>
</html>
