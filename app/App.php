<?php
/**
 * Created by PhpStorm.
 * User: NF11
 * Date: 01/03/2018
 * Time: 03:34
 */

namespace App;


class App{

    const DB_NAME = 'tuto';
    const DB_USER = 'root';
    const DB_PASS = '';
    const DB_HOST = 'localhost';

    private static $database;

    /**
     * @return mixed
     */
    public static function getDB()
    {
        if (self::$database === null){
            self::$database = new DataBase(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
        }
        return self::$database;
    }
}