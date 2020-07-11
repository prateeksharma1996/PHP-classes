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
      
       //echo fopen("Manali.txt","w") or die ("Error");  //echo will return 1 if file is created successfully
       $myfile= fopen("Manali.txt","a") or die("Error");
        $rollno=101;
        $name="Manali";
        $Fees=12000;
        fwrite($myfile,$rollno);
        fwrite($myfile,"\n");
        fwrite($myfile,$name);
        fwrite($myfile,"\n");
        fwrite($myfile,$Fees);
        fwrite($myfile,"\n");
        
        fclose($myfile);
        echo "Data Written in the file";
        
        
        ?>
    </body>
</html>
