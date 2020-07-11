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
        
        //user defined exception 
        function CheckNum($number)
        {
            if(!($number>=1 && $number<=10))
            {
                throw new Exception("Value of given number should be 1 to 10");
            }
            echo "Your number is ".$number."<br>";
        }
        
        
        
        
        ?>
           <form>
            Enter file name to display data <input type="text" name="t1"><br>
            <input type="submit" value="show" name="sub">
        </form>
        <?php
        if(isset($_GET["t1"]))
        {
            $x=$_GET['t1'];
            try {
                //check num must be given in try catch block because it is throwing an exception
                CheckNum($x);
            } catch (Exception $ex) {
                echo $ex->getMessage();
            }
            
            
        }
            
            
            
            
            
            ?>
    </body>
</html>
