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
        <?php include("DataConnect.php");?>
        <?php
       global $db;
       mysql_select_db('Manali',$db);
       $query="Select * from emp";
       $result=mysql_query($query,$db) or die('Error');
       echo "<table border=2>";
          while($row=mysql_fetch_array($result))
        {
            $c=$row[0];
            $nme=$row[1];
            $s=$row[2];
            
        
            echo "<tr><td>$c<td>$nme<td>$s</tr>";
        }
       echo "</table>";
       $a=10;
       $b=20;
       echo $a==$b;// no  output wheh false
       $b=10;
          echo "<br>";
       echo $a==$b;// return 1 when true
       $a=100;
       $b='100';
       echo "<br>";
       echo $a==$b;
          echo "<br>";
       echo "$a";
          echo "<br>";
      echo $a===$b;//Data type compare  (int +string)
      echo"<br>";
      echo $a!==$b;//Data type compare not equals to (int +string)
      
       
        ?>
    </body>
</html>
