<?php

$base = "http://www.amfar.com.br/amfar_novo/";

require_once "admin/config.php";
require_once "class/Select.class.php";

$config = Select::getInstance(Conexao::getInstance());

$slidehome = $config->getAllSlideHome();
$slidesobre = $config->getAllSlideSobre();
$contatos = $config->getAllContato();
$imagens = $config->getAllImagem();
$textos = $config->getAllTexto();
$produtos = $config->getAllProdutos();
$menu = $config->getAllMenu();
$blog = $config->getAllBlog();
$link = $config->getAllLink();
$novidades = $config->getAllNovidades();

foreach ($textos as $texto) {
    $txt_id = $texto->txt_id;
    $txt[$txt_id] = $texto->txt_texto;
}foreach ($contatos as $contato) {
    $id = $contato->cont_id;
    $info[$id] = $contato->cont_texto;
}foreach ($imagens as $imagem) {
    $id = $imagem->img_id;
    $img_i[$id] = $imagem->img_imagem;
    $img_a[$id] = $imagem->img_alt;
    $img_t[$id] = $imagem->img_title;
}
foreach ($menu as $pagina) {
    $id = $pagina->pag_id;
    $menu_txt[$id] = $pagina->pag_nome;
    $menu_link[$id] = $pagina->pag_link;
}
foreach ($blog as $testemunho) {
    for($i = 0; $i <= 4; $i++)
    {
    $test_texto[$i] = $testemunho->texto;
    $test_ass[$i] = $testemunho->assinatura;
    }
}
foreach ($novidades as $novo)
{
    $id = $novo->novidade_id;
    $novo_texto[$id] = $novo->novidade_texto;
}
foreach($link as $us)
{
 $id = $us->link_id;
 $link_end[$id] = $us->link_endereco;
 $link_des[$id] = $us->link_descricao;
}
?>


