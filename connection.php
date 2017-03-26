<?php
  class Db {
    private static $instance = NULL;
    private function __construct() {}
    private function __clone () {}

    public static function getInstance(){
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ATTR_ERRMODE_EXCEPTION;

        $host   = Secrets::getDbHost();
        $dbname = Secrets::getDbName();
        $user   = Secrets::getDbUser();
        $pass   = Secrets::getDbPass();

        self::$instance = new PDO('mysql:host='. $host .';dbname=' . $dbname, $user, $pass, $pdo_options);
      }
      return self::$instance;
    }
  }
?>
