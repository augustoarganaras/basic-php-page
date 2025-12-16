<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Say Hi function <br>
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

    <hr>
    Function with Return Statement: cube a number <br>
     <form action="functions.php" method="get">
        <input type="text" name="number">
        <input type="submit">
    </form>

    <?php
        function cube($num) {
            return $num*$num*$num;
        }

        if (isset($_GET["number"])) {
        $number= $_GET["number"];
        echo cube($number);
        }
    ?>

</body>
</html>