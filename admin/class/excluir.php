<?php $acao  = $_REQUEST['acao'];
require_once "../config.php";
if($acao == "slidehome"){
    require 'crudSlideHome.php';
    $slide = crudSlideHome::getInstance(Conexao::getInstance());
    $dados = $slide->getAllSlidebyID($_REQUEST['id']);
    foreach ($dados as $reg){
        $imagem = $reg->sl_imagem;
        if($imagem != ''){
        unlink("../../".$imagem);
        }else{
            echo '<script>alert("Não há imagem para excluir");</script>';
        }
    }
    if($slide->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_slidehome';</script>"; 
    }else{
        echo $error;
    }
    
}
if($acao == "slidesobre"){
    require 'crudSlideSobre.php';
    $slide = crudSlideSobre::getInstance(Conexao::getInstance());
    $dados = $slide->getAllSlidebyID($_REQUEST['id']);
    foreach ($dados as $reg){
        $imagem = $reg->ss_imagem;
        if($imagem != ''){
        unlink("../../".$imagem);
        }else{
            echo '<script>alert("Não há imagem para excluir");</script>';
        }
    }
    if($slide->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_slidesobre';</script>"; 
    }else{
        echo $error;
    }
    
}
if($acao == "usuario"){
    require 'crudUsuario.php';
    $categoria = crudUsuario::getInstance(Conexao::getInstance());
    $dados = $categoria->getAllUsuariosByID($_REQUEST['id']);
    if($categoria->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_usuarios';</script>"; 
    }else{
        echo $error;
    }
}
if($acao == "categoria"){
    require 'crudCategoria.php';
    $categoria = crudCategoria::getInstance(Conexao::getInstance());
    $dados = $categoria->getAllCategoriaByID($_REQUEST['id']);
    if($categoria->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_categorias';</script>"; 
    }else{
        echo $error;
    }
}
if($acao == "distribuicao"){
    require 'crudDistribuicao.php';
    $distribuicao = crudDistribuicao::getInstance(Conexao::getInstance());
    $dados = $distribuicao->getAllDistribuicaoByID($_REQUEST['id']);
    if($distribuicao->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_distribuicao';</script>"; 
    }else{
        echo $error;
    }
}
if($acao == "produto"){
    require 'crudProduto.php';
    $produto = crudProduto::getInstance(Conexao::getInstance());
    $dados = $produto->getAllProdutoByID($_REQUEST['id']);
    foreach ($dados as $reg){
        $imagem = $reg->pro_imagem;
        if($imagem != ''){
        unlink("../../".$imagem);
        }else{
            echo '<script>alert("Não há imagem para excluir");</script>';
        }
    }
    if($produto->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_produtos';</script>"; 
    }else{
        echo $error;
    }
    
}
if($acao == "servico"){
    require 'crudServico.php';
    $servico = crudServico::getInstance(Conexao::getInstance());
    $dados = $servico->getAllServicoByID($_REQUEST['id']);
    foreach ($dados as $reg){
        $imagem = $reg->mod_imagem;
        if($imagem != ''){
        unlink("../../".$imagem);
        }else{
            echo '<script>alert("Não há imagem para excluir");</script>';
        }
    }
    if($servico->delete($_REQUEST['id']) == 1){
        echo "<script>alert('Registro excluido com sucesso');location.href='http://desenvolvimento.valloritecnologia.com.br/jeito_gelado/admin/gerenciamento_servicos';</script>"; 
    }else{
        echo $error;
    }
    
}

