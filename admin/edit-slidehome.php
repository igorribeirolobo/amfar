<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudSlideHome.php";
$sh_id = $_GET['id'];
$config = crudSlideHome::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Slides (Home)
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Slides</a></li>
            <li class="active">Editar Slides</li>
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
                $dados = $config->getAllSlidebyID($sh_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-slidehome.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="sh_id" id="sh_id" value="<?php echo $_GET['id']; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="sh_titulo1">Titulo</label>
                                <input type="text" class="form-control" value="<?php echo $reg->sh_titulo1; ?>" data-rule-required="true" required id="sh_titulo1" placeholder="Digite o Titulo do Topo" name="sh_titulo1">
                            </div>
                            <div class="form-group">
                                <label for="sh_titulo2">SubTitulo</label>
                                <input type="text" class="form-control" value="<?php echo $reg->sh_titulo2; ?>" data-rule-required="true"   id="sh_titulo2" placeholder="Digite o Titulo do meio, com fundo laranja" name="sh_titulo2">
                            </div>
                            <div class="form-group">
                                <label for="sh_titulo3">Texto </label>
                                <input type="text" class="form-control" value="<?php echo $reg->sh_titulo3; ?>" data-rule-required="true"   id="sh_titulo3" placeholder="Digite o Titulo de baixo, menor" name="sh_titulo3">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Imagem:</label>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="../<?php echo $reg->sh_imagem ?>" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                                <span class="fileupload-exists">Alterar</span>
                                                <input type="file" class="default" name="sh_imagem" id="imagem1" /></span>
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
                    $sh_titulo1 = $_POST['sh_titulo1'];
                    $sh_titulo2 = $_POST['sh_titulo2'];
                    $sh_titulo3 = $_POST['sh_titulo3'];
                    $sh_id = $_POST['sh_id'];

                    if (isset($_FILES['sh_imagem']['name']) && $_FILES['sh_imagem']['name'] != "") {
                        foreach ($dados as $reg) {
                            $imagem_antiga = $reg->sh_imagem;
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
                        $upArquivo->UploadArquivo($_FILES["sh_imagem"], "../midias/slides/", $tipos);
                        $nome = $upArquivo->nome;
                        $imagem_final = substr($nome, 3);
                    } else {
                        $imagem_final = $imagem_antiga;
                    }
                    $config->update($imagem_final, $sh_titulo1, $sh_titulo2, $sh_titulo3, $sh_id);
                }
                ?>

            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


