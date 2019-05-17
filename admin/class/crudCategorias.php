<?php 
/*  
 * Classe para operações CRUD na tabela SLIDES   
 */
class crudCategoria{  

  /*  
   * Atributo para conexão com o banco de dados   
   */  
  private $pdo = null;  

  /*  
   * Atributo estático para instância da própria classe    
   */  
  private static $crudCategoria = null; 

  /*  
   * Construtor da classe como private  
   * @param $conexao - Conexão com o banco de dados  
   */  
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  /*
  * Método estático para retornar um objeto crudCategoria    
  * Verifica se já existe uma instância desse objeto, caso não, instância um novo    
  * @param $conexao - Conexão com o banco de dados   
  * @return $crudCategoria - Instancia do objeto crudCategoria    
  */   
  public static function getInstance($conexao){   
   if (!isset(self::$crudCategoria)):    
    self::$crudCategoria = new crudCategoria($conexao);   
   endif;   
   return self::$crudCategoria;    
  } 
 
  /*   
  * Metodo para inclusão de novos registros   
  * @param $categoria - Valor para o campo categoria   
  * @param $titulo - Valor para o campo titulo   
  * @param autor  - Valor para o campo autor   
  */   
  public function insert($cat_titulo){   
    try{   
     $sql = "INSERT INTO tbl_categorias (cat_titulo) VALUES (?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $cat_titulo);     
     $stm->execute();   
     echo "<script>alert('Categoria inserida com sucesso'); location.href='categorias';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro: {$erro->getMessage()}')</script>"; 
    }   
  
  } 
 
  /*   
  * Metodo para edição de registros   
  * @param $categoria - Valor para o campo categoria   
  * @param $titulo - Valor para o campo titulo   
  * @param autor  - Valor para o campo autor   
  * @param id   - Valor para o campo id   
  */   
  public function update($cat_titulo, $cat_id){   
    
    try{   
     $sql = "UPDATE tbl_categorias SET cat_titulo=? WHERE cat_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $cat_titulo);    
     $stm->bindValue(2, $cat_id);   
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso'); location.href='categorias';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";   
    }   
   
  }  

  /*   
  * Metodo para exclusão de registros   
  * @param id - Valor para o campo id   
  */   
  public function delete($id){   
    
    try{   
     $sql = "DELETE FROM tbl_categorias WHERE cat_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $id);   
     $stm->execute();   
     echo "<script>alert('Registro excluido com sucesso'); location.href='categorias';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";    
    }   
 
  } 
 
  /*   
  * Metodo para consulta de artigos   
  * @return $dados - Array com os registros retornados pela consulta   
  */   
  public function getAllCategorias(){   
   try{   
    $sql = "SELECT * FROM tbl_categorias order by cat_id desc";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>"; 
   }   
  }   
 }  