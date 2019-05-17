<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudProduto.php";
$produto = crudProduto::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Cadastrar Produto
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Produtos</a></li>
            <li class="active">Cadastrar Produto</li>
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

                <form role="form" action="cadastrar-produto" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000000">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="pro_nome">Titulo</label>
                            <input type="text" class="form-control" required  id="pro_nome" placeholder="Digite o Nome do produto" name="pro_nome">
                        </div>
                        <div class="form-group">
                            <label for="pro_link">Link do Produto</label>
                            <input type="url" class="form-control" required id="pro_link" placeholder="Digite o link do produto" name="pro_link">
                        </div>
                        <div class="form-group">
                            <label for="pro_descricao">Breve Descrição</label>
                            <textarea type="text" class="form-control" data-rule-required="true" id="pro_descricao"  name="pro_descricao"></textarea>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Imagem:</label>
                            <div class="controls">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=252+x+355+px" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                            <span class="fileupload-exists">Alterar</span>
                                            <input required="" type="file" class="default" name="pro_imagem" id="pro_imagem"  /></span>
                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a>
                                    </div>
                                </div>

                            </div>
                        </div> 
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_mod" class="btn btn-primary btn-flat" value="Inserir Produto">
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_mod'])) {
                    $pro_nome = $_POST['pro_nome'];
                    $pro_link = $_POST['pro_link'];
                    $pro_descricao = $_POST['pro_descricao'];
                    
                    if (isset($_FILES['pro_imagem']['name']) && $_FILES['pro_imagem']['name'] != "") {
                        include('class/Upload.php');
                        $upArquivo = new Upload;
                        $tipos[0] = ".gif";
                        $tipos[1] = ".jpg";
                        $tipos[2] = ".jpeg"; 
                        $tipos[3] = ".png";
                        $upArquivo->UploadArquivo($_FILES["pro_imagem"], "../midias/produtos/", $tipos);
                        $nome = $upArquivo->nome;
                        $pro_imagem = substr($nome, 3);
                        $produto->insert($pro_nome, $pro_imagem, $pro_link, $pro_descricao);
                    }
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>
