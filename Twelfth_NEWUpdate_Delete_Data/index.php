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
        
        <Form>
            Enter rollno : <input type="text" name="t1"><br>
            <Input type="Submit" name="sub">
            
            
        </Form>
        
        
        <?php
            if(isset($_GET['sub']))
            {
                $a=$_GET['t1'];
                $db=mysql_connect("localhost", "root", "root");
                mysql_select_db("Prateek",$db);
               $query="Delete from student where rollno=".$a;
        $result=  mysql_query($query,$db) or die(mysql_error($db));
        if($result==TRUE)
             {
                echo "Record Deleted Successfully";
             }
         else
             {
                 echo "Record could not be deleted";
            }
      
                
            }
        
        
        ?>
    </body>
</html>
