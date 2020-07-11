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
            //$a=array("Anjna","Meena","Teena");
           // print_r($a);
     //   $b=array("Anjna"=>"Teacher","Manali"=>"Student");
      //  print_r($b);
        ?>
        
     <form method="post" enctype="multipart/form-data">
            Select a file<input type="file" name="up"><br>
            <input type="submit" name="submit" value="Upload">
            
        </form>
        
        
        <?php
       if(isset($_POST['submit']))
       {
           // no file selected
           if($_FILES['up']['size']!=0)
           {
               print_r($_FILES['up']);
               echo "<br>";
               
               echo "Size of file is ". $_FILES['up']['size']."<br>";
               echo "Name of file is ".$_FILES['up']['name']."<br>";
               echo "Type of file is ".$_FILES['up']['type']."<br>";
               echo "Error in file are ".$_FILES['up']['error']."<br>";
               echo "Temporary name is ".$_FILES['up']['tmp_name']."<br>";
               
           }
           else
           {
               echo "Please select a file";
           }
       }
        
        ?>
    </body>
</html>
