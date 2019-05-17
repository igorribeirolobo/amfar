<?php
    ob_start();
    include("seguranca.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['usuario']) && $_POST['usuario'] != ""){
            $usuario = $_POST['usuario'];
            
        }
        
        if(isset($_POST['senha']) && $_POST['senha'] != ""){
            $senha = $_POST['senha'];
            
        }
        if (validaUsuario($usuario, $senha) == true) {
            header("Location:index.php");
            
        } else {expulsaVisitante();}
        
    }