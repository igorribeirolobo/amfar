<?php
session_start();
$_SG['conectaServidor'] = true;
$_SG['abreSessao'] = true;
$_SG['caseSensitive'] = false;
$_SG['validaSempre'] = true;
$_SG['paginaLogin'] = 'login.php';
if ($_SG['conectaServidor'] == true) {
    require("config1.php");
}if ($_SG['abreSessao'] == true) {
    ini_set('default_charset', 'UTF-8');
}

function validaUsuario($usuario, $senha) {
    global $_SG;
    $cS = ($_SG['caseSensitive']) ? 'BINARY' : '';
    $nusuario = addslashes($usuario);
    $nsenha = md5(addslashes($senha));
    require("config1.php");
    $sql = 'SELECT * FROM tbl_usuario WHERE user_usuario = "' . $nusuario . '" AND user_senha = "' . $nsenha . '" LIMIT 1';
    try {
        $read = $db->prepare($sql);
        $read->execute();
    } catch (PDOException $ex) {
        echo 'Erro ao Buscar Login! - ' . $ex->getMessage();
    } $rs = $read->fetch(PDO::FETCH_OBJ);
    if (empty($rs)) {
        return false;
    } else {
        $_SESSION['usuarioTipo'] = $rs->user_permissao;
        $_SESSION['usuarioID'] = $rs->user_id;
        $_SESSION['usuarioNome'] = $rs->user_nome;
        if ($_SG['validaSempre'] == true) {
            $_SESSION['usuarioLogin'] = $usuario;
            $_SESSION['usuarioSenha'] = $senha;
        }return true;
    }
}

function protegePagina() {
    global $_SG;
    if (!isset($_SESSION['usuarioID']) OR ! isset($_SESSION['usuarioNome'])) {
        expulsaVisitante();
    } else if (!isset($_SESSION['usuarioID']) OR ! isset($_SESSION['usuarioNome'])) {
        if ($_SG['validaSempre'] == true) {
            if (!validaUsuario($_SESSION['usuarioLogin'], $_SESSION['usuarioSenha'])) {
                expulsaVisitante();
            }
        }
    }
}

function expulsaVisitante() {
    global $_SG;
    unset($_SESSION['usuarioID'], $_SESSION['usuarioNome'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
    echo" <script>document.location.href='login.php'</script>";
}
