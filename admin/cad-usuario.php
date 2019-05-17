<?php require 'header_and_menu.php';
require_once "config.php";
require_once "class/crudUsuario.php";
$servico = crudUsuario::getInstance(Conexao::getInstance());
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cadastrar Usuario
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Configurações de Usuario</a></li>
            <li class="active">Cadastrar Usuario</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Digite os dados abaixo</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">

                <form role="form" action="cadastrar-usuario" method="post" id="validate">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="user_nome">Nome</label>
                            <input type="text" class="form-control" data-rule-required="true" data-msg-required="Este campo é obrigatório." id="dep_nome" placeholder="Digite o Nome do usuario" name="user_nome">
                        </div>
                        <div class="form-group">
                            <label for="user_usuario">Usuário</label>
                            <input type="text" class="form-control" data-rule-required="true" data-msg-required="Este campo é obrigatório."  id="user_usuario"  placeholder="Apenas letras e numeros. Sem símbolos ou acentos" name="user_usuario">
                        </div>
                        <div class="form-group">
                            <label for="user_senha">Senha</label>
                            <input type="password" class="form-control" data-rule-required="true" data-msg-required="Este campo é obrigatório." id="user_senha"  name="user_senha">
                        </div>
                        <div class="form-group">
                            <label for="user_senha">E-mail</label>
                            <input type="email" class="form-control" data-rule-required="true" data-msg-required="Este campo é obrigatório." id="user_email"  name="user_email">
                        </div>
                        <div class="form-group">
                            <label for="user_senha">Permissão</label>
                            <select name="user_permissao" class="form-control" data-rule-required="true">
                                <option value="">-- Selecione um --</option>
                                <option value="1">Administrador</option>
                                <option value="0">Usuário comum</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" name="btn_cad_dep" class="btn btn-primary btn-flat" value="Inserir Usuario">
                    </div>
                </form>
                <?php
                if (isset($_POST['btn_cad_dep'])) {
                    $user_nome = $_POST['user_nome'];
                    $user_usuario = $_POST['user_usuario'];
                    $user_senha = $_POST['user_senha'];
                    $user_permissao = $_POST['user_permissao'];
                    $user_email = $_POST['user_email'];
                    
                    
                    $servico->insert($user_nome, $user_usuario, $user_senha, $user_permissao, $user_email);
                }
                ?>
            </div>
        </div>
    </section>
</div>
<?php require 'footer.php'; ?>