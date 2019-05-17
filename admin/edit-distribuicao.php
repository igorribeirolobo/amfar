<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudDistribuicao.php";
$dis_id = $_GET['id'];
$config = crudDistribuicao::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Distribuição
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Distribuição</a></li>
            <li class="active">Editar Distribuição</li>
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
                $dados = $config->getAllDistribuicaoByID($dis_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-distribuicao.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="dis_id" id="dis_id" value="<?php echo $dis_id; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dis_cidade">Cidade</label>
                                <input type="text" class="form-control" value="<?php echo $reg->dis_cidade; ?>" data-rule-required="true" required id="dis_cidade" placeholder="Digite o nome do distribuicao" name="dis_cidade">
                            </div>
                            <div class="form-group">
                                <label for="dis_estado">Estado</label>
                                <input type="text" class="form-control" value="<?php echo $reg->dis_estado; ?>" data-rule-required="true" required id="dis_estado" placeholder="Digite o nome do distribuicao" name="dis_estado">
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                            <a href="gerenciamento_distribuicao" class="btn btn-danger btn-flat" >Cancelar</a>
                        </div>
                    </form>
                    <?php
                }
                if (isset($_POST['btn_alt_df'])) {
                    
                    $dis_cidade = $_POST['dis_cidade'];
                    $dis_estado = $_POST['dis_estado'];
                    $dis_id = $_POST['dis_id'];

                    
                    $config->update($dis_cidade, $dis_estado, $dis_id);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


