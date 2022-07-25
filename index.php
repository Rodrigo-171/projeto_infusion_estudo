<?php
    session_start(); // inicia a variavel $_SESSION
    $url = explode('/', $_SERVER['REQUEST_URI']); //pega a url e transforma em uma array
    //$page = $url[3]; // URL Local
    $page = $url[1]; // URL Online
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> Infusion </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <meta name="author" content="Daniel">
        <meta name="description" content="descrição bacanuda">
        <meta name="keywords" content="html5, tecnologia">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        
      <link rel="stylesheet" href="style/normalize.css">
      <link rel="stylesheet" href="style/main.css">
      
    </head>
    <body class="no-js">
        
        <header class="header">
          <a href="index.html" class="logo-text">Infusion</a>
          
          <button style="display: none;" class="header__btnMenu"><i class="fas fa-bars fa-2x"></i><span class="sr-only">Menu</span></button>
          
          <nav class="header__nav">
            <ul>
              <li><a href="#">design folio</a></li>
              <li><a href="#">services</a></li>
              <li><a href="#">our business</a></li>
              <li><a href="#">how we help</a></li>
              <li><a href="#">take the tour</a></li>
              <li><a href="#">contact</a></li>
            </ul>
          </nav>
        </header>
        
        <section class="hero">            
          <h1 class="hero__title">
            Cutting edge WP business theme
          </h1>
          <p class="hero__text">Gutful of bottlo no dramas he's got a massive hooroo.</p>
          <a href="#" class="hero__btn">Buy it now</a>                      
        </section>

        <div class="container">
          <section class="people-cards">
              <article class="people-cards__card">               

                <img src="img/c01.jpg" alt="Carousel Img" class="people-cards__image">
                
                <div class="people-cards__avatar">
                  <img src="img/teamsprite_01.png" alt="Carousel Img">
                </div>
                <div class="people-cards__content">
                  <h2 class="people-cards__title">Lorem ipsum dolor sit amet consectetur</h2>
                  <p class="people-cards__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
                </div>
              </article>

              <article class="people-cards__card">               

                <img src="img/c02.jpg" alt="Carousel Img" class="people-cards__image">
                
                <div class="people-cards__avatar">
                  <img src="img/teamsprite_02.png" alt="Carousel Img">
                </div>
                <div class="people-cards__content">
                  <h2 class="people-cards__title">Lorem ipsum dolor sit amet consectetur</h2>
                  <p class="people-cards__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
                </div>
              </article>

              <article class="people-cards__card">               

                <img src="img/c03.jpg" alt="Carousel Img" class="people-cards__image">
                
                <div class="people-cards__avatar">
                  <img src="img/teamsprite_03.png" alt="Carousel Img">
                </div>
                <div class="people-cards__content">
                  <h2 class="people-cards__title">Lorem ipsum dolor sit amet consectetur</h2>
                  <p class="people-cards__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
                </div>
              </article>

              <article class="people-cards__card">               

                <img src="img/c04.jpg" alt="Carousel Img" class="people-cards__image">
                
                <div class="people-cards__avatar">
                  <img src="img/teamsprite_04.png" alt="Carousel Img">
                </div>
                <div class="people-cards__content">
                  <h2 class="people-cards__title">Lorem ipsum dolor sit amet consectetur</h2>
                  <p class="people-cards__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
                </div>
              </article>
          </section>
        </div>
        
        
        <section class="content">
          <div class="container">
            <article>
              <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa. Nullam condimentum mauris et rhoncus sagittis. Sed eu metus in diam tincidunt egestas non at odio. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>            
              <a href="#" class="button button-primary">BUTTON</a>
              <a href="#" class="button button-secundary">BUTTON</a>
            </article>

            <article>
              <h3>Lorem ipsum dolor sit amet consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed.</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa. Nullam condimentum mauris et rhoncus sagittis. Sed eu metus in diam tincidunt egestas non at odio.</p>
              <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Aenean vitae lectus erat. Duis consequat laoreet velit. Mauris convallis, sapien sit amet scelerisque accumsan, felis urna aliquet nunc, viverra mollis odio tellus a nisl. Nulla lobortis lectus non rutrum viverra. Sed et molestie libero. Sed ut ultrices dui.</p>
            </article>
          </div>
        </section>
        
        <section class="last-articles">
          <div class="last-articles__title">
              <div class="container">
                <h2>Latest Articles</h2>
              </div>
          </div>

          <div class="last-articles__thumbs">
              <a href="#"><img src="img/articles/01.jpg" alt=""></a>
              <a href="#"><img src="img/articles/02.jpg" alt=""></a>
              <a href="#"><img src="img/articles/03.jpg" alt=""></a>
              <a href="#"><img src="img/articles/04.jpg" alt=""></a>
              <a href="#"><img src="img/articles/05.jpg" alt=""></a>
              <a href="#"><img src="img/articles/06.jpg" alt=""></a>
              <a href="#"><img src="img/articles/07.jpg" alt=""></a>
              <a href="#"><img src="img/articles/08.jpg" alt=""></a>
              <a href="#"><img src="img/articles/09.jpg" alt=""></a>
              <a href="#"><img src="img/articles/10.jpg" alt=""></a>
              <a href="#"><img src="img/articles/11.jpg" alt=""></a>
              <a href="#"><img src="img/articles/12.jpg" alt=""></a>
          </div>
        </section>

        <div class="laptop-slider">            
          <div class="slideshow">
            <figure><img alt="" src="img/slider/slide-01.png" /></figure>
            <figure><img alt="" src="img/slider/slide-02.png" /></figure>
            <figure><img alt="" src="img/slider/slide-01.png" /></figure>
            <figure><img alt="" src="img/slider/slide-02.png" /></figure>
            <span class="prev" style="display: none;"><i class="fas fa-angle-left fa-4x"></i></span>
            <span class="next" style="display: none;"><i class="fas fa-angle-right fa-4x"></i></span>
          </div>                    
        </div>
        
        <section class="quote-container">
          <div class="quote-slideshow">
            <figure>
              <h2>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. </h2>
              <figcaption>
                Nam mi enim, auctor non ultricies.
              </figcaption>
            </figure>
            <figure>
              <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</h2>
              <figcaption>
                Nam mi enim, auctor.
              </figcaption>
            </figure>
            <span class="prev" style="display: none;"><i class="fas fa-angle-left fa-2x"></i></span>
          <span class="next" style="display: none;"><i class="fas fa-angle-right fa-2x"></i></span>
          </div>
          
          
          
        </section>

        <footer class="footer">
          <div class="container">
            <h2 class="footer__logo">Infusion</h2>
          
            <p>Nam mi enim, auctor non ultricies a, fringilla eu risus. Praesent vitae lorem et elit tincidunt accumsan suscipit eu libero. Maecenas diam est, venenatis vitae dui in, vestibulum mollis arcu. Donec eu nibh tincidunt, dapibus sem eu, aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

            <p>aliquam dolor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur commodo eros, vitae laoreet lectus aliq</p>

            <ul class="footer__links">
              <li><a href="#">List One</a></li>
              <li><a href="#">Page Two</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Work</a></li>
              <li><a href="#">Contact Me</a></li>
            </ul>
          </div>
        </footer>

        <script src="js/menu.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>