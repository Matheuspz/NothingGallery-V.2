<?php 
    session_start();

    include("../conecta.php");

    $comando = $pdo->prepare("SELECT * FROM usuario WHERE idUsuario = :user");
    $comando->bindParam(':user', $_SESSION['user']);
    $resultado = $comando->execute();

    while($linha = $comando->fetch())
    {
        $nome = $linha["Nome"];
        $sobrenome = $linha["Sobrenome"];
        $email = $linha["Email"];
        $senha = $linha["Senha"];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nothing Gallery</title>
        <link rel="stylesheet" href="../css/login_singin.css">
        <link rel="stylesheet" href="../css/usuario.css">
        <script src="../javascript/usuario.js"></script>
    </head>
    <body>

    <!-- CABEÇALHO PRESO -->

        <header> 
            <table class="tableHD">
                <tr> 
                    <th>
                        <div style="width: 100%; height: 100%; position: relative;"> 
                            <a href="../index.php" style="text-decoration: none; color: #ffffff;"> <h1> Nothing Gallery </h1> </a>
                        </div>
                    <th> 
                        <div class="searchbar"></div> 
                    </th> 

                </tr>
            </table>
        </header>
        <br><br><br>


        <main>

            <div class="Update"> <br>
                <legend>Altere seus dados aqui</legend>
                <br>
                <form name="formUpd" action="../PHP/update.php" method="post" onsubmit="return validarUpd(event);">
                    <label for="nome" class="labelUpd">Nome:</label>
                    <input type="text" class="inputUpd" name="nome" id="nomeUpd" value="<?php echo $nome; ?>" ><br>
                    
                    <label for="nome" class="labelUpd">Sobrenome:</label>
                    <input type="text" class="inputUpd" name="sobrenome" id="sobrenomeUpd" value="<?php echo $sobrenome; ?>" ><br>

                    <label for="nome" class="labelUpd">Email:</label>
                    <input type="text" class="inputUpd" name="email" id="emailUpd" value="<?php echo $email; ?>" ><br>

                    <label for="nome" class="labelUpd">Senha:</label>
                    <input type="text" class="inputUpd" name="senha" id="senhaUpd" value="<?php echo $senha; ?>" ><br>

                    <label id="errorUpd" class="error" style="font-family: none;"></label>
                                
                    <br><br>

                    <div style="display: flex; flex-direction: row; justify-content: space-around;">
                        <input type="submit" class="entrar" id="entrar" placeholder="Entrar" name="entrar">
                    </div>
                </form>
            </div>
        </main>







        <!-- RODAPÉ -->

        <br><br>

        <footer>
            <div class="tbfooter"><br><br>
                    <div class="thfooter">Contate-nos</div>
                        <br><br>
                        <a href="https://www.instagram.com/" target="_blank" class="links"> Instagram </a> <br>
                        <a href="https://twitter.com/i/flow/login" target="_blank" class="links"> Twitter </a> <br>
                        <a href="https://www.youtube.com/" target="_blank" class="links">Youtube</a> <br>
                        <l style="font-size: 1.5em;">Nothing_gallery@gmail.com</l>
                    </div>
            </div>
        </footer>
    </html>