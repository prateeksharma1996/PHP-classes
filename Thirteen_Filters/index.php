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
             $address="Anjna@yahoo.com";
             $address1="Anjna tulsiani";
             $url="http://www.google.com";
             if(filter_var($address,FILTER_VALIDATE_EMAIL))
             {
                 echo "Yes it is a valid email address";
             }
             else
             {
                 echo "No it is not a valid email address";
             }
             echo "<BR>";
             if(filter_var($address1,FILTER_VALIDATE_EMAIL))
             {
                 echo "Yes it is a valid email address";
             }
             else
             {
                 echo "No it is not a valid email address";
             }
          echo "<br>";
         
            if(filter_var($url,273))
            // if(filter_var($url,FILTER_VALIDATE_URL))
             {
                 echo "Yes it is a valid URL";
             }
             else
             {
                 echo "No it is not a valid URL";
             }
             
        ?>
    </body>
</html>
