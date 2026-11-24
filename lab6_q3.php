<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }
        $width = 4;
        $height = 2;
        $area = calculateArea($width, $height);
    ?>
    <p>
        The area of a rectangle with a width of
        <?php echo $width; ?> and <?php echo $height; ?> is
        <?php echo $area; ?>
    </p>
</body>
</html>