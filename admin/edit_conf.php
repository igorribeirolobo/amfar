<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudConf.php";
$id = $_GET['id'];
$config = crudConf::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    
    <section class="content-header">
        <h1>
            Configurações de Contato
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Contato</a></li>
            <li class="active">Editar Contato</li>
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
                <?php $dados = $config->getAllConfbyID($id);
                foreach ($dados as $reg){?>
                <form role="form" action="edit_conf.php" method="post">
                    <input type="hidden" name="cont_id" id="cont_id" value="<?php echo $_GET['id']; ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="cont_tipo">Tipo de Informação</label>
                            <input type="text" class="form-control" value="<?php echo $reg->cont_tipo; ?>" readonly="" id="cont_tipo" placeholder="Digite o Valor" name="cont_tipo">
                        </div>
                        <div class="form-group">
                            <label for="cont_texto">Texto</label>
                            <input type="text" class="form-control" value="<?php echo $reg->cont_texto; ?>" id="cont_texto" placeholder="Digite o Valor" name="cont_texto">
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                        <a href="gerenciamento-contato" class="btn btn-danger btn-flat" >Cancelar</a>
                    </div>
                </form>
                <?php }
                if(isset($_POST['btn_alt_df'])){
                    $cont_texto = $_POST['cont_texto'];
                    $cont_id = $_POST['cont_id'];
                    $config->update($cont_texto,$cont_id);
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php';?>


