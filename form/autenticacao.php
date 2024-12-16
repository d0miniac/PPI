<?php
    session_start();

    if (isset($_POST["login"] && !isset($_POST["senha"]))){

        //Usuário não informou login e senha
        header("Location:login.html");
        exit();
    }

    //Função que verifica Banco de Dados
    if (!$_POST["login"]=="admin" || !$_POST["senha"]="1234"){

        header("Location:login.html");
        exit();
    }
    $_SESSION["login"] = "login";

    header("Location:main.php");