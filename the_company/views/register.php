<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body class="bg-light">
  <div class="" style="height: 100vh">
    <div class="row h-100 m-0">
      <div class="card w-25 m-auto">
        <div class="card-header bg-white border-0 py-3">
          <h1 class="text-center">REGISTER</h1>
        </div>
        <div class="card-body">
          <form action="../actions/register.php" method="post">
            <div class="mb-3">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" name="first_name" id="first-name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" name="last_name" id="last-name" class="form-control" required>
            </div>
            <!-- Bold to add emphasis -->
             <div class="mb-3">
              <label for="username" class="form-label fw-bold">Username</label>
              <input type="text" name="username" id="username" class="form-control fw-bold" required>
             </div>
             <div class="mb-3">
              <label for="password" class="form-label fw-bold">Password</label>
              <input type="password" name="password" id="password" class="form-control fw-bold" min-length="8" aria-describedy="password-info" required>
              <div class="form-text" id="password-info">
                Password must be at least 8 characters long.
              </div>
             </div>
             <button type="submit" class="btn btn-success w-100">Register</button>
          </form>

          <p class="text-center mt-3 small">Registered already?<a href="../views/" class="">Log in.</a></p>
        </div>
      </div>
    </div>

  </div>

  
</body>
</html>