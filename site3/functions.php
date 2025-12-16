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

    <hr>
    Function with if statement<br>
     <form action="functions.php" method="get">
        <input type="text" name="number2">
        <input type="submit">
    </form>

    <?php
    
        function square($num) {
            return $num*$num;
        }

        if (isset($_GET["number2"])) {
        $number= $_GET["number2"];
        
            if($number % 2 == 0 || $number % 3 == 0) {
                echo("The number is not a prime number <br>");
                echo square($number);
            } else {
                echo("The number is prime <br>");
                echo cube($number);
            }
        }
    ?>

</body>
</html>