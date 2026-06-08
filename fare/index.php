<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="distance" placeholder="Enter distance in km">
    <input type="text" name="age" placeholder="Enter age" min="10" max="80">
    <input type="submit" name="calculate" value="Calculate Fare">
    
  </form>
  
</body>
</html>

<?php

include 'fare.php';

if (isset($_POST['calculate'])){
  $distance = $_POST['distance'];
  $age = $_POST['age'];

  $new_fare = new Fare();

  $new_fare->setDistance($distance);
  $new_fare->getDistance();
  $new_fare->setAge($age);
  $new_fare->getAge();
  $new_fare->setFare();
  
  echo "Fare:" . $new_fare->getFare();

}

?>