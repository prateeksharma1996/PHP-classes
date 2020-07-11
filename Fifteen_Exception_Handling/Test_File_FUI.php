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
        <form>
            Enter file name to display data <input type="text" name="t1"><br>
            <input type="submit" value="show" name="sub">
        </form>
        <?php
        if(isset($_GET["t1"]))
        {
            $x=$_GET['t1'];
            if(!file_exists($x))
            {
                die("file does not exists");
            }  else {
            readfile($x)   ;
            }
            
            
            
            
        }
        
        ?>
    </body>
</html>
