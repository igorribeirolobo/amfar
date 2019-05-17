<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudTextos.php";
$id = $_GET['id'];
$config = crudTexto::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    
    <section class="content-header">
        <h1>
            Configurações de Texto
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Texto</a></li>
            <li class="active">Editar Texto</li>
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
                <?php $dados = $config->getAllTextobyID($id);
                foreach ($dados as $reg){?>
                <form role="form" action="edit_txt.php" method="post">
                    <input type="hidden" name="txt_id" id="txt_id" value="<?php echo $_GET['id']; ?>">
                    <input type="hidden" name="txt_secao" id="txt_secao" value="<?php echo $reg->txt_secao; ?>">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="txt_obs">Localização do Texto</label>
                            <input type="text" class="form-control" value="<?php echo $reg->txt_obs; ?>" readonly="" id="txt_obs" name="txt_obs">
                        </div>
                        <div class="form-group">
                            <label for="txt_texto">Texto</label>
                            <input type="text" class="form-control" value="<?php echo $reg->txt_texto; ?>" id="txt_texto" placeholder="Digite o Valor" name="txt_texto">
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                    </div>
                </form>
                <?php }
                if(isset($_POST['btn_alt_df'])){
                    $txt_texto = $_POST['txt_texto'];
                    $txt_id = $_POST['txt_id'];
                    $txt_secao = $_POST['txt_secao'];
                    $config->update($txt_texto,$txt_id, $txt_secao);
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php';?>


