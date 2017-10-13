<?php
  if(!defined('__CONFIG__')) {
    exit('Du har ikke definert en konfigurasjonsfil');
}


  class DB {

    protected static $con;

    private function __construct() {

      try {

        self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=php_login', 'root', '****' );
        self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

      } catch (PDOException $e){
          echo "Could not connect to database"; exit;
      }
    }

    public static function getConnection() {

      if (!self::$con) {
        new DB();
      }

      return self::$con;
    }

  }

?>
