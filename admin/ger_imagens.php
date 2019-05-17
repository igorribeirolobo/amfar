<?php require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudImagens.php";
$conf = crudImagem::getInstance(Conexao::getInstance());
$secao = $_GET['secao'];
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Imagens do Site
            <small>Gerencie os slides da página inicial de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Imagens do Site</li>
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
                                    <th>Imagem</th>
                                    <th>Localização</th>
                                    <th style="width: 70px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllImagensBySecao($secao); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->img_id; ?></td>
                                    <td><img src="../<?php echo $reg->img_imagem; ?>" style="max-width: 200px"></td>
                                    <td><?php echo $reg->img_obs; ?></td>
                                    <td>
                                        <a href="editar-imagem/<?php echo $reg->img_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                     <th>#</th>
                                    <th>Imagem</th>
                                    <th>Localização</th>
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


