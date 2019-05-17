<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudCategoria.php";
$conf = crudCategoria::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Categoria 
            <small>Gerencie os categoria de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Categoria</li>
        </ol>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-categoria" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-image"></i> Cadastrar Nova Categoria</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Categoria</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllCategoria(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->cat_id; ?></td>
                                    <td><?php echo $reg->cat_titulo; ?></td>
                                    <td>
                                        <a href="editar-categoria/<?php echo $reg->cat_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->cat_id; ?>, 'categoria')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Categoria</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>