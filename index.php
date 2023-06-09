<?php 
    session_start();

    if (isset($_SESSION['user'])) {
        echo '<script>
            window.addEventListener("load", function() {
                userLogin();
            });
        </script>';
    }
    include("conecta.php");


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
    <script src="javascript/carousel.js"></script>
    <script src="javascript/index.js"></script>

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
    .TS_th1 {
        width: 45%;
        height: 100%;
        background-image: url(images/quadro_borrado1.svg);
        background-size: cover;
        font-size: 4em;
        color: #F8FD0C;
    }
    .userIconBtn {
        background-image: url(images/user_icon.png);
        background-size: cover;
        background-position: center;
        border-radius: 50px;
        width: 5vmin;
        height: 5vmin;
    }
</style>
<script> 
    function EntrarCadastrar() {
        window.open("php/login_singin.php", "_self")
    }

</script>

<body>

    <!-- CABEÇALHO PRESO -->

    <header> 
        <table class="tableHD">
            <tr>
                <th>
                    <div style="width: 100%; height: 100%;" class="headerh1"> 
                        <a href="index.php" style="text-decoration: none; color: #ffffff;" id="logo" > <h1> Nothing Gallery </h1> </a>
                    </div>
                </th>
                <th> <div class="searchbar"></div> </th> 
                <th> 
                    <button style="display:block" class="btnEntrar" id="btnEntrar" onclick="EntrarCadastrar();">Entrar/Cadastrar</button>
                    <button style="display:none;" class='userIconBtn' id="userIconBtn" onclick="userIconToggle();"></button>
                </th>
                
            </tr>
        </table>
    </header>
    <script>
    function userLogin() {
        document.getElementById("btnEntrar").style.display = "none";
        document.getElementById("userIconBtn").style.display = "block";
    }
    </script> 

    <main>

        <!-- UserIcon -->
        <div style="display:none" id="userInfos">
            <div class="userIconDiv" id="userIconDiv">
                <button class="userIconDivBtn" onclick="location.href='php/usuario.php'">Minhas Informações</button>
                <button class="userIconDivBtn" onclick="location.href='php/logout.php'">Sair</button>
            </div>
        </div>
        
        <!-- QUADROS EM DESTAQUE  -->

        <table class="tableSpecial">
            <tr>
                <th class="TS_th1"> Quadros em destaque <img src="images/estrela.png" alt="estrela" class="estrela"></th>
                <th class="TS_th2">

                    <!-- SLIDESHOW DOS QUADROS-->

                    <!-- Slideshow container -->
                    <div class="slideshow-container" id="quadros0">

                        <div class="mySlidesTmpSp" id="templateQdr">
                            <img src="images/quadro1.svg" style="width: 90vmin;">
                            <div class="text"> Rain England </div>
                        </div>

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <img src="images/quadro1.svg" style="width: 90vmin;">
                            <div class="text"> Rain England </div>
                        </div>
                    
                        <div class="mySlides fade">
                            <img src="images/quadro2.svg" style="width: 90vmin;">
                            <div class="text"> Taiga Florest </div>
                        </div>
                    
                        <div class="mySlides fade">
                            <img src="images/quadro3.svg" style="width: 90vmin;">
                            <div class="text"> Cubic Penguin </div>
                        </div>
                    
                        <div class="container_plusSlides">
                            <table>
                                <!-- Next and previous buttons -->
                                <td><a class="prev" onclick="plusSlides(-1)">&#10094;</a></td>
                                <td><a class="next" onclick="plusSlides(1)">&#10095;</a></td>
                            </table>
                        </div>
                    </div>
                </th>
            </tr>
        </table>

        <!-- RODAPÉ DOS QUADROS EM DESTAQUE -->

        <div class="divspecial">
            <table class="table_rodapespecial">
                <tr>
                    <th> <img src="images/parcelamento.png" alt="parcelamento" style="width: 40%; height: 40%;"> </th>
                    <th> <img src="images/entregaBr.png" alt="entrega" style="width: 35%; height: 35%;"></th>
                </tr>
            </table>
        </div>

        <br><br><br><br><br>

        <table>
            <tr>
                <th class="tbquadros">QUADROS</th>
            </tr>
        </table>
        <br><br>
  

        <!-- Grunge -->

        <div style="background-color: #000000e5; height: 78vmin; width: 90vmin;" class="quadro">

            <table class="tableQuadros">

                <tr>

                    <th colspan="3">
                         <h1 class="h1grunge"><u>GRUNGE</u></h1>
                         <br>
                    </th>           
                    
                </tr>    

                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(19);" class="buttonQuadro">
                                <img src="images/Grunge/Brilliant sky.jpg" class="quadro_slide">
                                <div class="text_quadros"> Brilliant Sky </div>
                            </button>
                        </div>
                        <br>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(20);" class="buttonQuadro">
                                <img src="images/Grunge/Lighting city.jpg" class="quadro_slide">
                                <div class="text_quadros"> Lighting City </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(28);" class="buttonQuadro">
                                <img src="images/Grunge/Lost and forgotten.jpg" class="quadro_slide">
                                <div class="text_quadros"> Lost and forgotten </div>
                            </button>
                        </div>  
                    </td>  
                </tr>
                
                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(29);" class="buttonQuadro">
                                <img src="images/Grunge/Meteor shower.jpg" class="quadro_slide">
                                <div class="text_quadros"> Meteor shower </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(30);" class="buttonQuadro">
                                <img src="images/Grunge/Way for home.jpg" class="quadro_slide">
                                <div class="text_quadros">  Way for home  </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(31);" class="buttonQuadro">
                                <img src="images/Grunge/Way of river.jpg" class="quadro_slide">
                                <div class="text_quadros">  Way of river  </div>
                            </button>
                        </div>   
                    </td>    

                </tr>

            </table>
    
        </div>

        <br>
    
        <!-- SURREALISTA -->

        <div style="background-color: #000000e5; height: 78vmin; width: 90vmin;" class="quadro">

            <table class="tableQuadros">
    
                <tr>
    
                    <th colspan="3">
                        <h1 class="h1grunge"><u>SURREALISTA</u></h1>
                        <br>
                    </th>           
                      
                </tr>    
    
                <tr>
    
                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(32);" class="buttonQuadro">
                                <img src="images/Surrealismo/Giant lampshade.jpg" class="quadro_slide">
                                <div class="text_quadros"> Giant lampshade </div>
                            </button>
                        </div>
                        <br>
                    </td>
    
                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(33);" class="buttonQuadro">
                                <img src="images/Surrealismo/Horned creature.jpg" class="quadro_slide">
                                <div class="text_quadros"> Horned creature  </div>
                            </button>
                        </div>
                </td>
    
                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(34);" class="buttonQuadro">
                                <img src="images/Surrealismo/Light up.jpg" class="quadro_slide">
                                <div class="text_quadros"> Light up </div>
                            </button>
                        </div>  
                    </td>  
                </tr>
                    
                <tr>
    
                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(35);" class="buttonQuadro">
                                <img src="images/Surrealismo/Robots are here.jpg" class="quadro_slide">
                                <div class="text_quadros"> Robots are here </div>
                            </button>
                        </div>
                    </td>
    
                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(36);" class="buttonQuadro">
                                <img src="images/Surrealismo/Skyblock.jpg" class="quadro_slide">
                                <div class="text_quadros">  Skyblock  </div>
                            </button>
                        </div>
                    </td>
    
                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(37);" class="buttonQuadro">
                                <img src="images/Surrealismo/Stop in the time.jpg" class="quadro_slide">
                                <div class="text_quadros">  Stop in the time  </div>
                            </button>
                        </div>   
                    </td>    
    
                </tr>
    
            </table>
        
        </div>    

        <br>

        <!-- FOTORREALISMO -->

        <div style="background-color: #000000e5; height: 78vmin; width: 90vmin;" class="quadro">

            <table class="tableQuadros">

                <tr>

                    <th colspan="3">
                        <h1 class="h1grunge"><u>FOTORREALISMO</u></h1>
                        <br>
                    </th>           
                    
                </tr>    

                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(13);" class="buttonQuadro">
                                <img src="images/Fotorrealista/Abraham.jpg" class="quadro_slide">
                                <div class="text_quadros"> Abraham </div>
                            </button>
                        </div>
                        <br>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(14);" class="buttonQuadro">
                                <img src="images/Fotorrealista/Chad claus.jpg" class="quadro_slide">
                                <div class="text_quadros"> Santa Claus  </div>
                            </button>
                        </div>
                </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(15);" class="buttonQuadro">
                                <img src="images/Fotorrealista/King Mercury.jpg" class="quadro_slide">
                                <div class="text_quadros"> Freddie Mercury </div>
                            </button>
                        </div>  
                    </td>  
                </tr>
                    
                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(16);" class="buttonQuadro">
                                <img src="images/Fotorrealista/Mescla Jackson.jpg" class="quadro_slide">
                                <div class="text_quadros"> Michael Jackson </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(17);" class="buttonQuadro">
                                <img src="images/Fotorrealista/Splash.jpg" class="quadro_slide">
                                <div class="text_quadros">  Slash  </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(18);" class="buttonQuadro">
                                <img src="images/Fotorrealista/Visions of war.jpg" class="quadro_slide">
                                <div class="text_quadros">  Tommy Shelby  </div>
                            </button>
                        </div>   
                    </td>    

                </tr>

            </table>

        </div>

        <br>

        <!-- ANALOGIA -->

        <div style="background-color: #000000e5; height: 78vmin; width: 90vmin;" class="quadro">

            <table class="tableQuadros">

                <tr>

                    <th colspan="3">
                        <h1 class="h1grunge"><u>ANALOGIA</u></h1>
                        <br>
                    </th>           
                    
                </tr>    

                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(2);" class="buttonQuadro">
                                <img src="images/Analogia/Christmas day.jpg" class="quadro_slide">
                                <div class="text_quadros"> Christmas day  </div>
                            </button>
                        </div>
                        <br>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(1);" class="buttonQuadro">
                                <img src="images/Analogia/Alone street lamp.jpg" class="quadro_slide">
                                <div class="text_quadros"> Alone street lamp   </div>
                            </a>
                        </div>
                </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(3);" class="buttonQuadro">
                                <img src="images/Analogia/Litlle Autumn rain.jpg" class="quadro_slide">
                                <div class="text_quadros"> Little Autumn  </div>
                            </button>
                        </div>  
                    </td>  
                </tr>
                    
                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(5);" class="buttonQuadro">
                                <img src="images/Analogia/Thanksgiving.jpg" class="quadro_slide">
                                <div class="text_quadros"> Thanksgiving </div>
                            </a>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(4);" class="buttonQuadro">
                                <img src="images/Analogia/Snow and Rain.jpg" class="quadro_slide">
                                <div class="text_quadros">  Snow and Rain   </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(6);" class="buttonQuadro">
                                <img src="images/Analogia/Valentine_s day in Winter.jpg" class="quadro_slide">
                                <div class="text_quadros">  Valentine day in Winter  </div>
                            </button>
                        </div>   
                    </td>    

                </tr>

            </table>

        </div>

        <br>        

        <!-- CUBISMO -->

        <div style="background-color: #000000e5; height: 78vmin; width: 90vmin;" class="quadro">

            <table class="tableQuadros">

                <tr>

                    <th colspan="3">
                        <h1 class="h1grunge"><u>CUBISMO</u></h1>
                        <br>
                    </th>           
                    
                </tr>    

                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(7);" class="buttonQuadro">
                                <img src="images/Cubismo/Album rocket.jpg" class="quadro_slide">
                                <div class="text_quadros"> Album rocket </div>
                            </button>
                        </div>
                        <br>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(8);" class="buttonQuadro">
                                <img src="images/Cubismo/Bugged houses.jpg" class="quadro_slide">
                                <div class="text_quadros"> Bugged houses   </div>
                            </button>
                        </div>
                </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(9);" class="buttonQuadro">
                                <img src="images/Cubismo/Cubic temple.jpg" class="quadro_slide">
                                <div class="text_quadros"> Cubic temple  </div>
                            </button>
                        </div>  
                    </td>  
                </tr>
                    
                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(11);" class="buttonQuadro">
                                <img src="images/Cubismo/Horizon pink.jpg" class="quadro_slide">
                                <div class="text_quadros"> Horizon pink </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(12);" class="buttonQuadro">
                                <img src="images/Cubismo/Looking at the horizon.jpg" class="quadro_slide">
                                <div class="text_quadros"> Looking at the horizon  </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(10);" class="buttonQuadro">
                                <img src="images/Cubismo/Goat.jpg" class="quadro_slide">
                                <div class="text_quadros">  Goat   </div>
                            </button>
                        </div>   
                    </td>    

                </tr>

            </table>

        </div>

        <br>

        <!-- VARIADO -->

        <div style="background-color: #000000e5; height: 78vmin; width: 90vmin;" class="quadro">

            <table class="tableQuadros">

                <tr>

                    <th colspan="3">
                        <h1 class="h1grunge"><u>VARIADO</u></h1>
                        <br>
                    </th>           
                    
                </tr>    

                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(38);" class="buttonQuadro">
                                <img src="images/Variado/Alley sold.jpg" class="quadro_slide">
                                <div class="text_quadros"> Alley sold  </div>
                            </button>
                        </div>
                        <br>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(39);" class="buttonQuadro">
                                <img src="images/Variado/Camp of flowers.jpg" class="quadro_slide">
                                <div class="text_quadros"> Camp of flowers   </div>
                            </button>
                        </div>
                </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(40);" class="buttonQuadro">
                                <img src="images/Variado/Conifers florest.jpg" class="quadro_slide">
                                <div class="text_quadros"> Conifers florest  </div>
                            </button>
                        </div>  
                    </td>  
                </tr>
                    
                <tr>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(41);" class="buttonQuadro">
                                <img src="images/Variado/Crow.jpg" class="quadro_slide">
                                <div class="text_quadros"> Crow  </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(42);" class="buttonQuadro">
                                <img src="images/Variado/Elegant goat.jpg" class="quadro_slide">
                                <div class="text_quadros"> Elegant goat   </div>
                            </button>
                        </div>
                    </td>

                    <td class="tdQuadros">
                        <div class="mySlidesQDR fade">
                            <button onclick="Enviar(43);" class="buttonQuadro">
                                <img src="images/Variado/Farm.jpg" class="quadro_slide">
                                <div class="text_quadros">  Farm   </div>
                            </a>
                        </div>   
                    </td>    

                </tr>

            </table>

        </div>

    </main>



    <br><br>

    

    <footer>
        <div class="tbfooter"><br><br>
                <div class="thfooter">Contate-nos</div>
                    <br>
                    <a href="https://www.instagram.com/" target="_blank" class="links"> Instagram </a> <br>
                    <a href="https://twitter.com/i/flow/login" target="_blank" class="links"> Twitter </a> <br>
                    <a href="https://www.youtube.com/" target="_blank" class="links"> Youtube </a> <br>
                    <l style="font-size: 1.5em;">Nothing_gallery@gmail.com</l>
                    
                
                </div>
        </div>
    </footer>

</body>
<script>
    function Enviar(N)
    {
        window.open("comprar.php?cod="+N,"_self")
    }
</script>
</html>

