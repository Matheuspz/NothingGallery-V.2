<?php
    include("../conecta.php");

    $email      = $_POST["loginEmail"];
    $senha      = $_POST["loginSenha"];

    session_start();

    $comando = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha" );
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);
    $resultado = $comando->execute();

    if ($resultado) {
        $comando = $pdo->prepare("SELECT idUsuario FROM usuario WHERE email = :email AND senha = :senha");
        $comando->bindParam(':email', $email);
        $comando->bindParam(':senha', $senha);
        $comando->execute();
        $iduser = $comando->fetchColumn();

        if ($username) {
            $_SESSION['user'] = $iduser;

            header("Location: ../index.php");
        } else {
            // Nenhum resultado encontrado, redirecione para a página de login com mensagem de erro
            $_SESSION['error'] = "Credenciais inválidas";
            header("Location: ../php/login_singin.php");
        }
    } 
?>