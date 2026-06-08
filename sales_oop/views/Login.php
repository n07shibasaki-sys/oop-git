<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body class="">
  <div style="height: 100vh">
    <div class="row h-100 m-0">
      <div class="w-50 m-auto">
        <div class="border-0 py-3">
          <h1 class="text-center">LOGIN</h1>
        </div>
        <div class="">
          <form action="../actions/Login.php" method="post">
            <input type="text" name="username" id="username" placeholder="USERNAME" class="form-control mb-2" required autofocus>

            <input type="password" name="password" id="password" class="form-control mb-5">

            <button type="submit" class="btn btn-primary w-100">Log in</button>
          </form>
          <p class="text-center mt-3 small"><a href="Registration.php">Create Account</a></p>
        </div>
      </div>
    </div>

  </div>
  
</body>
</html>