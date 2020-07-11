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
       global $db;
        error_reporting(0);
           
           $db= mysql_connect("localhost","root","root") or die('could not connect server');
        ?>
    </body>
</html>
