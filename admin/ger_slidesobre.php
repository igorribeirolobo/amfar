<?php 
require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudSlideSobre.php";
$conf = crudSlideSobre::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Slides (Sobre Nós)
            <small>Gerencie os slides da página inicial de seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Slides</li>
        </ol>
    </section>

    <section class="content">
        
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-slidesobre" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-image"></i> Cadastrar Novo Slide</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Atributo TITLE</th>
                                    <th>Atributo ALT</th>
                                    <th style="width: 70px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllSlides(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->ss_id; ?></td>
                                    <td><img src="../<?php echo $reg->ss_imagem; ?>" style="max-width: 200px"></td>
                                    <td><?php echo $reg->ss_title; ?></td>
                                    <td><?php echo $reg->ss_alt; ?></td>
                                    <td>
                                        <a href="editar-slidesobre/<?php echo $reg->ss_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->ss_id; ?>, 'slidesobre')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Imagem</th>
                                    <th>Atributo TITLE</th>
                                    <th>Atributo ALT</th>
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


