<?php $acao  = $_GET['acao'];
 require_once "config.php";
 require 'class/crudProduto.php';
 require 'class/crudSlide.php';

if($acao == "categoria"){
  $id = $_GET['id'];
  require 'class/crudCategorias.php';  
  $categ = crudCategoria::getInstance(Conexao::getInstance());
  $categ->delete($id);
}
