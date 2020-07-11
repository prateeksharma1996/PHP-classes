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
        <h1>INSERT EMPLOYEE DATA</h1>
        <form>
            Code:<input type="text" name="e1"><br>
            Name:<input type="text" name="e2"><br>
            Salary:<input type="text" name="e3"><br>
            Date of Joining:<input type="text" name="e4"><br>
            Job Designation:<input type="text" name="e5"><br>
            <input type="submit" name="sub" value="Insert"><br>
        </form>
        <?php
        if(isset($_GET['e1']))
        {
        $db=  mysql_connect("localhost","root","")or die(mysql_error($db));
        mysql_select_db("anjna",$db) or die(mysql_error($db));
        $a="'".$_GET['e1']."'";
        $b="'".$_GET['e2']."'";
        $c=$_GET['e3'];
        $d="'".$_GET['e4']."'";
        $e="'".$_GET['e5']."'";
        
        
        
        
        
        
        
        $query="insert into emp values(".$a.",".$b.",".$c.",".$d.",".$e.")";
     $x=  mysql_query($query,$db) or die(mysql_error($db));
        if($x == TRUE)
            echo "Record inserted";
        else {
            
echo "record not inserted";}
        
        
        
        
        }
        ?>
    </body>
</html>
