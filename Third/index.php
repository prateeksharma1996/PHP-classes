<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <Script language="JavaScript">
     /*   
        alert("Have a good day");
        a=eval(prompt("Enter a number"));
        document.write(a);
        f=1;
        for(i=1;i<=a;i++)
        {
            f=f*i;
            
        }
        alert("Factorial is "+f+"<br>");
        document.write(f+"<br>");
        
        
        */
        
        </Script>
    <body>
        <?php
        //Function without parameter
            function greet()
            {
                echo "<br>Hello World"."<br>";
            }
            greet();
            //Function with parameter
            function LCM($a,$b)
            {
                for($i=$a;$i<=$b*$a;$i++)
                {
                    if($i%$a==0  && $i%$b==0)
                    {
                        break;
                    }
                }
                echo "<BR>LCM is ".$i."<br>";
            }
            
            
        ?>
        <?php 
        
        echo "Today ".date('d')."-".date('m')."-".date('y');
        greet();
        
        LCM(12,4);
        LCM(5,7);
        
        ?>
        
    </body>
</html>
