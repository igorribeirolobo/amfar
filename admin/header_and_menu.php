<?php if (isset($_GET['pag']) && $_GET['pag'] != '') {

    $pg = $_GET['pag'];

} else {

    $pg = 1;

}

require("seguranca.php");

protegePagina();

include "config1.php";

$nome_usuario = $_SESSION['usuarioNome'];

$id_usuario = $_SESSION['usuarioID'];

$tipo_usuario = $_SESSION['usuarioTipo'];

if ($tipo_usuario == 1) {

    $sql = 'SELECT COUNT(*) as total FROM tbl_usuario WHERE user_nome = "' . $nome_usuario . '" AND user_id = ' . $id_usuario;

    try {

        $read = $db->prepare($sql);

        $read->execute();

    } catch (PDOException $ex) {

        echo 'Erro ao Buscar Login! - ' . $ex->getMessage();

    }

    $rs = $read->fetch(PDO::FETCH_OBJ);

    $num_rows = $rs->total;



    if ($num_rows == 0) {

        ?>

        <script type="text/javascript" >

            alert('Este usuário não é um dos Administradores! Consulte o Adminitrador do Sistema.');

            location.href = "login.php";

        </script>

    <?php

    } else {

        

    } 

} else {

    ?>

    <script type="text/javascript" >

        alert('Este usuário não é um dos Administradores! Consulte o Adminitrador do Sistema.');

        location.href = "login.php";

    </script>

<?php } ?>

<!DOCTYPE html>

