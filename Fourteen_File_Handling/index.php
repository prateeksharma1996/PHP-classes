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
        function getNum()
        {
            return 100;
        }
        function getName()
        {
            echo "Anjna<br>";
        }
       // $x=getNum();
       // echo $x;
        
        echo getNum()."<br>";
        getName();
        
        echo getName();
        
        getNum();
        //readfile function if sucessfully reads a file then it return 1 
         readfile("ABC.txt") or die("Unable to open the file");
         
        
        
        ?>
    </body>
</html>
