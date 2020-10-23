<?php
    $pdo=null;
    $host="localhost";
    $user="root";
    $password="";
    $db="ApiPhp";

    function conectar(){
        try{
            $GLOBALS['pdo'] = new PDO("mysql:host=".$GLOBALS['host'].";dbname=".$GLOBALS["db"]."", $GLOBALS['user'], $GLOBALS['password']);
            $GLOBALS['pdo'->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)]
        }catch(PDOException $e){
            print "error!: No se pudo conectar a la bd ".$db."<br>/";
            print "\nError!: ".$e."<br/>";
            die();
        }
    }

    function desconectar(){
        $GLOBALS['pdo']=null;
    }


?>