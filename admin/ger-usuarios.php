<?php require 'header_and_menu.php'; 
require_once "config.php";   
require_once "class/crudUsuario.php";
$conf = crudUsuario::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Configurações de Usuario
            <small>Gerencie os usuarios em seu site</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Configurações de Usuario</li>
        </ol>
    </section>
    <section class="content">
     
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <a href="cadastrar-usuario" class="btn btn-flat btn-success pull-right margin"><i class="fa fa-book"></i> Cadastrar Novo Usuario</a>
                    <div class="clearfix"></div>
                    <div class="box-body">
                        
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Usuário</th>
                                    <th>Permissão</th>
                                    <th>E-mail</th>
                                    <th style="width: 120px">Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $dados = $conf->getAllUsuario(); 
                                foreach ($dados as $reg){
                                ?>
                                <tr>
                                    <td><?php echo $reg->user_id; ?></td>
                                    <td><?php echo $reg->user_nome; ?></td>
                                    <td><?php echo $reg->user_usuario; ?></td>
                                    <td><?php if($reg->user_permissao == 1 ) { echo "Administrador"; }else { echo "Usuário comum"; }?></td>
                                    <td><?php echo $reg->user_email; ?></td>
                                    <td>
                                        <a href="editar-usuario/<?php echo $reg->user_id; ?>" class="btn bg-navy btn-flat"><i class="fa fa-edit"></i></a>
                                        <a style="cursor: pointer" onclick="excluir(<?php echo $reg->user_id; ?>, 'usuario')" class="btn btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Usuário</th>
                                    <th>Permissão</th>
                                    <th>E-mail</th>
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