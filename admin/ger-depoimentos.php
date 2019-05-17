<?php require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudDepoimentos.php";
$conf = crudDepoimentos::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Depoimentos
            <small>Gerencie os depoimentos de seus clientes em seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Depoimentos</li>
        </ol>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-depoimento" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-book"></i> Cadastrar Novo Depoimento</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome do Cliente</th>
                                    <th>Descrição do Depoimento</th>
                                    <th>Cargo/Empresa</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllDepoimentos(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->dep_id; ?></td>
                                    <td><?php echo $reg->dep_nome; ?></td>
                                    <td><?php echo $reg->dep_texto; ?></td>
                                    <td><?php echo $reg->dep_ocupacao; ?></td>
                                    <td>
                                        <a href="editar-depoimento/<?php echo $reg->dep_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->dep_id; ?>, 'depoimento')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Nome do Cliente</th>
                                    <th>Descrição do Depoimento</th>
                                    <th>Cargo/Empresa</th>
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


