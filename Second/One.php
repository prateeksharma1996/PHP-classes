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
      echo "<H1>Hello world</h1>";
      //Indexed Array
      $a=array(60,40,10,20);
      echo $a[2]."<br>";
     // $i=0;
   /*   for($i=0;$i<count($a);$i++)
      {
          echo $a[$i]."<br>";
      }*/
      
      
     foreach($a as $p)
     {
         echo $p."<br>";
     }
      
      sort($a);
foreach($a as $p)
     {
         echo $p."<br>";
     }    
     //Descending sorting
     rsort($a);
      foreach($a as $p)
     {
         echo $p."<br>";
     }   
      
      //Associative Array
     echo"<br><br>Associative array<br><br>";
     $b=array("Manali"=>83,"Prateek"=>75,"Teena"=>70);
     
     foreach($b as $x=>$y)
     {
         echo $x." scores ".$y."<br>";
     }
     asort($b);
      foreach($b as $x=>$y)
     {
         echo $x." scores ".$y."<br>";
     }
     arsort($b);
      foreach($b as $x=>$y)
     {
         echo $x." scores ".$y."<br>";
     }
     
      //Multidimention array
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
            
            
            
            
            ?>
            
            
            
            
            
            
            
            
            
            
        </Table>
        
        
    </body>
</html>
