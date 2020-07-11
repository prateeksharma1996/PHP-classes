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
               // echo "<B>Welcome :".$x->getName()."</b>";
              //  echo "<div align=right><a href='Update_Profile.php'>Update Profile</a></div>";
                echo "Update";
                echo $x->getAddress();
        ?>       
        <form>
        Code :<input type="text" name="t1" readonly value=<?php echo $x->getCode();?>><br>
        Name :<input type="text" name="t2" value='<?php echo $x->getName();?>'><br>
        Address :<input type="text" name="t3" value='<?php echo $x->getAddress();?>'><br>
       Date of Submission :<input type="text" name="t4" value=<?php echo $x->getMobileno();?>><br>
        Mobile no :<input type="text" name="t5" value=<?php echo $x->getDos();?>><br>
        User Id: <input type="text" name="t6" readonly value=<?php echo $x->getUid();?>><br>
        Password :<input type="Password" name="t7" value=<?php echo $x->getUpass();?>><br>
        <input type="submit" value="Update" name="Sub">
        
        </form>
           <?php     
                
                
               
        }
        else
        {
            header("location:Login.php");
        }
        
        ?>
        <?php
      
        if(isset($_GET['Sub']))
        {
              $db=  mysql_connect("localhost","root","root")or die(mysql_error($db));
        mysql_select_db("Prateek",$db) or die(mysql_error($db));
        $a=$_GET['t1'];
        $b=$_GET['t2'];
        $c=$_GET['t3'];
        $d=$_GET['t4'];
        $e=$_GET['t5'];
        $f=$_GET['t6'];
        $g=$_GET['t7'];
        
        
        
        
        
        
      $query="Update User set Name='".$b."',Address='".$c."',Mobileno='".$e."',DOS='".$d."',upass='".$g."' where Code=".$a;
      echo $query;
      $usr=new User($a,$b,$c,$e,$d,$f,$g);
      $x=  serialize($usr);
               $_SESSION["User"]=$x;
               
      $result=  mysql_query($query,$db) or die(mysql_error($db));
       if($result==TRUE)
       {
           echo "<script language='JavaScript'>alert ('Record Updated');</script>";
           header("location:Welcome.php");
       }
       
      
        }
        ?>
        
        
        
    </body>
</html>
