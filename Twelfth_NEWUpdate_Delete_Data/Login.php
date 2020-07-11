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
        <Form><Center><h3>User Login</h3>
            Login Id::<input type="text" name="t1"><br>
            Password::<input type="password" name="t2"><br>
            <input type="submit" value="Login">
        </Form>
        <?php
        include("User.php");
        ?>
        <?php
        session_start();
        if(isset($_GET['t1']))
        {
            $u=$_GET['t1'];
            $p=$_GET['t2'];
            
            
            
        
            $db=  mysql_connect("localhost","root","root")or die(mysql_error($db));
        mysql_select_db("Prateek",$db) or die(mysql_error($db));
        $query="Select * from user  where uid='".$u."' and upass='".$p."'";
        $result=  mysql_query($query,$db) or die(mysql_error($db));
       
         if($row=mysql_fetch_array($result))
        {
            $code=$row[0];
            $name=$row[1];
            $address=$row[2];
            $dos=$row[3];
            $mobileno=$row[4];
            $uid=$row[5];
            $upass=$row[6];
     $usr=new User($code,$name,$address,$dos,$mobileno,$uid,$upass);
       $x=  serialize($usr);
                $_SESSION["User"]=$x;
                header("location:Welcome.php");
                
        }
        else
        {
            echo "Record not found";
        }
        }
        ?>
</center>
    </body>
</html>
