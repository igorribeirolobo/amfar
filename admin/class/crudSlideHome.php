<?php 

class crudSlideHome{  

  private $pdo = null;  
  private static $crudSlideHome = null; 
  private function __construct($conexao){  
    $this->pdo = $conexao;  
  }  
  
  public static function getInstance($conexao){   
   if (!isset(self::$crudSlideHome)):    
    self::$crudSlideHome = new crudSlideHome($conexao);   
   endif;   
   return self::$crudSlideHome;    
  } 
  
  public function insert($sh_imagem, $sh_titulo1, $sh_titulo2, $sh_titulo3){   
    
    try{   
     $sql = "INSERT INTO tbl_slidehome (sh_imagem, sh_titulo1, sh_titulo2, sh_titulo3) VALUES (?, ?, ?, ?)";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $sh_imagem);   
     $stm->bindValue(2, $sh_titulo1);   
     $stm->bindValue(3, $sh_titulo2);   
     $stm->bindValue(4, $sh_titulo3);   
     $stm->execute();   
     echo "<script>alert('Slide inserido com sucesso');location.href='gerenciamento_slidehome';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}"; 
    }   
  
  } 
  
  public function update($sh_imagem, $sh_titulo1, $sh_titulo2, $sh_titulo3, $sh_id){   
      
    try{   
     $sql = "UPDATE tbl_slidehome SET sh_titulo1=?, sh_titulo2=?, sh_titulo3=?"; 
     if($sh_imagem != ''){
          $sql .= ", sh_imagem=?";
      }
      $sql .= "  WHERE sh_id=?";
     $stm = $this->pdo->prepare($sql);  
     $stm->bindValue(1, $sh_titulo1);   
     $stm->bindValue(2, $sh_titulo2);   
     $stm->bindValue(3, $sh_titulo3);   
     if($sh_imagem != ''){
         $stm->bindValue(4, $sh_imagem); 
         $stm->bindValue(5, $sh_id); 
     }else{
        $stm->bindValue(4, $sh_id);   
     }
     $stm->execute();   
     echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento_slidehome';</script>";   
    }catch(PDOException $erro){   
     echo "Erro: {$erro->getMessage()}";   
    }   
  
  }   
  public function delete($sh_id){   
     
    try{   
     $sql = "DELETE FROM tbl_slidehome WHERE sh_id=?";   
     $stm = $this->pdo->prepare($sql);   
     $stm->bindValue(1, $sh_id);   
     $stm->execute();
     return 1;  
    }catch(PDOException $erro){  
      $error = $erro->getMessage();
      return $error;  
    }   
     
  } 
  public function getAllSlidebyID($sh_id){   
   try{   
    $sql = "SELECT * FROM tbl_slidehome where sh_id = ?";   
    $stm = $this->pdo->prepare($sql);   
    $stm->bindValue(1, $sh_id); 
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   } catch (PDOException $ex) {
    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();
   }  
  }   
  public function getAllSlides(){   
   try{   
    $sql = "SELECT * FROM tbl_slidehome";   
    $stm = $this->pdo->prepare($sql);   
    $stm->execute();   
    $dados = $stm->fetchAll(PDO::FETCH_OBJ);   
    return $dados;   
   }catch(PDOException $erro){   
    echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>"; 
   }   
  }   
 }  