<?php
require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudProduto.php";
$pro_id = $_GET['id'];
$config = crudProduto::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">

    <section class="content-header">
        <h1>
            Configurações de Produto
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Produto</a></li>
            <li class="active">Editar Produto</li>
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
                $dados = $config->getAllProdutoByID($pro_id);
                foreach ($dados as $reg) {
                    ?>
                <form role="form" action="edit-produto.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="pro_id" id="pro_id" value="<?php echo $pro_id; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="pro_nome">Titulo</label>
                                <input type="text" class="form-control" value="<?php echo $reg->pro_nome; ?>" data-rule-required="true" required id="pro_nome" placeholder="Digite o nome do produto" name="pro_nome">
                            </div>
                            <div class="form-group">
                                <label for="pro_link">Link</label>
                                <input type="url" class="form-control" value="<?php echo $reg->pro_link; ?>" data-rule-required="true" required id="pro_link" placeholder="Digite o link do produto" name="pro_link">
                            </div>
                            
                            <div class="form-group">
                                <label for="pro_descricao">Breve Descrição</label>
                                <textarea class="form-control" data-rule-required="true" required=""  id="pro_descricao" name="pro_descricao"><?php echo $reg->pro_descricao; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Imagem:</label>
                                <div class="controls">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="../<?php echo $reg->pro_imagem ?>" alt="" />
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-file"><span class="fileupload-new">Selecione a imagem</span>
                                                <span class="fileupload-exists">Alterar</span>
                                                <input type="file" class="default" name="pro_imagem" id="pro_imagem" /></span>
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
                    $pro_nome = $_POST['pro_nome'];
                    $pro_link = $_POST['pro_link'];
                    $pro_descricao = $_POST['pro_descricao'];
                    $pro_id = $_POST['pro_id'];

                    if (isset($_FILES['pro_imagem']['name']) && $_FILES['pro_imagem']['name'] != "") {
                        foreach ($dados as $reg) {
                            $imagem_antiga = $reg->pro_imagem;
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
                        $upArquivo->UploadArquivo($_FILES["pro_imagem"], "../midias/produtos/", $tipos);
                        $nome = $upArquivo->nome;
                        $imagem_final = substr($nome, 3);
                    } else {
                        $imagem_final = $imagem_antiga;
                    }
                    $config->update($pro_nome, $imagem_final, $pro_link, $pro_descricao, $pro_id);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


