<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Text Form</title>
    <style type = "text/css">
    body{font-family: arial;}
    </style>
</head>
<body>
    <?php 
    $font = $_POST["font"];
    $color = $_POST["color"];
    $size = $_POST["size"];
    $words = $_POST["words"];
    echo '<span style = "font-size: '.$size.'; font-family: '.$font.'; color: '.$color.'">'.$words.'</span>';
    ?>
</body>
</html>