<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $index = 1;
    while($index <= 5) {
        echo("$index <br>");
        $index += 1;
    }

    echo("<br>");

    do {
        echo("$index <br>");
        $index += 1;
    } while($index <= 5);

    echo("<br>");

    $array = [55, 44, 33, 22, 11];
    
    for ($i=1; $i < count($array); $i++) { 
        echo("$array[$i] <br>");
    }
    ?>
</body>
</html>