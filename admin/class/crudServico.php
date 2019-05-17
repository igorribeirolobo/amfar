<?php 
class crudServico{  
  private $pdo = null;  
  private static $crudServico = null; 
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  public static function getInstance($conexao){   
   if (!isset(self::$crudServico)):    
    self::$crudServico = new crudServico($conexao);   
   endif;   
   return self::$crudServico;    
  } 
  
  public function insert($ser_imagem, $ser_titulo, $ser_descricao){   
    try{   
     $sql = "INSERT INTO tbl_servicos (ser_imagem, ser_titulo, ser_descricao) VALUES (?, ?, ?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $ser_imagem);   
     $stm->bindValue(2, $ser_titulo);   
     $stm->bindValue(3, $ser_descricao);   
     $stm->execute();   
     echo "<script>alert('Servico inserido com sucesso');location.href='gerenciamento_servicos';</script>";   
    }catch(PDOException $erro){   
     echo "<script>alert('Erro: {$erro->getMessage()}')</script>"; 
    }   
  
  } 
  
  public function update($ser_imagem, $ser_titulo, $ser_descricao, $ser_id){   
    try{   
     $sql = "UPDATE tbl_servicos SET ser_titulo=?, ser_descricao=?"; 
     if($ser_imagem != ''){
          $sql .= ", ser_imagem=?";
      }
      $sql .= "  WHERE ser_id=?";
     $stm = $this->pdo->prepare($sql);  
     $stm->bindValue(1, $ser_titulo);   
     $stm->bindValue(2, $ser_descricao);   
     if($ser_imagem != ''){
         $stm->bindValue(3, $ser_imagem); 
         $stm->bindValue(4, $ser_id); 
     }else{
        $stm->bindValue(3, $ser_id);   
     }
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento_servicos';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}";   
    }   
  
  }  

  public function delete($ser_id){   
     
    try{   
     $sql = "DELETE FROM tbl_servicos WHERE ser_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $ser_id);   
     $stm->execute();
     return 1;  
    }catch(PDOException $erro){  
      $error = $erro->getMessage();
      return $error;  
    }   
     
  } 
 
  public function getAllServicoByID($ser_id){   
   try{   
    $sql = "SELECT * FROM tbl_servicos where ser_id = ?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $ser_id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   } catch (PDOException $ex) {
    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();
   }  
  } 
   
  public function getAllServicos(){   
   try{   
    $sql = "SELECT * FROM tbl_servicos";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro: {$erro->getMessage()}')</script>"; 
   }   
  }   
 }  