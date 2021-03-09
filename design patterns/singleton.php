<?php
   class database {
      public static $connection;
      private function __construct(){
         echo "connection created";
      }
      public function connect(){
         if(!isset(self::$connection)){
            self::$connection = new database();
         }
         return self::$connection;
      }
   }
   $db = database::connect();
   $db2 = database::connect();
?>