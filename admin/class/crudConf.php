<?php 
/*  
 * Classe para operações CRUD na tabela ARTIGO   
 */
class crudConf{  

  /*  
   * Atributo para conexão com o banco de dados   
   */  
  private $pdo = null;  

  /*  
   * Atributo estático para instância da própria classe    
   */  
  private static $crudConf = null; 

  /*  
   * Construtor da classe como private  
   * @param $conexao - Conexão com o banco de dados  
   */  
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  /*
  * Método estático para retornar um objeto crudConf    
  * Verifica se já existe uma instância desse objeto, caso não, instância um novo    
  * @param $conexao - Conexão com o banco de dados   
  * @return $crudConf - Instancia do objeto crudConf    
  */   
  public static function getInstance($conexao){   
   if (!isset(self::$crudConf)):    
    self::$crudConf = new crudConf($conexao);   
   endif;   
   return self::$crudConf;    
  } 
   /*   
  * Metodo para edição de registros   
  * @param $conf_item1 - Valor para o campo valor 1   
  * @param $conf_item2 - Valor para o campo valor 2   
  * @param $conf_status  - Valor para o campo status   
  * @param $conf_id   - Valor para o campo id   
  */   
  public function update($cont_texto, $cont_id){   
   
    try{   
     $sql = "UPDATE tbl_contato SET cont_texto=? WHERE cont_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $cont_texto);    
     $stm->bindValue(2, $cont_id);   
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento-contato';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";   
    }   
 
  }  

  /*   
  * Metodo para consulta de configurações   
  * @return $dados - Array com os registros retornados pela consulta   
  */   
  public function getAllConf(){   
   try{   
    $sql = "SELECT * FROM tbl_contato";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}');</script>"; 
   }   
  }   
  /*   
  * Metodo para consulta de configurações de acordo com o id   
  * @return $dados - Array com os registros retornados pela consulta   
  */   
  public function getAllConfbyID($id){   
   try{   
    $sql = "SELECT * FROM tbl_contato where cont_id = ?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   } catch (PDOException $ex) {
    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();
   }  
  }   
 }  