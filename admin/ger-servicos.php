<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudServico.php";
$conf = crudServico::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Serviços
            <small>Gerencie os servicos de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Serviços</li>
        </ol>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-servico" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-image"></i> Cadastrar Novo Serviço</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllServicos(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->ser_id; ?></td>
                                    <td><img src="../<?php echo $reg->ser_imagem; ?>" style="max-width: 200px"></td>
                                    <td><?php echo $reg->ser_titulo; ?></td>
                                    <td><?php echo $reg->ser_descricao; ?></td>
                                    <td>
                                        <a href="editar-servico/<?php echo $reg->ser_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->ser_id; ?>, 'servico')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Imagem</th>
                                    <th>Titulo</th>
                                    <th>Descrição</th>
                                    <th>Opções</th>
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


