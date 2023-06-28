<?php 
    include("../conecta.php");

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    session_start();

    $comando = $pdo->prepare("UPDATE usuario SET Nome = :nome, Sobrenome = :sobrenome, Email = :email, Senha = :senha WHERE usuario.idUsuario = :user" );
    $comando->bindParam(':nome', $nome);
    $comando->bindParam(':sobrenome', $sobrenome);
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);
    $comando->bindParam(':user', $_SESSION['user']);
    $resultado = $comando->execute();

    header("Location: ../PHP/usuario.php");
    exit();
?>