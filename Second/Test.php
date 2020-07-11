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
    <body bgcolor="pink">
        <div>
        <?php
       // echo "<div style='height:300'>";
            include("Header.php");
          //  echo"</div>";
            
            
            
        ?>
            <?php
             //Multidimention array
            echo "<div style=Background-color:cyan;height:400px;Font-family:Jokerman>";
    echo "<br><br>Multi Dimention array<br><br>";
    $c=array(
        array("Manali",79,90,99),
        array("Prateek",90,95,100),
        array("Pinky",80,90,99)
    );
    
    
    
      
      
      
      
      
        ?>
        <Table border="2">
            <caption>Student Data</caption>
            <tr>
                <th>Name</th>
                <th>Physics</th>
                <th>Maths</th>
                <th>Chemistry</th>
            </tr>
            <?php
           
            for($i=0;$i<3;$i++){
             echo "<Tr>";
                for($j=0;$j<=3;$j++)
                {
                    echo "<td>".$c[$i][$j]."</td>";
                }
                echo"</tr>";
            }
            echo"</table>";
            
            
       
            
            ?>
            <?php
            include("footer.php");
            ?>
        </div>
            
    </body>
</html>
