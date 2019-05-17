<?php require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudCategoria.php";
$cat_id = $_GET['id'];
$config = crudCategoria::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Categoria
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Categoria</a></li>
            <li class="active">Editar Categoria</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edite os dados abaixo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <?php
                $dados = $config->getAllCategoriaByID($cat_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-categoria.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="cat_id" id="cat_id" value="<?php echo $cat_id; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="cat_nome">Nome da Categoria</label>
                                <input type="text" class="form-control" value="<?php echo $reg->cat_titulo; ?>" data-rule-required="true" required id="cat_nome" placeholder="Digite o nome do categoria" name="cat_nome">
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                            <a href="gerenciamento_categoria" class="btn btn-danger btn-flat" >Cancelar</a>
                        </div>
                    </form>
                    <?php
                }
                if (isset($_POST['btn_alt_df'])) {
                    $cat_nome = $_POST['cat_nome'];
                    $cat_id = $_POST['cat_id'];
                    $config->update($cat_nome, $cat_id);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>

