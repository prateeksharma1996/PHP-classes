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
        $myfile=fopen("PQR","r") or die("File not found");
      // echo fread($myfile,filesize("PQR"));
        echo fread($myfile,9);
       
        
        fclose($myfile);
        ?>
    </body>
</html>
