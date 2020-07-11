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
       $a="";
       $b="";
       $c="";
      
       if(isset($_COOKIE["rem_me"]))
       {
           $c=$_COOKIE["rem_me"];
           if($c=="1")
           {
           if(isset($_COOKIE['UName']))
           {
               $a=$_COOKIE['UName'];
           }
           if(isset($_COOKIE['UPass']))
           {
               $b=$_COOKIE['UPass'];
           }
           }
       }
       
       
        ?>
        <h3>Welcome</h4>
        <h5>User login</h5>
        <Form>
            Enter Name <Input type="Text" name="t1" value="<?php echo $a;?>"><br>
            Password<input type="Password" name="t2" value="<?php echo $b;?>"><br>
        
            
       
        <?php
       /* if(isset($_GET['t1']))
        {
            
        }
        else
        {*/

            if(isset($_COOKIE['rem_me']))
            {
                $c=$_COOKIE['rem_me'];
            }
            //Checkbox value is set when you click on checkbox
                if($c=="1")
                {
                echo "<input type=checkbox checked name=c1 value=0>Remember Me";
                }
                else
                {
                    echo "<input type=checkbox name=c1 value=0>Remember Me";
                    
                }
                echo "<br><input type=submit value=login name=sub></form>";
            
        
        
        
        ?>
        
        <?php

        if(isset($_GET["sub"]))
        {
            //$p=$_GET["c1"];
            if($_GET["c1"]=="0")
            {
                
                setcookie("rem_me","1",time()+60*60*2*24);
                setcookie("UName",$_GET["t1"],time()+60*60*2*24);
                setcookie("UPass",$_GET["t2"],time()+60*60*2*24);
                
            }
          else
            {
                setcookie("rem_me","0",time()+60*60*2*24);
                  setcookie("UName","",time()+60*60*2*24);
                setcookie("UPass","",time()+60*60*2*24);
            }
          // if($_GET['t1']=="anjna" && $_GET['t2']=="tulsiani")
           header("location:Welcome.php");
           // else
          //  echo "Invalid user try again";
          
            
            
                    
        }
   
        
        
        ?>
        
        
        
        
    </body>
</html>
