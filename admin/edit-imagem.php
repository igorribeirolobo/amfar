<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudImagens.php";
$img_id = $_GET['id'];
$config = crudImagem::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Imagens
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Imagens</a></li>
            <li class="active">Editar Imagens</li>
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
                $dados = $config->getAllImagembyID($img_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-imagem.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="img_id" id="img_id" value="<?php echo $_GET['id']; ?>">
                        <input type="hidden" name="img_secao" id="_secao" value="<?php echo $reg->img_secao; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="img_obs">Localização</label>
                                <input type="text" class="form-control" readonly="" value="<?php echo $reg->img_obs; ?>" data-rule-required="true"   id="img_obs" name="img_obs">
                            </div>
                            <div class="form-group">
                                <label for="img_obs">ALT da Imagem</label>
                                <input type="text" class="form-control"  value="<?php echo $reg->img_alt; ?>" data-rule-required="true"   id="img_alt" name="img_alt">
                            </div>
                            <div class="form-group">
                                <label for="img_obs">TITLE da imagem</label>
                                <input type="text" class="form-control"value="<?php echo $reg->img_title; ?>" data-rule-required="true"   id="img_title" name="img_title">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Imagem:</label>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="../<?php echo $reg->img_imagem ?>" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                                <span class="fileupload-exists">Alterar</span>
                                                <input type="file" class="default" name="img_imagem" id="img_imagem" /></span>
                                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="btn_alt_df" class="btn btn-primary btn-flat" value="Atualizar Dados">
                        </div>
                    </form>
                    <?php
                }
                if (isset($_POST['btn_alt_df'])) {
                    $img_secao = $_POST['img_secao'];
                    $img_alt = $_POST['img_alt'];
                    $img_title = $_POST['img_title'];
                    $img_id = $_POST['img_id'];

                    if (isset($_FILES['img_imagem']['name']) && $_FILES['img_imagem']['name'] != "") {
                        foreach ($dados as $reg) {
                            $imagem_antiga = $reg->img_imagem;
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
                        $upArquivo->UploadArquivo($_FILES["img_imagem"], "../midias/imagens/", $tipos);
                        $nome = $upArquivo->nome;
                        $imagem_final = substr($nome, 3);
                    } else {
                        $imagem_final = $imagem_antiga;
                    }
                    $config->update($imagem_final, $img_title, $img_alt, $img_id, $img_secao);
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


