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
        echo "Welcome";
        echo"<Br>";
        if(isset($_POST['t1']))
        {
            echo "Your id is ".$_POST['t1'];
            echo"<Br>Your password is ".$_POST['t2'];
        }
        
        
        
        ?>
    </body>
</html>
