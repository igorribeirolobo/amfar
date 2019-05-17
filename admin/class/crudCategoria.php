<?php 
class crudCategoria{  
  private $pdo = null;  
  private static $crudCategoria = null; 
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  public static function getInstance($conexao){   
   if (!isset(self::$crudCategoria)):    
    self::$crudCategoria = new crudCategoria($conexao);   
   endif;   
   return self::$crudCategoria;    
  } 
  public function insert($cat_titulo){   
    try{   
     $sql = "INSERT INTO tbl_categorias (cat_titulo) VALUES (?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $cat_titulo);     
     $stm->execute();   
     echo "<script>alert('Categoria inserida com sucesso'); location.href='gerenciamento_categorias';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro: {$erro->getMessage()}')</script>"; 
    }   
  }
  public function update($cat_titulo, $cat_id){   
    try{   
     $sql = "UPDATE tbl_categorias SET cat_titulo=? WHERE cat_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $cat_titulo);    
     $stm->bindValue(2, $cat_id);   
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso'); location.href='gerenciamento_categorias';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";   
    }
  }  
  public function delete($id){   
    try{   
     $sql = "DELETE FROM tbl_categorias WHERE cat_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $id);   
     $stm->execute();   
     echo "<script>alert('Registro excluido com sucesso'); location.href='gerenciamento_categorias';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";    
    }   
  }   
  public function getAllCategoria(){   
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
  
   public function getAllCategoriaByID($cat_id){   
   try{   
    $sql = "SELECT * FROM tbl_categorias WHERE cat_id =?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $cat_id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>"; 
   }   
  } 
 }  