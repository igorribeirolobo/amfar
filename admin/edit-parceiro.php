<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudParceiro.php";
$par_id = $_GET['id'];
$config = crudParceiro::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Parceiro
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Parceiro</a></li>
            <li class="active">Editar Parceiro</li>
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
                $dados = $config->getAllParceiroByID($par_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-parceiro.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="par_id" id="par_id" value="<?php echo $par_id; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="par_nome">Nome do Parceiro</label>
                                <input type="text" class="form-control" value="<?php echo $reg->par_nome; ?>" data-rule-required="true" required id="par_nome" placeholder="Digite o nome do parceiro" name="par_nome">
                            </div>
                            <div class="form-group">
                                <label for="par_link">Link do site do Parceiro</label>
                                <input type="text" class="form-control" value="<?php echo $reg->par_link; ?>" data-rule-required="true" required id="par_link" placeholder="Digite o nome do parceiro" name="par_link">
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label">Imagem:</label>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="../<?php echo $reg->par_imagem ?>" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                                <span class="fileupload-exists">Alterar</span>
                                                <input type="file" class="default" name="par_imagem" id="par_imagem" /></span>
                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                            <a href="gerenciamento_parceiros" class="btn btn-danger btn-flat" >Cancelar</a>
                        </div>
                    </form>
                    <?php
                }
                if (isset($_POST['btn_alt_df'])) {
                    
                    $par_nome = $_POST['par_nome'];
                    $par_link = $_POST['par_link'];
                    $par_id = $_POST['par_id'];

                    if (isset($_FILES['par_imagem']['name']) && $_FILES['par_imagem']['name'] != "") {
                        foreach ($dados as $reg) {
                            $imagem_antiga = $reg->par_imagem;
                            if ($imagem_antiga != '') {
                                unlink("../".$imagem_antiga);
                            }
                        }
                        include('class/Upload.php');
                        $upArquivo = new Upload;
                        $tipos[0] = ".gif";
                        $tipos[1] = ".jpg";
                        $tipos[2] = ".jpeg";
                        $tipos[3] = ".png";
                        $upArquivo->UploadArquivo($_FILES["par_imagem"], "../midias/parceiros/", $tipos);
                        $nome = $upArquivo->nome;
                        $imagem_final = substr($nome, 3);
                    } else {
                        $imagem_final = $imagem_antiga;
                    }
                    $config->update($imagem_final, $par_nome, $par_link, $par_id);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


