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
        if(isset($_SESSION['Usr']))
        {
                $x=  unserialize($_SESSION['Usr']);
                echo "<B>Welcome :".$x->getUname();
                echo "<Br> Your id is ".$x->getUid();
        }
        else
        {
            header("location:index.php");
        }
     
  
     
        ?>
           <form>
               <input type=submit value="Next" name="sub"><br>
        <input type="Submit" value="Logout" name="logout">
        </form>
        <?php
        if(isset($_GET['sub']))
        {
            header("location:SecretPage.php");
        }
        
        
        ?>
        <?php
        if(isset($_GET['logout']))
        {
            session_abort();
            header("location:index.php");
            
        }
        
        
        ?>
    </body>
</html>
