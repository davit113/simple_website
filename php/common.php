<?php

class DB{
    public static function connectDB(){
        static $dsn  = "mysql:host=localhost;dbname=ScandiwebDB";
        static $dbusername = "root";
        static $dbpassword = "";
        try{
            $pdo = new PDO($dsn, $dbusername, $dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $e){
            // die("connection failed: " . $e->getMessage());
            echo "connection failed: " . $e->getMessage();
        }
        return NULL;
    }

}

class Common extends DB {
    private static $productArr;

    public static function init(){
        $val = self::loadProduct();

    }

    private static function loadProduct(){
        $pdo = self::connectDB();
        if($pdo){

        }else{
            die("err cant connect DB -- in class Commom::loadProduct()");
        }
    }

}

