<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $characterName = "Augusto";
        $characterAge = 26;
        echo("Hello World, my name is $characterName and my age is $characterAge");
    ?>

    <form action="site.php" method="get">
        Name: <input type="text" name="name">
    
        Age: <input type="text" name="age">
        <input type="submit">
    </form>
    Your name is: 
    <?php 
        echo  $_GET["name"];
    ?>
    Your age is: 
    <?php 
        echo  $_GET["age"];
    ?>

</body>
</html>