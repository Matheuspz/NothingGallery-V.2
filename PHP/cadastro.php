<?php
    include("../conecta.php");

    $nome       = $_POST["cadastroNome"];
    $sobrenome  = $_POST["cadastroSobrenome"];
    $email      = $_POST["cadastroEmail"];
    $senha      = $_POST["cadastroSenha"];

    $comando = $pdo->prepare("INSERT INTO usuario VALUES(null ,'$nome','$sobrenome','$email', '$senha', null)" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: ../html/login_singin.html");


?>