<?php
    include("../conecta.php");

    $cod = $_POST["cod"];
    $preco = $_POST["preco"];

    $numCart = $_POST["numCart"];
    $dataAtual = date("Y-m-d");

    session_start();

    $comando = $pdo->prepare("INSERT INTO vendascompra VALUES('',:user, :cod, :data, :cart, :preco)");
    $comando->bindParam(':user', $_SESSION['user']);
    $comando->bindParam(':cod', $cod);
    $comando->bindParam(':data', $dataAtual);
    $comando->bindParam(':cart', $numCart);
    $comando->bindParam(':preco', $preco);
    $resultado = $comando->execute();

    header("Location: ../index.php");

?>