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
    <body><B>
        <form>
            Enter number<input type="text" name="t1"><br>
            <input type="Submit"><br>
        </form>
        
        <?php
        
        if(isset($_GET['t1']))
        {
            if(isset($_GET['t1'])){
                $f=1;
                for($i=1;$i<=$_GET['t1'];$i++)
                {
                    $f=$f*$i;
                }
                echo "<br>Factorial is ".$f;
            }
        }
        
        
        ?></B>
        <Br>
        <?php
        $i=1;
        do
        {
                echo $i."<br>";
                $i++;
        }while($i<=5);
        
        
        
        
        
        ?>
    </body>
</html>
