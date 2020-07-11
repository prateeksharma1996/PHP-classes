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
        class Student
        {
            private $Rollno;
            private $Name;
            private $Fees;
            public function Student($r,$n,$f)
            {
                 $this->Rollno=$r;
                 $this->Name=$n;
                 $this->Fees=$f;
            }
            public function setRollno($r) {
                 $this->Rollno=$r;
            }
            public function setName($n)
            {
                 $this->Name=$n;
            }
            public function setFees($f)
            {
                 $this->Fees=$f;
            }
            public function getRollno()
            {
                return  $this->Rollno;
            }
            public function getName()
            {
                return  $this->Name;
            }
            public function getFees()
            {
                return  $this->Fees;
            }
            public function show()
            {
                echo "Rollno is ".$this->Rollno."<Br>";
                echo "Name is ". $this->Name."<br>";
                echo "Fees is ". $this->Fees."<br>";
            }
            
              
              
            
            
            
            
        }
        ?>
        
        <?php
        $x=new Student(101,"Amit",5000);
        $x->show();
        $x->setFees(7000);
        $x->setName("Amrit");
        $x->show();
        echo $x->getName();
        
        
        ?>
        
        
        
        
        
        
        
        
    </body>
</html>
