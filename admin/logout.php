<?php session_start();$_SESSION['usuarioID'] = NULL;    $_SESSION['usuarioNome'] = NULL;    unset($_SESSION['usuarioID']);      unset($_SESSION['usuarioNome']);	session_destroy();?>	<script type="text/javascript" >        location.href="login";    </script>