<?php require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudCategorias.php";
$conf = crudCategorias::getInstance(Conexao::getInstance());
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Categorias
            <small>Gerencie as categorias de produtos da sua loja virtual.</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Categorias</li>
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
                                    <th>Nome da Categoria</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllCategorias(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->cat_id; ?></td>
                                    <td><?php echo $reg->cat_nome; ?></td>
                                    <td>
                                        <a href="editar-produto/<?php echo $reg->conf_id; ?>" class="btn bg-navy btn-flat "><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Tipo de Configuração</th>
                                    <th>Valor 1</th>
                                    <th>Valor 2</th>
                                    <th>Status</th>
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


</div>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="dist/js/demo.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>
