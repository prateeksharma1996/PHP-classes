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
                private $Uid;
                private $Uname;
                private $Upass;
                public function User($a,$b,$c)
                {
                    $this->Uid=$a;
                    $this->Uname=$b;
                    $this->Upass=$c;
                }
                public function setUid($a)
                {
                    $this->Uid=$a;
                }
               public  function setUname($b)
                {
                    $this->Uname=$b;
                }
                public function setUpass($c)
                {
                    $this->Upass=$c;
                }
                public function getUid()
                {
                    return $this->Uid;
                }
                public function getUname()
                {
                    return $this->Uname;
                }
               public function getUpass()
                {
                    return $this->Upass;
                }
               
        }
        ?>
    </body>
</html>
