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
        $db=  mysql_connect("localhost","root","root")or die(mysql_error($db));
        mysql_select_db("Prateek",$db) or die(mysql_error($db));
        $query="Select * from student ";
        $result=  mysql_query($query,$db) or die(mysql_error($db));
        echo"<table border=2 align=center><caption>Data from Database</caption><tr><th>Rollno<th>Name<th>Fees<th>class</tr>";
        while($row=mysql_fetch_assoc($result))
        {
            $rno=$row['rollno'];
            $nme=$row['name'];
            $fee=$row['Fees'];
            $cls=$row['Class'];
            echo "<tr><td>$rno<td>$nme<td>$fee<td>$cls</tr>";
        }
        echo "</table>";
                
        ?>
    </body>
</html>
