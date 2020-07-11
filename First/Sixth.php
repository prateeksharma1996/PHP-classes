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
            Enter a number<Input type ="Text" name="t1"><br>
            <input type="Submit" value="Show">
            
            
        </Form>
        <BR>
        <BR>
        <BR>
        
        <?php
    /*  if(isset($_GET['t1']))
      {
          if($_GET['t1'] % 2==0)
          {
              echo "<br><B>Even no";
          }
          else
          {
              echo "<br><B>Odd no";
          }
                  
      }
        
       */
        
       if(isset($_GET['t1']))
      {
            $x=$_GET['t1'];
            switch($x)
            {
                case 1:
                    echo "One";
                    break;
                case 2:
                    echo "Two";
                    break;
                default:
                    echo "Invalid number";
                    break;
            }
      }
        
        
        
        ?>
        
        
        
        <Form>
            Enter a Name<Input type ="Text" name="t2"><br>
            <input type="Submit" value="Show">
            
            
        </Form>
        
        
        
         <?php
    
        
       
        
       if(isset($_GET['t2']))
      {
            $y=$_GET['t2'];
            switch($y)
            {
                case "Anjna":
                    echo "Teacher";
                    break;
                case "Manali":
                    echo "Student";
                    break;
                default:
                    echo "Other";
                    break;
            }
      }
        
        
        ?>
        
        
    </body>
</html>
