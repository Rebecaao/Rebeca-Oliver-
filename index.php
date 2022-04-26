<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/promocoes.css">
    <link rel="stylesheet" href="css/marcas.css">
    <title>REBECA OLIVER©</title>
</head>
<body>
    
    <header>
        <div class="header">
            <div class="containner-header header" >
                <div class="menu-hamburguer"></div>
                <div class="logo">
                    <img src="img/logo oficial.png" alt="" class="logo">
                </div>
                <div class="icons-header">
                    <img src="img/icones/procurar.png" alt="">
                    <img src="img/icones/user.png" alt="">
                    <img src="img/icones/carrinho-de-compras (1).png" alt="">
                </div>
            </div>

            <div class="menu">
                <nav class="containner-menu menu" >
                    <a href="">PROMOÇÕES</a>
                    <a href="">FEMININO</a>
                    <a href="">MASCULINO</a>
                    <a href="">ACESSÓRIOS</a>
                    <a href="">QUEM SOMOS</a>

                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="containner-slides">
            <div class="containner">
                <div class="slider">
                    <div class="slides">
                        <!--Radio Buttons-->
                        <input type="radio" name="radiobtn" id="radio1">
                        <input type="radio" name="radiobtn" id="radio2">
                        <input type="radio" name="radiobtn" id="radio3">
                        <input type="radio" name="radiobtn" id="radio4">

                        <!--Slide images-->
                        <div class="slide first">
                            <img src="img/slide/slide1.jpeg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/slide/slide2.jpeg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/slide/slide3.jpeg" alt="">
                        </div>
                        <div class="slide">
                            <img src="img/slide/slide4.jpeg" alt="">
                        </div>

                        <div class="navigation-auto">
                            <div class="auto-btn1"></div>
                            <div class="auto-btn2"></div>
                            <div class="auto-btn3"></div>
                            <div class="auto-btn4"></div>
                        </div>
                    </div>

                        <div class="manual-navigation">
                            <label for="radio1" class="manual-btn"></label>
                            <label for="radio2" class="manual-btn"></label>
                            <label for="radio3" class="manual-btn"></label>
                            <label for="radio4" class="manual-btn"></label>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="containner-promocoes">
            <div class="promocoes">
                <h1 id="promocoes">PROMOCOES</h1>
            </div>

            <div class="containner-cards-promocoes">
                 <div class="containner-cads">
                    <div class="card">
                        <div class="img-promocoes">
                            <img src="img/promocoes/camiseta azul.png" alt="" class="img-produto">
                        </div>
                        <div class="descricao"></div>
                    </div>
        
                    <div class="card">
                        <div class="img-promocoes">
                            <img src="img/promocoes/bermuda huge.png" alt="" class="img-produto">
                        </div>
                            <div class="descricao"></div>
                        
                    </div>

                    <div class="card">
                        <div class="img-promocoes">
                            <img src="img/promocoes/camiseta caveira.png" alt=""class="img-produto" >
                        
                            <div class="descricao"></div>
                        
                    </div>
                </div>
                
            </div>
        </section>

        <section class="marcas">
            <div class="containner-primario-marcas marcas" >
                <div class="containner-marcas">
                    <div class="img-marca">
                        <img src="" alt="">
                    </div>
                    <div class="img-marca">
                        <img src="" alt="">
                    </div>
                    <div class="img-marca">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main> 
    <script src="js/main.js" defer></script>
</body>
</html>