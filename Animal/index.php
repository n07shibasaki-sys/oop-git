<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Animal Kingdom</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="card w-50 mx-auto mt-5">
  <div class="card-body">
    <form action="" method="post">
      <h2 class="fw-bold text-primary">Animal Kingdom</h2>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" class="form-control mb-3" required>

      <label for="species">Species:</label>
      <select id="species" name="species" class="form-select mb-3" required>
        <option value="">Select a species</option>
        <option value="bird">Bird</option>
        <option value="dog">Dog</option>
        <option value="cat">Cat</option>
      </select>

      <label for="breed">Breed:</label>
      <input type="text" id="breed" name="breed" class="form-control mb-3" required>

      <input type="submit" name="submit" value="Submit" class="btn btn-primary w-100">
    </form>
  </div>
</div>

<?php
require_once "Bird.php";
require_once "Dog.php";
require_once "Cat.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];

    if ($species == "bird") {
    $animal = new Bird($name, $breed);
    } elseif ($species == "dog") {
    $animal = new Dog($name, $breed);
    } elseif ($species == "cat") {
    $animal = new Cat($name, $breed);
    }

    echo "<div class='card w-50 mx-auto mt-5'>";
    echo "<div class='card-body'>";
    echo "<h2>Animal Details</h2>";
    echo $animal->introduction();
    echo $animal->speak();
    echo "</div>";
    echo "</div>";
}
?>

</body>
</html>