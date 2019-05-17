<?php      

  define('HOST', 'mysql01.amfar.com.br');   

  define('DBNAME', 'amfar');   

  define('CHARSET', 'utf8');   

  define('USER', 'amfar');   

  define('PASSWORD', 'amf10web20');   

  class Conexao {  

    private static $pdo;  

   

   private function __construct() {   

      

   }    

   public static function getInstance() {   

    if (!isset(self::$pdo)) {   

     try {   

      $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);   

      self::$pdo = new PDO("mysql:host=" . HOST . "; dbname=" . DBNAME . "; charset=" . CHARSET . ";", USER, PASSWORD, $opcoes);

      self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   

     } catch (PDOException $e) {   

      print "Erro: " . $e->getMessage();   

     }   

    }   

    return self::$pdo;   

   }   

  }  

?>

