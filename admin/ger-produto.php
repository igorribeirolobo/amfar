<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudProduto.php";
$conf = crudProduto::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Produtos
            <small>Gerencie os produtos de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Produtos</li>
        </ol>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-produto" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-image"></i> Cadastrar Novo Produto</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Link</th>
                                    <th>Descrição</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllProdutos(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->pro_id; ?></td>
                                    <td><img src="../<?php echo $reg->pro_imagem; ?>" style="max-width: 200px"></td>
                                    <td><?php echo $reg->pro_nome; ?></td>
                                    <td><i class="fa <?php echo $reg->pro_link; ?> fa-2x"></i></td>
                                    <td><?php echo $reg->pro_descricao; ?></td>
                                    <td>
                                        <a href="editar-produto/<?php echo $reg->pro_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->pro_id; ?>, 'produto')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Link</th>
                                    <th>Descrição</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>


