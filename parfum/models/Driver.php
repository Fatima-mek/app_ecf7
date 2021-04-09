<?php

abstract class Driver{

    private static $bd;
    /**
     * Get the value of bd
     */ 
    private static function getBd()
    {
        if(self::$bd === null){
            try{
                self::$bd = new PDO('mysql:host=localhost; dbname=best_perfumes', 'root','');
                
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        return self::$bd;
    }

    protected function getRequest($sql, $params = null){
        $result = self::getBd()->prepare($sql);
        $result->execute($params);

        return $result;
    }

}