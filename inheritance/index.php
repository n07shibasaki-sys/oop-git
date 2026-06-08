<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INHERITANCE</title>
</head>
<body>
  
</body>
</html>

<?php
require_once 'Fruit.php';
require_once 'Meat.php';

$lin_store = new Fruit("Lin's Store", "Apple", 1.99, "Red", "Sweet");
$noriko_store = new Meat("Noriko's Store", "Rybeye Steak", 10, "Beef", "Rib");

echo $lin_store->OpenStore();
echo $lin_store->announce();
echo $lin_store->displaydetails();

echo "<hr>";

echo $noriko_store->OpenStore();
echo $noriko_store->announce();
echo $noriko_store->displaydetails();

?>

