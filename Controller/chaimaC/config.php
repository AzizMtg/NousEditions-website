<?php

class config
{
    private static $pdo = NULL ; 
    public static  function getconexion()
    {
     if (!isset(self::$pdo))
     {
        try
        {
             self::$pdo = new PDO('mysql:host=localhost;dbname=nous editions','root' ,'',
             [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
             ]);
            
             echo "connecte" ; 
        }

        catch (PDOException $e)
        {
            die ('Erreur:'.$e->getMessage());
        }
    }
    return self::$pdo;
    }
}
//$f =new config() ; 
//$f->getconexion(); ;





?>