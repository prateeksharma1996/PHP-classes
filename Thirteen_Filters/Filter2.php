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
        <Table border="2" align="center">
               <tr><th>Filter<th>Id</tr>
        <?php
     
    
      foreach (filter_list() as $id=>$filter)
        {
            echo "<tr><td>".$filter."<td>".filter_id($filter)."</tr>";
                  
        }
        
        $S="<b><I><U>Hello World</U></I></B>";
       echo $S;
       echo "<br>";
        $S1=  filter_var($S,FILTER_SANITIZE_STRING);
        echo $S1;
        
        
        ?>
        </table>
    </body>
</html>
