<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first PHP website</title>
</head>
<body>
    <div class="container">
        this is ansu first php web


    <?php
        echo"hello everyone";          
        $variable1 =24;
        $variable2 =28;
        echo $variable1
        echo "<br>";
        echo $variable2;
        echo "<br>";
        // addition operator
        echo"the value of varible1 + variable2 is:";
        echo $variable1+$variable2;
        echo "<br>";
        echo"the value of varible1 * variable2 is:";
        echo $variable1 * $variable2;
        // assingment op
        $newVar = $variable1;
        $newVar += 1;
        echo "the value of new variable is:";
        echo $newVar;
        echo "<br>";
        
    ?>
    </div>
</body>
</html>