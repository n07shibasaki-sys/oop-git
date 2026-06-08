<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fruit OOP</title>
</head>
<body>
  <form action="" method="post">
    <label for="fruit">Enter a fruit name:</label>
    <input type="text" id="fruit" name="fruit">

    <br>
    
    <label for="price">Enter the price:</label>
    <input type="number" id="price" name="price">

    <br>

    <label for="color">Enter the color:</label>
    <input type="text" id="color" name="color">

    <br>
    <input type="submit" name="submit" value="Add Fruit">
  </form>
  
</body>
</html>

<?php

include "Fruit_constructor.php";

if(isset($_POST['submit'])){
  $fruit_name = $_POST['fruit'];
  $fruit_price = $_POST['price'];
  $fruit_color = $_POST['color'];

  // create a new Fruit object
  // ----connstructor method will be called automatically when we create a new object----
  $new_fruit = new Fruit($fruit_name, $fruit_price, $fruit_color);

  //Disply thre fruit information using the showInfo methjod
  $new_fruit->showInfo();

  // Get and Display the fruit information
  echo "<h2>Fruit Information:</h2>";
  echo "Name: " . $new_fruit->getName() . "<br>";
  // echo "Price: " . $new_fruit->getPrice() . "<br>";
  echo "Color: " . $new_fruit->color . "<br>";

}


?>