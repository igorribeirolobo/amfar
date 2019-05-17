<?php class crudUsuario{     private $pdo = null;    private static $crudUsuario = null;     private function __construct($conexao){      $this->pdo = $conexao;    }    public static function getInstance($conexao){      if (!isset(self::$crudUsuario)):        self::$crudUsuario = new crudUsuario($conexao);      endif;      return self::$crudUsuario;      }    public function insert($user_nome, $user_usuario, $user_senha, $user_permissao, $user_email){       try{        $sql = "INSERT INTO tbl_usuario (user_nome, user_usuario, user_senha, user_permissao, user_email) VALUES (?, ?, ?, ?, ?)";        $stm = $this->pdo->prepare($sql);        $stm->bindValue(1, $user_nome);          $stm->bindValue(2, $user_usuario);          $stm->bindValue(3, $user_senha);          $stm->bindValue(4, $user_permissao);          $stm->bindValue(5, $user_email);          $stm->execute();        echo "<script>alert('Usuário inserido com sucesso'); location.href='gerenciamento_usuarios';</script>";       }catch(PDOException $erro){        echo "<script>alert('Erro: {$erro->getMessage()}')</script>";     }       }     public function update($user_nome, $user_usuario, $user_senha, $user_permissao, $user_email, $user_id){       try{        $sql = "UPDATE tbl_usuario SET user_nome=?, user_usuario=?, user_senha=?, user_permissao=?, user_email=? WHERE user_id=?";        $stm = $this->pdo->prepare($sql);        $stm->bindValue(1, $user_nome);       $stm->bindValue(2, $user_usuario);       $stm->bindValue(3, $user_senha);       $stm->bindValue(4, $user_permissao);       $stm->bindValue(5, $user_email);       $stm->bindValue(6, $user_id);       $stm->execute();        echo "<script>alert('Registro atualizado com sucesso'); location.href='gerenciamento_usuarios';</script>";       }catch(PDOException $erro){        echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";       }     }    public function delete($id){           try{        $sql = "DELETE FROM tbl_usuario WHERE user_id=?";        $stm = $this->pdo->prepare($sql);        $stm->bindValue(1, $id);        $stm->execute();        echo "<script>alert('Registro excluido com sucesso'); location.href='gerenciamento_usuarios';</script>";       }catch(PDOException $erro){        echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";        }      }       public function getAllUsuariosbyID($user_id){      try{       $sql = "SELECT * FROM tbl_usuario where user_id = ?";       $stm = $this->pdo->prepare($sql);       $stm->bindValue(1, $user_id);     $stm->execute();       $dados = $stm->fetchAll(PDO::FETCH_OBJ);       return $dados;      } catch (PDOException $ex) {    echo 'Erro ao Buscar Dados! - ' . $ex->getMessage();   }    }     public function getAllUsuario(){      try{       $sql = "SELECT * FROM tbl_usuario order by user_id desc";       $stm = $this->pdo->prepare($sql);       $stm->execute();       $dados = $stm->fetchAll(PDO::FETCH_OBJ);       return $dados;      }catch(PDOException $erro){       echo "<script>alert('Erro na linha: {$erro->getMessage()}')</script>";    }     }    }