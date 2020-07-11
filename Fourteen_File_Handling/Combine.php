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
         $myfile1=fopen("First","r") or die("File not found");
         $myfile2=fopen("Second","r") or die("File not found");
            $myfile3= fopen("Manali.txt","w") or die("Error");
            
         fwrite($myfile3,fread($myfile1,filesize("First")));
          fwrite($myfile3,fread($myfile2,filesize("Second")));
          fclose($myfile1);
          fclose($myfile2);
          fclose($myfile3);
          
         echo "Both files data written in  third file";
         
         
        ?>
    </body>
</html>
