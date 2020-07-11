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
        <form>
            Qualified<input type="Checkbox" name="a1" value="100"><br>
            <input type="submit" name="sub">
        </form>
        <?php
   if(isset($_GET['sub']))
   {
       
       $a=$_GET['a1'];
       if($a!=null)
       {
           echo "Hi";
       }  else {
       echo "Bye";    
       }
       
       
       echo $_GET['a1'];
   }
        ?>
    </body>
</html>
