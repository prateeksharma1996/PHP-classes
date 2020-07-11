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
            Password<input type="Password" name="t1">
            <input type="submit" value="submit" name="sub">
        </Form>
        <?php
            if(isset($_GET['sub']))
            {
                $a=$_GET['t1'];
                $uc=0;
                $lc=0;
                $num=0;
                for($x=0;$x<strlen($a);$x++)
                {
                    $j=substr($a,$x,1);
                    if(ctype_upper($j))
                    {
                       $uc++; 
                    }
                    if(ctype_lower($j))
                    {
                        $lc++;
                    }
                    if(ctype_digit($j))
                    {
                        $num++;
                    }
                            
                    
                }
                //echo $uc." " .$lc." ".$num."<br>";
                if($uc<1 || $lc<1 || $num<1)
                {
                    if($uc<1)
                    {
                        echo "At least one upper case letter required<br>";
                    }
                    if($lc<1)
                    {
                        echo "At least one lower case letter required<br>";
                    }
                    if($num<1)
                    {
                        echo "At least one digit required<br>";
                    }
                    //echo "The password should contain at least one upper case letter ,one lower case letter and a digit";
                }
                else
                {
                    echo "Strong password";
                }
                
            }
        ?>
    </body>
</html>
