<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Variable
        $a=10;
        $b=20;
        $a+=$b;
        echo $a."<Br>";
        $a.=$b;
        echo $a."<Br>";
        //Constants-which cannot be changed
        define("Num1","100");
        define("Name","Anjna");
        
        echo $a+Num1;
        //Num1=120;
        //Sending query strings
        echo "<a href=\"Second.php?Sname=manali & Num=100\" >Click me </a>";
            

        
        
        
        
        ?>
    </body>
</html>
