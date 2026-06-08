<?php
  session_start();

  // require "../classes/User.php";

  // //create an object
  // $user_obj = new User;

  // $all_users = $user_obj->getAllUsers();
  // // print_r($all_users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

  <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:80px">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
      <div class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
        <form action="../actions/logout.php" class="d-flex ms-2">
          <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="row justify-content-center gx-0">
    <div class="col-4 text-center">
      <i class="fa-solid fa-triangle-exclamation text-warning display-4 d-block mb-2 mx-auto"></i>
      <h2 class="text-danger mb-5">DELETE ACCOUNT</h2>

      <p class="fw-bold">Are you sure you want to delete your account?</p>
      <div class="row">
        <div class="col">
          <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
        </div>
      
        <div class="col">
          <form action="../actions/delete-user.php" method="post">
            <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  
  
</body>
</html>