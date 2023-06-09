<?php


class MysqlManager implements DatabaseManager{

    protected static $conn;

    private function __construct(){}

    public static function establish(){
        if(!self::$conn){
            try{
                self::$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD , DB_DATABASE);
                mysqli_set_charset(self::$conn,"utf8");
                $sql = file_get_contents($_SERVER['DOCUMENT_ROOT'] ."/../initalize.sql");
                if (!self::$conn->multi_query($sql))                
                    throw new Exception("Table creation failed");
 
            }catch (Exception $exp){
            }finally{
                return self::$conn;
            }
        }
        return self::$conn;
    }
    public static function connect(){
        self::$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD , DB_DATABASE);
        return self::$conn;
    }
    public static function disconnect(){
        if(self::$conn){
            mysqli_close(self::$conn);
            self::$conn = null;
        }
    }
}