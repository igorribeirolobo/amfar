<?php 

class crudSlideSobre{  

  private $pdo = null;  

  private static $crudSlideSobre = null; 

  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  public static function getInstance($conexao){   
   if (!isset(self::$crudSlideSobre)):    
    self::$crudSlideSobre = new crudSlideSobre($conexao);   
   endif;   
   return self::$crudSlideSobre;    
  } 
 
  public function insert($ss_imagem, $ss_title, $ss_alt){   
     
    try{   
     $sql = "INSERT INTO tbl_slidesobre (ss_imagem, ss_title, ss_alt) VALUES (?, ?, ?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $ss_imagem);   
     $stm->bindValue(2, $ss_title);   
     $stm->bindValue(3, $ss_alt);      
     $stm->execute();   
     echo "<script>alert('Slide inserido com sucesso');location.href='gerenciamento_slidesobre';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}"; 
    }   
  
  } 
  
  
  public function update($ss_imagem, $ss_title, $ss_alt, $ss_id){      
    try{   
     $sql = "UPDATE tbl_slidesobre SET ss_title=?, ss_alt=?"; 
     if($ss_imagem != ''){
          $sql .= ", ss_imagem=?";
      }
      $sql .= "  WHERE ss_id=?";
     $stm = $this->pdo->prepare($sql);  
     $stm->bindValue(1, $ss_title);   
     $stm->bindValue(2, $ss_alt);   
     if($ss_imagem != ''){
         $stm->bindValue(3, $ss_imagem); 
         $stm->bindValue(4, $ss_id); 
     }else{
        $stm->bindValue(3, $ss_id);   
     }
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento_slidesobre';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}";   
    }   
  
  }   
  public function delete($ss_id){   
    try{   
     $sql = "DELETE FROM tbl_slidesobre WHERE ss_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $ss_id);   
     $stm->execute();
     return 1;  
    }catch(PDOException $erro){  
      $error = $erro->getMessage();
      return $error;  
    }   
     
  } 
  public function getAllSlidebyID($ss_id){   
   try{   
    $sql = "SELECT * FROM tbl_slidesobre where ss_id = ?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $ss_id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   } catch (PDOException $ex) {
    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();
   }  
  }   
  public function getAllSlides(){   
   try{   
    $sql = "SELECT * FROM tbl_slidesobre";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>"; 
   }   
  }   
 }  