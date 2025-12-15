<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Array practice <br><br>
    <?php
        $friends = array("Kevin", "Karen", "Oscar", "Jim");
        $numbers = array(1, 2, 3);
        $friends[1] = "Dwight <br>";
        echo $friends[1];
        $friends[4] = "Angela <br>";
        echo $friends[4];
        echo count($friends);
        echo "<hr>";
    ?>
    Associative arrays <br><br>
    
    <?php
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
        // jim = key, a+ = value
        $grades["Jim"] = "F";
        echo $grades["Jim"];    
    ?>
    
    <form action="arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        if(isset($grades[$_POST["student"]])) {
            echo $grades[$_POST["student"]];
        }
        
    ?>
</body>
</html>