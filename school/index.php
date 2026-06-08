<?php

require "School.php";

$total = "";

if (isset($_POST['btn_submit'])) {

    $name = $_POST['name'];
    $year = $_POST['year'];
    $units = $_POST['units'];
    $lab = $_POST['lab'];

    $student = new School($year, $units, $lab);
    $total = $student->computeTotal();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>School Activity</title>
</head>
<body>

<h2>School Activity</h2>

<form method="post">

    Name:
    <input type="text" name="name" required>
    <br><br>

    Year Level:
    <select name="year">
        <option value=""></option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>

    <br><br>

    Number of Units:
    <input type="number" name="units" min="0" max="23" required>

    <br><br>

    Lab Option:

    <input type="radio" name="lab" value="Yes" required>
    With Lab

    <input type="radio" name="lab" value="No">
    Without Lab

    <br><br>

    <input type="submit" name="btn_submit" value="Compute">

</form>

<?php

if ($total != "") {

    echo "<hr>";
    echo "Student Name: $name <br>";
    echo "Total Amount to Pay: " . $total;
}
?>

</body>
</html>