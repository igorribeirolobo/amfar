<?php 
class crudDepoimentos{  
  private $pdo = null;   
  private static $crudDepoimentos = null; 
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  

  public static function getInstance($conexao){   
   if (!isset(self::$crudDepoimentos)):    
    self::$crudDepoimentos = new crudDepoimentos($conexao);   
   endif;   
   return self::$crudDepoimentos;    
  } 
 
  public function insert($dep_nome, $dep_texto, $dep_ocupacao){   
    try{   
     $sql = "INSERT INTO tbl_depoimentos (dep_nome, dep_texto, dep_ocupacao) VALUES (?,?,?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $dep_nome);     
     $stm->bindValue(2, $dep_texto);     
     $stm->bindValue(3, $dep_ocupacao);     
     $stm->execute();   
     echo "<script>alert('Depoimentos inserida com sucesso'); location.href='gerenciamento_depoimentos';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro: {$erro->getMessage()}')</script>"; 
    }   
  
  } 
 
  public function update($dep_nome, $dep_ocupacao, $dep_texto, $dep_id){   
    
    try{   
     $sql = "UPDATE tbl_depoimentos SET dep_nome=?, dep_texto=?, dep_ocupacao=? WHERE dep_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $dep_nome);     
     $stm->bindValue(2, $dep_texto);     
     $stm->bindValue(3, $dep_ocupacao);   
     $stm->bindValue(4, $dep_id);   
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso'); location.href='gerenciamento_depoimentos';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";   
    }   
   
  }  
 
  public function delete($dep_id){   
    
    try{   
     $sql = "DELETE FROM tbl_depoimentos WHERE dep_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $dep_id);   
     $stm->execute();   
     echo "<script>alert('Registro excluido com sucesso'); location.href='gerenciamento_depoimentos';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";    
    }   
 
  } 
  
  public function getAllDepoimentos(){   
   try{   
    $sql = "SELECT * FROM tbl_depoimentos order by dep_id desc";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>"; 
   }   
  }   

  public function getAllDepoimentosByID($dep_id){   
   try{   
    $sql = "SELECT * FROM tbl_depoimentos WHERE dep_id =?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $dep_id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>"; 
   }   
  }   
 }  