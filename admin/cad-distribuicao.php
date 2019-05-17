<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudDistribuicao.php";
$distribuicao = crudDistribuicao::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Distribuição
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Distribuição</a></li>
            <li class="active">Cadastrar Distribuição</li>
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
                <form role="form" action="cadastrar-distribuicao" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="dis_cidade">Cidade</label>
                            <input type="text" class="form-control" required  id="dis_cidade" placeholder="Digite a cidade" name="dis_cidade">
                        </div>
                        <div class="form-group">
                            <label for="dis_estado">Estado</label>
                            <input type="text" class="form-control" required  id="dis_estado" placeholder="Digite o estado" name="dis_estado">
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_par" class="btn btn-primary btn-flat" value="Inserir Distribuição">
                        <a href="gerenciamento_distribuicao" class="btn btn-danger btn-flat" >Cancelar</a>
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_par'])) {
                    $dis_cidade = $_POST['dis_cidade'];
                    $dis_estado = $_POST['dis_estado'];
                    $distribuicao->insert($dis_cidade, $dis_estado);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>
