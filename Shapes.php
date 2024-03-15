<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .center{
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<body>  
<div class="center">
    <br>


    <?php
   function Rectangle() {
    for ($x = 0; $x < 14; $x++) {
        for ($y = 0; $y <= 30; $y++) {
            echo "* &nbsp ";
        }
        echo "<br>";
    }
}
Rectangle();
    ?>
    <br>
<?php
   function Square() {
    for ($x = 0; $x < 12; $x++) {
        for ($y = 0; $y < 12; $y++) {
            echo "* &nbsp ";
        }
        echo "<br>";
    }
}
Square();
    ?>
<br>
<?php
   function rhombus() {
    for ($x = 1; $x <= 10; $x++) {
        for ($y = 1; $y <= 10 - $x; $y++) {
            echo "&nbsp;&nbsp; ";
        }
        for ($y = 0; $y <= 15; $y++){
            echo "* &nbsp";
        }
        echo "<br>";
    }
}
rhombus();
    ?>
<br>
<?php
   function parallelogram() {
    for ($x = 1; $x <= 10; $x++) {
        for ($y = 0; $y <= 10 - $x; $y++) {
            echo "&nbsp;&nbsp; ";
        }
        for ($y = 0; $y <= 30; $y++){
             echo "* &nbsp";
        }
        echo "<br>";
    }
}
parallelogram();
    ?>
<br>
    <?php
        function trapezoid(){
            $i = (10 - 6) / (5 - 1);
            $gay = 0;
            for($x = 0; $x < 9; $x++){
                $width = 7 + $gay;
                for($y = 0; $y < $width; $y++){
                    echo "* &nbsp&nbsp";
                }
                echo "<br>";
                $gay += $i;
            }
        }
        trapezoid();
    
    ?>
<br>
<?php

function Diamond() {
    $space = 10 - 1;
    for ($x = 1; $x <= 10; $x++) {
        for ($y = 1; $y <= $space; $y++) {
            echo "&nbsp;&nbsp; ";
        }
        $space--;
        for ($y = 1; $y <= 2 * $x - 1; $y++) {
            echo "* ";
        }
        echo "<br>";
    }
    $space = 1;
    for ($x = 1; $x <= 10 - 1; $x++) {
        for ($y = 1; $y <= $space; $y++) {
            echo "&nbsp;&nbsp; ";
        }
        $space++;
        for ($y = 1; $y <= 2 * (10 - $x) - 1; $y++) {
            echo "* ";
        }
        echo "<br>";
    }
}
Diamond();
?>
</div>
</body>
</html>