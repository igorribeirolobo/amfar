<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudDepoimentos.php";
$dep_id = $_GET['id'];
$config = crudDepoimentos::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Depoimentos
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Depoimentos</a></li>
            <li class="active">Editar Depoimentos</li>
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
                $dados = $config->getAllDepoimentosByID($dep_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-depoimento.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="dep_id" id="dep_id" value="<?php echo $dep_id; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dep_nome">Nome do Cliente</label>
                                <input type="text" class="form-control" value="<?php echo $reg->dep_nome; ?>" data-rule-required="true" required id="dep_nome" placeholder="Digite o nome do servico" name="dep_nome">
                            </div>
                            <div class="form-group">
                                <label for="dep_ocupacao">Cargo/Empresa do Cliente</label>
                                <input type="text" class="form-control" value="<?php echo $reg->dep_ocupacao; ?>" data-rule-required="true" required id="dep_ocupacao" placeholder="Digite o nome do servico" name="dep_ocupacao">
                            </div>
                            <div class="form-group">
                                <label for="dep_texto">Descrição do Depoimento</label>
                                <textarea class="form-control" data-rule-required="true" required=""  id="dep_texto" name="dep_texto"><?php echo $reg->dep_texto; ?></textarea>
                            </div>
                            
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                        </div>
                    </form>
                    <?php
                }
                if (isset($_POST['btn_alt_df'])) {
                    $dep_nome = $_POST['dep_nome'];
                    $dep_ocupacao = $_POST['dep_ocupacao'];
                    $dep_texto = $_POST['dep_texto'];
                    $dep_id = $_POST['dep_id'];
                    $config->update($dep_nome, $dep_ocupacao, $dep_texto, $dep_id);
                    
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


