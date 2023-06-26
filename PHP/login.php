<?php
    include("../conecta.php");

    $email      = $_POST["loginEmail"];
    $senha      = $_POST["loginSenha"];

    $comando = $pdo->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha" );
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);
    $resultado = $comando->execute();

    // Para voltar no formulário:
    if($resultado) {
        header("Location: ../html/login_singin.html");
        echo '<script type="text/javascript">
            window.onload = function () { alert("Welcome"); } 
        </script>'; 
    } else {
        header("Location: ../html/login_singin.html");
    }


?>