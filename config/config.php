<?php

try{
    if(!defined('HOSTNAME')) define("HOSTNAME","localhost:3307");
    if(!defined('DBNAME')) define("DBNAME","homeland");
    if(!defined('USER')) define("USER","root");
    if(!defined('PASS')) define("PASS","");

    $conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // if($conn==true){
    //     echo"DB Connected";
    // }
    } catch(PDOException $e){
        die("DB Connection Failed: ". $e->getMessage()); 
    }

    