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
        //Session expiring
        if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
    // last request was more than 30 minutes ago
            echo "<script language='JavaScript'> alert('sorry session time out');</script>";
    session_unset();     // unset $_SESSION variable for the run-time 
    
    session_destroy();   // destroy session data in storage
    
    
    
    header("location:Login.php");
}
$_SESSION['LAST_ACTIVITY'] = time();
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
