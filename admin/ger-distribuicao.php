<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudDistribuicao.php";
$conf = crudDistribuicao::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Distribuicao
            <small>Gerencie os distribuicao de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Distribuicao</li>
        </ol>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-distribuicao" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-image"></i> Cadastrar Nova Cidade Atendida</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllDistribuicao(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->dis_id; ?></td>
                                    <td><?php echo $reg->dis_cidade; ?></td>
                                    <td><?php echo $reg->dis_estado; ?></td>
                                    <td>
                                        <a href="editar-distribuicao/<?php echo $reg->dis_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->dis_id; ?>, 'distribuicao')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
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


