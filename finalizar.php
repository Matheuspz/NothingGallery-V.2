<?php 

    session_start();

    $cod = $_GET["cod"];

    include("conecta.php");
    
    $comando = $pdo->prepare("SELECT * FROM quadros WHERE idQuadros = :cod ");
    $comando->bindParam(':cod', $cod);
    $resultado = $comando->execute();

    while($linha = $comando->fetch())
    {
        $preco = $linha["Preco"];
    }

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
    <link rel="stylesheet" href="css/finalizar.css">
    <script src="finalizar.js"></script>
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
        background-size: 300vh;
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

    <br><br><br><br>

    <main>
        
        <div class="finalizar">
            <div class="titulo">
                <button onclick="pagVoltar();" class="btnVoltar" id="btnVoltar"><</button>
                <div style="width: 2vmin;" ></div>
                <H2 id="titulo" class="titulo">Selecione a forma de pagamento</H2>
            </div>
            <div class="fim1" id="metodoPag" >
                <button onclick="pagarCartao();" class="pagar" id="metodoPag">Pagamento com Cartão</button>
            </div>
            <div class="fim2" id="metodoPag2" >
                <button onclick="pagarPix();" class="pagar" id="metodoPag2">Pagamento com Pix</button>
            </div>      
            <div class="fim3" id="metodoPag3" >
                <div id="metodoPag3">R$ <?php echo $preco ?></div>
            </div>
            <!-- Cartão -->
            <form action="php/finalizarCartao.php" method="post" class="formC" style="display: none;" id="formC" onsubmit="return Validar();">
                <input type="text" name="numCart" id="numCart" placeholder="Número do Cartão" class="inform">
                <input type="text" name="nomeCart" id="nomeCart" placeholder="Nome completo do Titular" class="inform">
                <input type="text" name="vencC" id="vencC" placeholder="Data de Vencimento AA/MM" class="inform">
                <input type="text" name="codsegC" id="codsegC" maxlength="3" placeholder="Código de Segurança" class="inform"> 
                <input type="text" name="endereco" id="enderecoC" minlength="5" placeholder="Endereço" class="inform">
                <input type="hidden" name="cod" value="<?php echo $cod; ?>">
                <input type="hidden" name="preco" value="<?php echo $preco; ?>">
                <div style="height: 1px;"><label id="labelC" class="errorC"></label></div>
                <br><br>
                <input type="submit" value="Finalizar Compra" class="finalizarCompra">
            </form>
            <!-- Pix -->
            <div class="comprarPIX" id="comprarPix"> <br><br><br>
                <form action="#" method="post" id="formPix"onsubmit="return finalizarPix(event);">
                    <input type="text" name="Endereco" class="informEndPIX" id="enderecoPix" placeholder="Digite seu Endereço">
                    <div style="height: 1px;"><label class="error" id="error">Endereço inválido</label></div>
                    <div style="height: 2vmin;"></div>
                    <input type="submit" class="finPix" style="cursor: pointer;">
                </form>
            </div>
            <div class="qrcode" style="display: none;" id="qrcode">
                <img src="qrcode.png" alt="" style="width: 100%; height: 100%;"><br>
                <a href="index.php" class="qrcodeTxt" onclick="popUp();">Finalizar comprar</a>
            </div>

        </div>

    </main>

    <br><br><br>

    <footer>
        <div class="tbfooter"><br><br>
                <div class="thfooter">Contate-nos</div>
                    <br><br>
                    <a href="https://www.instagram.com/" target="_blank" class="links"> Instagram </a> <br>
                    <a href="https://twitter.com/i/flow/login" target="_blank" class="links"> Twitter </a> <br>
                    <l style="font-size: 1.5em;">Nothing_gallery@gmail.com</l>
                </div>
        </div>
    </footer>

</body>
</html>