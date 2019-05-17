<?php 
class crudParceiro{  
  private $pdo = null;  
  private static $crudParceiro = null; 
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  public static function getInstance($conexao){   
   if (!isset(self::$crudParceiro)):    
    self::$crudParceiro = new crudParceiro($conexao);   
   endif;   
   return self::$crudParceiro;    
  } 
  
  public function insert($par_imagem, $par_nome, $par_link){   
    try{   
     $sql = "INSERT INTO tbl_parceiros (par_imagem, par_nome, par_link) VALUES (?, ?, ?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $par_imagem);   
     $stm->bindValue(2, $par_nome);   
     $stm->bindValue(3, $par_link);    
     $stm->execute();   
     echo "<script>alert('Parceiro inserido com sucesso');location.href='gerenciamento_parceiros';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}"; 
    }   
  
  } 
  
  public function update($par_imagem, $par_nome, $par_link, $par_id){   
    try{   
     $sql = "UPDATE tbl_parceiros SET par_nome=?, par_link=?"; 
     if($par_imagem != ''){
          $sql .= ", par_imagem=?";
      }
      $sql .= "  WHERE par_id=?";
     $stm = $this->pdo->prepare($sql);  
     $stm->bindValue(1, $par_nome);   
     $stm->bindValue(2, $par_link);    
     if($par_imagem != ''){
         $stm->bindValue(3, $par_imagem); 
         $stm->bindValue(4, $par_id); 
     }else{
        $stm->bindValue(3, $par_id);   
     }
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento_parceiros';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}";   
    }   
  
  }  

  public function delete($par_id){   
     
    try{   
     $sql = "DELETE FROM tbl_parceiros WHERE par_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $par_id);   
     $stm->execute();
     return 1;  
    }catch(PDOException $erro){  
      $error = $erro->getMessage();
      return $error;  
    }   
     
  } 
 
  public function getAllParceiroByID($par_id){   
   try{   
    $sql = "SELECT * FROM tbl_parceiros where par_id = ?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $par_id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   } catch (PDOException $ex) {
    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();
   }  
  } 
   
  public function getAllParceiros(){   
   try{   
    $sql = "SELECT * FROM tbl_distribuicao";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro: {$erro->getMessage()}')</script>"; 
   }   
  }   
 }  