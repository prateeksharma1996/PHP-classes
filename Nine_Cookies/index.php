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
        //is there any cookie made by this site ,i.e. the count of cookies is >0
            if(count($_COOKIE)<=0)
            {
                echo "Cookies are not enabled in this site";
            }
            else
            {
                echo "Cookies are enabled in this site";
            }
        ?>
        <?php
        //persistant cookies(With time )
        //session cookies 
        //2 days
        setcookie("First", "Anjna",time()+60*60*24*2);
        ?>    </body>
</html>
