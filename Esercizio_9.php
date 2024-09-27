<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $red = rand(0,255);
        $green = rand(0,255);
        $blue = rand(0,255);
        $nome = "Marco";
        echo "<h1 style='color: rgb($red,$green,$blue)'> $nome </h1>"
    ?>
</body>
</html>