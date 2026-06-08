<?php
  session_start();

  require "../classes/User.php";

  //create an object
  $user_obj = new User;

  $all_users = $user_obj->getAllUsers();
  // print_r($all_users);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Online</title>
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

  <main class="row justify-content-center gx-0">
    <div class="col-6">
      <h2 class="text-center">USER LIST</h2>

      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th></th>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- display all users here -->
          <?php
              while($user = $all_users->fetch_assoc()){
          ?>
              <tr>
                <td>
                <?php
                if($user['photo']){
                ?>
                  <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block text-center mx-auto dashboard-photo">
                <?php 
                } else { 
                  ?>
                  <i class="fa-solid fa-user text-secondary d-block text-center mx-auto dashboard-icon"></i>

                <?php
                }
                ?>
                </td>

                <td><?= $user['id'] ?></td>
                <td><?= $user['first_name'] ?></td>
                <td><?= $user['last_name'] ?></td>
                <td><?= $user['username'] ?></td>      
                <td>
                  <!-- action button--display only if the user is current -->
                  <?php
                  if($_SESSION['id'] == $user['id']){
                    ?>

                    <a href="edit-user.php" class="btn btn-outline-warning" title="edit">
                      <i class="fa-regular fa-pen-to-square"></i>
                    </a>
                    <a href="delete-user.php" class="btn btn-outline-danger" title="delete">
                      <i class="fa-regular fa-trash-can"></i>
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