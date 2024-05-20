<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
    // Function to calculate the area of a rectangle
    function calculateArea($width, $height) {
        return $width * $height;
    }

    // Example values for width and height
    $width = 4;
    $height = 2;

    // Calculate the area using the function
    $area = calculateArea($width, $height);
    ?>

    <p>The area of a rectangle with a width of <?php echo $width; ?> and height of <?php echo $height; ?> is <?php echo $area; ?></p>
</body>
</html>
