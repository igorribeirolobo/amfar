<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudServico.php";
$servico = crudServico::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Serviço
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Serviços</a></li>
            <li class="active">Cadastrar Serviço</li>
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

                <form role="form" action="cadastrar-servico" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="ser_titulo">Titulo</label>
                            <input type="text" class="form-control" required  id="ser_titulo" placeholder="Digite o Nome do servico" name="ser_titulo">
                        </div>
                        <div class="form-group">
                            <label for="ser_descricao">Descrição</label>
                            <textarea type="text" class="form-control" data-rule-required="true" id="ser_descricao"  name="ser_descricao"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Imagem:</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                            <span class="fileupload-exists">Alterar</span>
                                            <input required="" type="file" class="default" name="ser_imagem" id="ser_imagem"  /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                                    </div>
                                </div>

                            </div>
                        </div> 
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_mod" class="btn btn-primary btn-flat" value="Inserir Serviço">
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_mod'])) {
                    $ser_titulo = $_POST['ser_titulo'];
                    $ser_descricao = $_POST['ser_descricao'];
                    if (isset($_FILES['ser_imagem']['name']) && $_FILES['ser_imagem']['name'] != "") {
                        include('class/Upload.php');
                        $upArquivo = new Upload;
                        $tipos[0] = ".gif";
                        $tipos[1] = ".jpg";
                        $tipos[2] = ".jpeg";
                        $tipos[3] = ".png";
                        $upArquivo->UploadArquivo($_FILES["ser_imagem"], "../midias/servicos/", $tipos);
                        $nome = $upArquivo->nome;
                        $ser_imagem = substr($nome, 3);
                        $servico->insert($ser_imagem, $ser_titulo, $ser_descricao);
                    }
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>
