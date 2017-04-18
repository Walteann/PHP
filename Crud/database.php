<?php
class Database
{
    private static $Database = 'wal_banco' ;
    private static $host = 'localhost' ;
    private static $dbusuario = 'root';
    private static $dbsenha = '';
     
    private static $cont  = null;
     
    public function __construct() {
        die('A função init não é permitida');
    }
     
    public static function connect()
    {
       if ( null == self::$cont )
       {     
        try
        {
          self::$cont =  new PDO( "mysql:host=".self::$host.";"."dbname=".self::$Database, self::$dbusuario, self::$dbsenha); 
        }
        catch(PDOException $e)
        {
          die($e->getMessage()); 
        }
       }
       return self::$cont;
    }
     
    public static function disconnect()
    {
        self::$cont = null;
    }
}
?>