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
        <h1>Hello world</h1>
        <?php
        if(isset($_COOKIE['Visit']))
        {
            $c=$_COOKIE['Visit'];
            $c=$c+1;
            
                
            echo "You have visited this site ".$c. " Times";
            setcookie("Visit",$c,time()+60*60*24*5);
        }
        else
        {
            setcookie("Visit", "1", time()+60*60*24*5);
            echo "Your have visited this site 1 time";
        }
        ?>
        
        
    
        
        
        
        
    </body>
</html>
