<?php class crudImagem{     private $pdo = null;    private static $crudImagem = null;   private function __construct($conexao){      $this->pdo = $conexao;    }      public static function getInstance($conexao){      if (!isset(self::$crudImagem)):        self::$crudImagem = new crudImagem($conexao);      endif;      return self::$crudImagem;      }    public function update($img_imagem, $img_title, $img_alt, $img_id, $img_secao){       try{        $sql = "UPDATE tbl_imagens SET img_imagem=?, img_title=?, img_alt=? WHERE img_id=?";        $stm = $this->pdo->prepare($sql);        $stm->bindValue(1, $img_imagem);         $stm->bindValue(2, $img_title);         $stm->bindValue(3, $img_alt);         $stm->bindValue(4, $img_id);        $stm->execute();        echo "<script>alert('Registro atualizado com sucesso');location.href='gerenciamento_imagens/".$img_secao."';</script>";       }catch(PDOException $erro){        echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";       }     }    public function getAllImagensBySecao($secao){      try{       $sql = "SELECT * FROM tbl_imagens where img_secao = ? ORDER BY img_id ASC";       $stm = $this->pdo->prepare($sql);      $stm->bindValue(1, $secao);     $stm->execute();       $dados = $stm->fetchAll(PDO::FETCH_OBJ);       return $dados;      }catch(PDOException $erro){       echo "<script>alert('Erro: {$erro->getMessage()}');</script>";    }    }     public function getAllImagemByID($id){      try{       $sql = "SELECT * FROM tbl_imagens where img_id = ?";       $stm = $this->pdo->prepare($sql);       $stm->bindValue(1, $id);     $stm->execute();       $dados = $stm->fetchAll(PDO::FETCH_OBJ);       return $dados;      } catch (PDOException $ex) {    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();   }    }    }  