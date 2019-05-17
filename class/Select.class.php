<?php

class Select {

    private $pdo = null;
    private static $Select = null;

    private function __construct($conexao) {

        $this->pdo = $conexao;
    }

    public static function getInstance($conexao) {

        if (!isset(self::$Select)):

            self::$Select = new Select($conexao);

        endif;

        return self::$Select;
    }

    public function getAllCategoria() {
        try {
            $sql = "SELECT * FROM tbl_categorias order by cat_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllMenu() {
        try {
            $sql = "SELECT * FROM tbl_paginas order by pag_id";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchALL(PDO::FETCH_OBJ);
            return $dados;
        } catch (Exception $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllSlideHome() {
        try {
            $sql = "SELECT * FROM tbl_slidehome order by sh_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllDistribuicao() {
        try {
            $sql = "SELECT * FROM tbl_distribuicao order by dis_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllSlideSobre() {
        try {
            $sql = "SELECT * FROM tbl_slidesobre order by ss_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllContato() {
        try {
            $sql = "SELECT * FROM tbl_contato order by cont_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllTexto() {
        try {
            $sql = "SELECT * FROM tbl_textos";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllImagem() {
        try {
            $sql = "SELECT * FROM tbl_imagens order by img_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllProdutos() {
        try {
            $sql = "SELECT * FROM tbl_produtos INNER JOIN tbl_categorias ON(tbl_categorias.cat_id = tbl_produtos.pro_categoria) ORDER BY tbl_produtos.pro_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

    public function getAllCategorias() {
        try {
            $sql = "SELECT * FROM tbl_categorias order by cat_id DESC";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();
            $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
        } catch (PDOException $erro) {
            echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
        }
    }

        public function getAllBlog() {
            try {
                $sql = "SELECT * FROM tbl_blog ORDER BY id DESC LIMIT 4";
                $stm = $this->pdo->prepare($sql);
                $stm->execute();
                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                return $dados;
            } catch (PDOException $erro) {
                echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
            }
        }

        public function getAllNovidades() {
            try {
                $sql = "SELECT * FROM tbl_novidades ORDER BY novidade_id DESC LIMIT 5";
                $stm = $this->pdo->prepare($sql);
                $stm->execute();
                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                return $dados;
            } catch (PDOException $erro) {
                echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
            }
        }
        public function getAllLink(){
              try {
                $sql = "SELECT * FROM tbl_link ORDER BY link_id ASC";
                $stm = $this->pdo->prepare($sql);
                $stm->execute();
                $dados = $stm->fetchAll(PDO::FETCH_OBJ);
                return $dados;
            } catch (PDOException $erro) {
                echo "<script>alert('Erro: {$erro->getMessage()}')</script>";
            }
        }
        }
    