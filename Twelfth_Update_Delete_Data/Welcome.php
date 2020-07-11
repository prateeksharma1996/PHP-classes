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
            include("User.php");
        ?>
        <?php
        session_start();
        if(isset($_SESSION['User']))
        {
                $x=  unserialize($_SESSION['User']);
                echo "<B>Welcome :".$x->getName()."</b>";
                echo "<div align=right><a href='Update_Profile.php'>Update Profile</a></div>";
               
        }
        else
        {
            header("location:Login.php");
        }
     ?>
    </body>
</html>
