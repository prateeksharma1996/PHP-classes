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
        <!-- The form does not have any action ie URL to be redirected so the same page will be refreshed --> 
        <form  method="Post">
            <Center><B>Login form<br>
            Id <Input type="text" name="t1"><br>
            Password <Input type="Password" name="t2"><br>
            <input type="Submit" value="Login">
            <Input type="Reset" value="Clear">
            
            
        </form>
        <?php
               if(isset($_POST['t1']))
               {
                   if($_POST['t1']=='Anjna' && $_POST['t2']=="123")
                   {
                     
                   urlencode ("Fourth.php");
                   }
                   else
                   {
                       echo "<BR><B>Invalid user tru again</B>";
                   }
               }
        ?>
    </body>
</html>
