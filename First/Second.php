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
      echo "<BR><B>"
        ?>
        <?php
        if(isset($_GET['Sname']))
        {
        echo "Your first parameter is ". $_GET['Sname'];
        echo "<BR>Your second  parameter is ".$_GET['Num'];
        }
        echo"</B>";
        ?>
    </body>
</html>
