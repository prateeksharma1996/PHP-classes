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
        //heredoc-Avoids Double quotes
        //End Heredoc must be the first word of line
        $a= <<<ABC
                My name is Anjna<br>
                "How r u"
                Hello R u All<br>
                
                
                
ABC;
                
        echo $a;
      
        
        ?>
    </body>
</html>
