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
        //Function returning a value
function Factorial($a)
{
    $f=1;
    for($i=1;$i<=$a;$i++)
    {
        $f=$f*$i;
    }
    return $f;
    
    
}
        
        
        
        ?>
        <form method="POST">
            Enter a number <input type="text" name="t1"><br>
            <input type="Submit" value="Show">
        </form>
        
        
        <?php
        if(isset($_POST['t1']))
        {
            echo "Factorial is ".Factorial($_POST['t1']);
             
                
        }
        
        
        
        ?>
        
        
        
        
        
        
    </body>
</html>
