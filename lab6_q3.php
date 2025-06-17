<?php
// lab6_q3.php

// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rectangle Area Calculator</title>
</head>
<body>
    <h2>Calculate Area of a Rectangle</h2>

    <form method="post" action="">
        Length: <input type="number" name="length" required><br><br>
        Width: <input type="number" name="width" required><br><br>
        <input type="submit" value="Calculate Area">
    </form>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length = $_POST["length"];
        $width = $_POST["width"];
        $area = calculateArea($length, $width);

        echo "<h3>Result:</h3>";
        echo "The area of a rectangle with length $length and width $width is: <strong>$area</strong>";
    }
    ?>
</body>
</html>