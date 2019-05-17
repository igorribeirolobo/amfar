<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudServico.php";
$ser_id = $_GET['id'];
$config = crudServico::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Serviço
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Serviço</a></li>
            <li class="active">Editar Serviço</li>
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
                $dados = $config->getAllServicoByID($ser_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-servico.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="ser_id" id="ser_id" value="<?php echo $ser_id; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="ser_titulo">Titulo</label>
                                <input type="text" class="form-control" value="<?php echo $reg->ser_titulo; ?>" data-rule-required="true" required id="ser_titulo" placeholder="Digite o nome do servico" name="ser_titulo">
                            </div>
                            <div class="form-group">
                                <label for="ser_descricao">Descrição</label>
                                <textarea class="form-control" data-rule-required="true" required=""  id="ser_descricao" name="ser_descricao"><?php echo $reg->ser_descricao; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Imagem:</label>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="../<?php echo $reg->ser_imagem ?>" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                                <span class="fileupload-exists">Alterar</span>
                                                <input type="file" class="default" name="ser_imagem" id="ser_imagem" /></span>
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
                    $ser_titulo = $_POST['ser_titulo'];
                    $ser_descricao = $_POST['ser_descricao'];
                    $ser_id = $_POST['ser_id'];

                    if (isset($_FILES['ser_imagem']['name']) && $_FILES['ser_imagem']['name'] != "") {
                        foreach ($dados as $reg) {
                            $imagem_antiga = $reg->ser_imagem;
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
                        $upArquivo->UploadArquivo($_FILES["ser_imagem"], "../midias/servicos/", $tipos);
                        $nome = $upArquivo->nome;
                        $imagem_final = substr($nome, 3);
                    } else {
                        $imagem_final = $imagem_antiga;
                    }
                    $config->update($imagem_final, $ser_titulo, $ser_descricao, $ser_id);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


