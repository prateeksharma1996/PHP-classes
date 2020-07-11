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
        <!-- Class Selector -->
        <Style>
            
            .abc
            {
                color:red;
            }
            
            
            
            
            </style>
        
        
        
    </head>
    <body>
        <!--
        Country :<Select>
            <Option>India</option>
            <Option>China</option>
            <Option>Russia</option>
            <Option selected>USA</option>
            <Option>Canada</option>
        </select>
        -->
        
        <?php
        $nme=$pass=$country=$gender="";
        $nameerr=$passerr=$countryerr=$gendererr="";
        $err="";
        $c=array("Select","India","China","Russia","USA","Canada");
        
        if(isset($_POST['txtname']))
        {
            $nme=$_POST['txtname'];
            if(empty($nme))
            {
                $nameerr="Name is required";
                $err.="<LI>Name cannot be empty";
                
            }
        else {
            if(strlen($nme)<=2)
            {
                $nameerr="Name length cannot be less then or equals to 2";
                $err.="<LI>Wrong name length";
            }
     
            }
            
            $pass=$_POST['txtpass'];
            if(empty($pass))
            {
                $passerr="Password is required";
                $err.="<LI>password cannot be empty";
                
            }
        else {
            if(!(strlen($pass)>=5 && strlen($pass)<=8))
            {
                $passerr="Password length must be between 5 to 8 characters";
                $err.="<LI>Password length must be between 5 to 8 characters";
            }
     
            }
            $country=$_POST['country'];
            
          if($country=="Select")
           
            {
                $countryerr="Please select a country";
                $err.="<LI>Please Select a country";
            }
            $gender=$_POST['gen'];
            if(empty($gender))
            {
                $gendererr="Please select a gender";
                $err.="<LI>Gender is not selected";
                
            }
        
     
            
     
            
            
        
       
            
            
        }
        
        
        
        
        
        
        ?>
        
        
        <Form method="Post">
            <h3>Registration Form</h3>
            Name : <Input type="Text" name="txtname" value=<?php echo $nme;?> ><span class="abc"><?php echo $nameerr; ?> </span>
            <br>
            Password : <input type="password" name="txtpass" value=<?php echo $pass;?>> <span class="abc"><?php echo $passerr; ?> </span>
            <br>
            Country :<select name="country">
                <?php
                if($country==""|| $country=="Select")
                {
                foreach ($c as $k)
                {
                    echo "<option>".$k;
                }
                }
                else
                {
                    foreach($c as $k)
                    {
                        if($country==$k)
                        {
                            echo "<Option selected>".$k;
                        }
                        else
                        {
                            echo "<option>".$k;
                        }
                    }
                }
                
                
                ?>
                
                
            </select><span class="abc"><?php echo $countryerr;?></span>
            <br>
            Gender
            <?php
            if($gender=="")
            {
                
            echo "<input type=radio name=gen value=male>Male<input type=radio name=gen value=female>Female";
            
            ?>&nbsp;&nbsp;<span class="abc"><?php echo $gendererr; echo "</span>" ;
            
            }
            else
            {
            $gender=$_POST['gen'];
           if($gender=='male')
           {
                echo "<input type=radio name=gen value=male checked>Male<input type=radio name=gen value=female>Female";
           }
           else
           {
                echo "<input type=radio name=gen value=male>Male<input type=radio name=gen value=female checked>Female";
           }
            
            
            }?>
            <br>
            <input type="Submit" value="Register">
            
            
        </form>
        <?php
                if(isset($_POST['txtname']))
                    {
                            if(empty($err))
                            {
                                header("location:welcome.html");
                            }
                            else
                            {
                                echo "<UL class=abc>";
                                echo $err;
    
                             }
                            
                    }
        
        
        
        ?>
        
        
    </body>
</html>
