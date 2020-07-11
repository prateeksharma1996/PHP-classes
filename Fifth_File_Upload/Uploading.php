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
                if($_FILES['up']['size']<=800000)
                {
                    if($_FILES['up']['type']=="image/jpeg"|| $_FILES['up']['type']=="image/bmp" ||$_FILES['up']['type']=="image/gif"||$_FILES['up']['type']=="image/png")
                    {
                        move_uploaded_file($_FILES['up']['tmp_name'], "Uploaded/".$_FILES['up']['name']);
                        echo "File uploaded successfully";
                    }
                    else
                    {
                        echo "Please select an image file";
                    }
 
                }
                else
                {
                    echo "File size exceeds";
                }
               
           }
           else
           {
               echo "Please select a file";
           }
       }
       ?>
    </body>
</html>