<html>

    <head> 

        <meta charset="utf-8">

        <base href="http://amfar.com.br/amfar_novo/admin/">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <?php require 'titulos.php'; ?>

        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

        <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">

        <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">

        <link rel="stylesheet" href="dist/css/bootstrap-fileupload.css">

        <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link rel="shortcut icon" href="../img/logo.png">
        <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/579278d45f1699a469a9a12a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

        

    </head>

    <body class="hold-transition skin-red sidebar-mini">

        <div class="wrapper">



            <header class="main-header">

                <a href="home" class="logo">

                    <span class="logo-mini"><b>C</b>T</span>

                    <span class="logo-lg"><b>Code</b>Tech</span>

                </a>

                <nav class="navbar navbar-static-top" role="navigation">

                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">

                        <span class="sr-only">Toggle navigation</span>

                    </a>

                    <div class="navbar-custom-menu">

                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <img src="../img/logo.png" class="user-image" alt="User Image">

                                    <span class="hidden-xs"><?php echo $nome_usuario; ?></span>

                                </a>

                                <ul class="dropdown-menu">

                                    <!-- User image -->

                                    <li class="user-header">

                                        <img src="../img/logo.png" class="img-circle" alt="User Image">

                                        <p>

                                            <?php echo $nome_usuario; ?> 

                                        </p>

                                    </li>

                                    <li class="user-footer">

                                        <div class="pull-left">

                                            <a href="editar-usuario/<?php echo $id_usuario; ?> " class="btn btn-default btn-flat">Perfil</a>

                                        </div>

                                        <div class="pull-right">

                                            <a href="logout.php" class="btn btn-default btn-flat">Deslogar</a>

                                        </div>

                                    </li>

                                </ul>

                            </li>





                        </ul>

                    </div>

                </nav>

            </header>

            

            <aside class="main-sidebar">

                <section class="sidebar">

                    <div class="user-panel">

                        <div class="pull-left image">

                            <img src="../img/logo.png" class="img-circle" alt="User Image">

                        </div>

                        <div class="pull-left info">

                            <p><?php echo $nome_usuario; ?> </p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>

                        </div>

                    </div>

                    <ul class="sidebar-menu">

                        <li class="header">Menu Principal</li>

                        <li <?php if ($pg == 1) {echo 'class="active"';}?>>

                            <a href="home">

                                <i class="fa fa-home"></i> <span>Home</span> 

                            </a>

                        </li>

                        <li <?php if ($pg == 2) {echo 'class="active"';}?>>

                            <a href="gerenciamento-contato">

                                <i class="fa fa-cogs"></i> <span>Configurações de Contato</span> 

                            </a>

                        </li>
                        <li <?php if ($pg == 11) { echo 'class="active"'; }?>>
                            <a href="gerenciamento_slidehome">
                                <i class="fa fa-tablet"></i> <span>Slide Home</span> 
                            </a>
                        </li>
                        <li <?php if ($pg == 12) { echo 'class="active"'; }?>>
                            <a href="gerenciamento_slidesobre">
                                <i class="fa fa-tablet"></i> <span>Slide Sobre Nós</span> 
                            </a>
                        </li>

                        <li class="treeview">

                            <a href="#">

                                <i class="fa fa-files-o"></i> <span>Gerenciar Seções</span>

                                <i class="fa fa-angle-left pull-right"></i>

                            </a>

                            <ul class="treeview-menu">

                                <li>

                                    <a href="#"><i class="fa fa-circle-o"></i>Home & Boas Vindas<i class="fa fa-angle-left pull-right"></i></a>

                                    <ul class="treeview-menu">

                                        <li><a href="gerenciamento_textos/1"><i class="fa fa-circle-o"></i> Textos</a></li>

                                        <li><a href="gerenciamento_imagens/1"><i class="fa fa-circle-o"></i> Imagens</a></li>

                                    </ul>

                                </li>
                                <li>

                                    <a href="#"><i class="fa fa-circle-o"></i>Sobre Nós<i class="fa fa-angle-left pull-right"></i></a>

                                    <ul class="treeview-menu">

                                        <li><a href="gerenciamento_textos/2"><i class="fa fa-circle-o"></i> Textos</a></li>
                                        <li><a href="gerenciamento_imagens/2"><i class="fa fa-circle-o"></i> Imagens</a></li>

                                        

                                    </ul>

                                </li>

                                <li>

                                    <a href="#"><i class="fa fa-circle-o"></i> Diretoria<i class="fa fa-angle-left pull-right"></i></a>

                                    <ul class="treeview-menu">

                                        <li><a href="gerenciamento_textos/3"><i class="fa fa-circle-o"></i> Textos</a></li>
                                         <li><a href="gerenciamento_imagens/3"><i class="fa fa-circle-o"></i> Imagens</a></li>
                                    </ul>

                                </li>

                                <li>

                                    <a href="#"><i class="fa fa-circle-o"></i> Onde Estamos<i class="fa fa-angle-left pull-right"></i></a>

                                    <ul class="treeview-menu">

                                        <li><a href="gerenciamento_textos/4"><i class="fa fa-circle-o"></i>Textos </a></li>


                                    </ul>

                                </li>



                                <li>

                                    <a href="#"><i class="fa fa-circle-o"></i> Contato<i class="fa fa-angle-left pull-right"></i></a>

                                    <ul class="treeview-menu">

                                        <li><a href="gerenciamento_textos/5"><i class="fa fa-circle-o"></i> Textos</a></li>

                                        <li><a href="gerenciamento_imagens/5"><i class="fa fa-circle-o"></i> Imagens</a></li>

                                    </ul>

                                </li>

                                <li>

                                    <a href="#"><i class="fa fa-circle-o"></i> Call-to-action<i class="fa fa-angle-left pull-right"></i></a>

                                    <ul class="treeview-menu">

                                        <li><a href="gerenciamento_textos/6"><i class="fa fa-circle-o"></i>Textos </a></li>
                                        <li><a href="gerenciamento_imagens/6"><i class="fa fa-circle-o"></i>Imagens </a></li>
                                    </ul>

                                </li>
                            </ul>

                        </li>
                        <li <?php if ($pg == 10) {echo 'class="active"';}?>>

                            <a href="gerenciamento_usuarios">

                                <i class="fa fa-user"></i> <span>Usuários</span> 

                            </a>

                        </li>

                    </ul>

                </section>

            </aside>