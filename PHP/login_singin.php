<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nothing Gallery</title>
        <link rel="stylesheet" href="../css/login_singin.css">
        <script src="../javascript/login_singin.js"></script>
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
            <table style="width: 185vmin; height: 60vmin; border-spacing: 12em 0;">
                <tr>

                    <th style="width: 50%; height: 50vh;">

                        <div class="login"> <br>
                            <legend>Entrar</legend>
                            <br>
                            <form name="loginForm" action="../PHP/login.php" method="post" onsubmit="return lValidar();">
                                <input type="text" class="inform" id="loginEmail" placeholder="E-mail" name="loginEmail"><br>
                                <input type="password" class="inform" id="loginSenha" placeholder="Senha" name="loginSenha"><br>
                                <div style="text-align: left;">
                                </div>
                                <label id="lError" class="error" style="font-family: none;"></label>
                                
                                <br><br>

                                <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                    <input type="submit" class="entrar" id="entrar" placeholder="Entrar" name="entrar">
                                </div>
                            </form>

                            


                            <div class="login_alternative">
                                <img src="../images/loging_alternate.svg" class="login_alternatives">
                            </div>
                        </div>

                    </th>

                    <th style="width: 50%;">

                        <div class="cadastro">
                            <div class="login"> <br>
                                <legend>Cadastrar</legend>
                                <br><br>
                                <form name="cadastroForm" action="../PHP/cadastro.php" method="post" onsubmit="return cValidar();">

                                    <input type="text" class="inform" id="cadastroNome" placeholder="Nome" name="cadastroNome" ><br>
                                    <input type="text" class="inform" id="cadastroSobrenome" placeholder="Sobrenome" name="cadastroSobrenome" ><br>
                                    <input type="text" class="inform" id="cadastroEmail" placeholder="E-mail" name="cadastroEmail" ><br>
                                    <input type="password" class="inform" id="cadastroSenha" placeholder="Senha" name="cadastroSenha" ><br>
                                    <input type="password" class="inform" id="cadastroConfSenha" placeholder="Confirmar senha" name="cadastroConfSenha" ><br>
                                    <label id="cError" class="error"></label>
                                    <br>

                                    <div style="display: flex; flex-direction: row; justify-content: space-around;">
                                        <input type="submit" class="entrar" id="entrar" placeholder="Entrar" name="entrar">
                                    </div>

                                </form>

                                

                                <div class="login_alternative">
                                    <img src="../images/loging_alternate.svg" class="login_alternatives">
                                </div>
                            </div>
                        </div>

                    </th>

                </tr>
            </table>
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