<?php require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudTextos.php";
$conf = crudTexto::getInstance(Conexao::getInstance());
$secao = $_GET['secao'];
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Textos
            <small>Gerencie os textos de seu site.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Textos</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Localização</th>
                                    <th>Texto</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllTextoBySecao($secao); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->txt_id; ?></td>
                                    <td><?php echo $reg->txt_obs; ?></td>
                                    <td><?php echo $reg->txt_texto; ?></td>
                                    <td>
                                        <a href="editar-texto/<?php echo $reg->txt_id; ?>" class="btn bg-navy btn-flat "><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Localização</th>
                                    <th>Texto</th>
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

