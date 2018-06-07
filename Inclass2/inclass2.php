<!DOCTYPE HTML>
<html>
    <head>
        <title>Your Name</title>
        <style type = "text/css">
            body{background-color:lightblue}
        </style>
    </head>
    <body>
        <?php
        $title = $_POST['title'];
        $first = $_POST['first'];
        $last = $_POST['last'];
        $address = $_POST['address'];
        $birth = $_POST['birth'];
        $year = date(Y);
        $age = $year - $birth;
        print '<p>Hello, ' . "$title $first $last" . ' of ' . "$address.</p>";
        print '<p>You will be ' . "$age" . ' this year.</p>';
        ?>
    </body>
</html> 