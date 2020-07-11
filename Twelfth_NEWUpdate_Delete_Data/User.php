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
       class User
       {
           private $code;
           private $name;
           private $address;
         
           private $mobileno;
             private $dos;
           private $uid;
           private $upass;
         public function User($a,$b,$c,$d,$e,$f,$g)  
         {
             $this->code=$a;
             $this->name=$b;
             $this->address=$c;
            
             $this->mobileno=$d;
              $this->dos=$e;
             $this->uid=$f;
             $this->upass=$g;
             
         }
           public function getCode()
           {
               return $this->code;
           }
           public function getName()
           {
               return $this->name;
           }
           public function getAddress()
           {
               return $this->address;
           }
           public function getDos()
           {
               return $this->dos;
           }
           public function getMobileno()
           {
               return $this->mobileno;
           }
           public function getUid()
           {
               return $this->uid;
           }
           public function getUpass()
           {
               return $this->upass;
           }
           
           
           
       }
        ?>
    </body>
</html>
