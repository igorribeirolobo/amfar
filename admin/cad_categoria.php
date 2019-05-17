<?php require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudCategoria.php";
$categoria = crudCategoria::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Categoria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Categoria</a></li>
            <li class="active">Cadastrar Categoria</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Digite os dados abaixo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <form role="form" action="cadastrar-categoria" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="cat_nome">Nome</label>
                            <input type="text" class="form-control" required  id="cat_nome" placeholder="Digite o nome da categoria" name="cat_nome">
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_par" class="btn btn-primary btn-flat" value="Inserir Categoria">
                        <a href="gerenciamento_categorias" class="btn btn-danger btn-flat" >Cancelar</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_par'])) {
                    $cat_nome = $_POST['cat_nome'];
                    $categoria->insert($cat_nome);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>
