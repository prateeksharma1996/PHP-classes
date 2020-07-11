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
        <?php include("DataConnect.php");?>
        
        <?php
           global $db;
           error_reporting(0);
           
          // $db= mysql_connect("localhost","root","root") or die('could not connect server');
            $query="Create database if not  exists Manali";
            mysql_query($query,$db) or die('could not create database');
            echo "Database successfully created";
            mysql_select_db('Manali',$db);
            $query="create table if not exists emp (ecode int,ename varchar(10),salary float(7,2))";
            mysql_query($query,$db) or die('could not create table');
            echo "<br>Table created successfully";
         $query="insert into emp(ecode,ename,salary) values(101,'Amit',80000),(102,'Rohit',87000),(103,'Teena',70000)";
            
           mysql_query($query,$db) or die('Error in inserting record');
          echo "<br>Data inserted successfully";
            
            
            
      
       
               
       
       
        
        
        
        
        ?>
    </body>
</html>
