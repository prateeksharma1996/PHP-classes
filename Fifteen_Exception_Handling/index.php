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
       // echo readfile("Test1") or die("Error");
        
        
        
        
        
        echo readfile("Test1") or die("Error");
         echo "Hello<br>";
         echo file_exists("Test");
         echo "<br>.......";
         echo (21>3);//for true it returns 1 else nothing
         echo "<br>";
         echo 9>10;
         echo "<br>";
         if(!file_exists("Test1"))
         {
            die("Error in opening file") ;
         }
         else
         {
             $file=fopen("Test1.txt","r");
         }
         
         
        ?>
    </body>
</html>
