<?php 
class crudTexto{  
 
  private $pdo = null;  
  private static $crudTexto = null; 
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  public static function getInstance($conexao){   
   if (!isset(self::$crudTexto)):    
    self::$crudTexto = new crudTexto($conexao);   
   endif;   
   return self::$crudTexto;    
  }  
  public function update($txt_texto, $txt_id, $txt_secao){   
   
    try{   
     $sql = "UPDATE tbl_textos SET txt_texto=? WHERE txt_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $txt_texto);    
     $stm->bindValue(2, $txt_id);   
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento_textos/".$txt_secao."';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";   
    }   
 
  }  
  
  public function getAllTextoBySecao($secao){   
   try{   
    $sql = "SELECT * FROM tbl_textos where txt_secao = ?";   
    $stm = $this->pdo->prepare($sql);  
    $stm->bindValue(1, $secao); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro: {$erro->getMessage()}');</script>"; 
   }   
  }   

  public function getAllTextobyID($id){   
   try{   
    $sql = "SELECT * FROM tbl_textos where txt_id = ?";   
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