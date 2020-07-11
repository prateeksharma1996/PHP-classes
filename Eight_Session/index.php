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
        <form>
            User name <input type="text" name="t1"><br>
            password <input type="password" name="t2"><br>
            <input type="submit" value="Login">
        </form>
        <?php
        session_start();
            if(isset($_GET['t1']))
            {
                $i=1;
                $n=$_GET['t1'];
                $p=$_GET['t2'];
                $u=new User($i,$n,$p);
                $x=  serialize($u);
                $_SESSION["Usr"]=$x;
                header("location:Userpage.php");
                
            }
            
        ?>
        
        
        
        
    </body>
</html>
