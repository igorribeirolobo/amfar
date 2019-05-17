<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudSlide.php";
$slide = crudSlide::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Slide
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Slides</a></li>
            <li class="active">Cadastrar Slide</li>
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

                <form role="form" action="cadastrar-slide" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="sl_titulo1">Titulo 1</label>
                            <input type="text" class="form-control" data-rule-required="true"  required  id="sl_titulo1" placeholder="Digite o Titulo do Topo" name="sl_titulo1">
                        </div>
                        <div class="form-group">
                            <label for="sl_titulo2">Titulo 2</label>
                            <input type="text" class="form-control" data-rule-required="true"   id="sl_titulo2" placeholder="Digite o Titulo do meio, com fundo laranja" name="sl_titulo2">
                        </div>
                        <div class="form-group">
                            <label for="sl_titulo3">Titulo 3</label>
                            <input type="text" class="form-control" data-rule-required="true"   id="sl_titulo3" placeholder="Digite o Titulo de baixo, menor" name="sl_titulo3">
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
                                            <input required="" type="file" class="default" name="sl_imagem" id="sl_imagem"  /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                                    </div>
                                </div>

                            </div>
                        </div> 
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_sl" class="btn btn-primary btn-flat" value="Inserir Slider">
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_sl'])) {
                    $sl_titulo1 = $_POST['sl_titulo1'];
                    $sl_titulo2 = $_POST['sl_titulo2'];
                    $sl_titulo3 = $_POST['sl_titulo3'];
                    if (isset($_FILES['sl_imagem']['name']) && $_FILES['sl_imagem']['name'] != "") {
                        include('class/Upload.php');
                        $upArquivo = new Upload;
                        $tipos[0] = ".gif";
                        $tipos[1] = ".jpg";
                        $tipos[2] = ".jpeg";
                        $tipos[3] = ".png";
                        $upArquivo->UploadArquivo($_FILES["sl_imagem"], "../midias/slides/", $tipos);
                        $nome = $upArquivo->nome;
                        $imagem_final = substr($nome, 3);
                        $slide->insert($imagem_final,$sl_titulo1,$sl_titulo2,$sl_titulo3);
                    }
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>
