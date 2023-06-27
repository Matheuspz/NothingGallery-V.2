<?php 

    session_start();

    $cod = $_GET["cod"];

    include("conecta.php");
    
    $comando = $pdo->prepare("SELECT * FROM quadros WHERE idQuadros = :cod ");
    $comando->bindParam(':cod', $cod);
    $resultado = $comando->execute();

    while($linha = $comando->fetch())
    {
        $imagem = $linha["Imagem"];
        $nome = $linha["Nome"];
        $descricao = $linha["Descricao"];
        $preco = $linha["Preco"];
    }
    $i = base64_encode($imagem);
    $parcelamento = $preco/6;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nothing Gallery</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" href="css/comprar.css">
    <script src="javascript/comprar.js"></script>
</head>
<style>
    @font-face {
        font-family: Voga;
        src: url(font/Voga_Medium.otf);
    }

    body {
        margin: 0;
        height: auto;
        background-image: url(images/fundo.svg);
        background-size: cover;
    }
</style>

<body>

    <!-- CABEÇALHO PRESO -->

    <header> 
        <table class="tableHD">
            <tr> 
                <th> <a href="index.php" style="text-decoration: none; color: #ffffff;"> <h1> Nothing Gallery </h1> </a> </th>
                <th> <div class="searchbar"></div> </th> 

            </tr>
        </table>
    </header>

    <br><br><br><br><br>    

    <main>
        
        <div class="comprar">
            <div class="imgQDR"> <?php echo(" <img src='data:image/jpeg;base64,$i' style='width: 80%; height: 90%; border: 2px solid #ffffff;' id='imgQDR'> ")?> </div>
            <div class="infoQDR">
                <div class="nomeQDR" id="nomeQDR"> <?php echo "$nome" ?> </div>
                <div class="precoQDR" id="precoQDR"> R$ <?php echo"$preco" ?> </div>
                <div class="freteQDR">
                    Em 6x de R$ <?php echo round($parcelamento)?> sem juros
                </div> 

                <br><br>

                <div class="desc"><div class="desc_txt"> <?php echo($descricao) ?> </div></div>

                <div class="finalizarQDR">
                    <div style="width: 12vmin;"> </div>
                    <div class="tamahnoQDR">
                        <div style="font-size: 1.5em;">Tamanho</div>
                        <div style="display:flex; flex-direction: row;" class="tamanho">
                            <input type="button" value="&#10094;" class="btnTM" onclick="diminuirTM();">
                            <div class="tamanho" id="tamanho">G</div>
                            <input type="button" value="&#10095;" class="btnTM" onclick="aumentarTM();">
                        </div>
                    </div>
                    <div class="fimQDR">
                        <input type="button" class="finalizar" onclick="concluir();" value="Finalizar compra">
                    </div>
                </div>
            </div>
        </div>

    </main>

    <br><br><br><br><br><br>

    <footer>
        <div class="tbfooter"><br><br><br>
                <div class="thfooter">Contate-nos</div>
                    <br><br>
                    <a href="https://www.instagram.com/" target="_blank" class="links"> Instagram </a> <br>
                    <a href="https://twitter.com/i/flow/login" target="_blank" class="links"> Twitter </a> <br>
                    <l style="font-size: 1.5em;">Nothing_gallery@gmail.com</l>
                </div>
        </div>
    </footer>

</body>
<script>
    function concluir()
    {
        window.open("finalizar.php?cod=<?php echo $cod; ?>", "_blank")
    }
</script>
</html>