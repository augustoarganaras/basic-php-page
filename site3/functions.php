<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="functions.php" method="get">
        <input type="text" name="name">
        <input type="submit">
    </form>

    <?php
       function sayHi($name) {
        echo "Hello $name";
    }

    if (isset($_GET["name"])) {
        $name = $_GET["name"];
        sayHi($name);
    }

    ?>

</body>
</html>