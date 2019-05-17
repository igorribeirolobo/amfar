<?php require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudDepoimentos.php";
$servico = crudDepoimentos::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Depoimento
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Depoimentos</a></li>
            <li class="active">Cadastrar Depoimento</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Digite os dados abaixo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <form role="form" action="cadastrar-depoimento" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="dep_nome">Nome do Cliente</label>
                            <input type="text" class="form-control" required  id="dep_nome" placeholder="Digite o Nome do cliente" name="dep_nome">
                        </div>
                        <div class="form-group">
                            <label for="dep_ocupacao">Cargo/Empresa do Cliente</label>
                            <input type="text" class="form-control" required  id="dep_ocupacao" placeholder="Digite o cargo e empresa do cliente. Ex: CEO na Vallori Tecnologia" name="dep_ocupacao">
                        </div>
                        <div class="form-group">
                            <label for="dep_texto">Descrição do Depoimento</label>
                            <textarea type="text" class="form-control" data-rule-required="true" id="dep_texto"  name="dep_texto"></textarea>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_dep" class="btn btn-primary btn-flat" value="Inserir Depoimento">
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_dep'])) {
                    $dep_nome = $_POST['dep_nome'];
                    $dep_ocupacao = $_POST['dep_ocupacao'];
                    $dep_texto = $_POST['dep_texto'];
                    $servico->insert($dep_nome, $dep_texto, $dep_ocupacao);
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>
