  <html>
    <head>
      <meta charset="utf-8" />
      <title>Kingscorpion</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- FontAwesome CSS -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- ElegantFonts CSS -->
      <link rel="stylesheet" href="css/elegant-fonts.css">
      <!-- themify-icons CSS -->
      <link rel="stylesheet" href="css/themify-icons.css">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="css/swiper.min.css">
      <!-- Styles -->
      <link rel="stylesheet" href="style.css">

      <link rel="stylesheet" href="css/dropdown.css">


      <style>
        .card-login {
          padding: 30px 0 0 0;
          width: 350px;
          margin: 0 auto;
        }
      </style>
    </head>

    <body>
      <div class="hero-content">
          <header class="site-header">
              <div class="top-header-bar">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                              <div class="header-bar-email d-flex align-items-center">
                                  <i class="fa fa-envelope"></i><a href="#">kingscorpiondelop@gmail.com</a>
                              </div><!-- .header-bar-email -->

                              <div class="header-bar-text lg-flex align-items-center">
                                  <p><i class="fa fa-phone"></i>(11)9999-9999 </p>
                              </div><!-- .header-bar-text -->
                          </div><!-- .col -->

                          <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                              <div class="header-bar-search">
                                  <form class="flex align-items-stretch">
                                      <input type="search" placeholder="O que Procura?">
                                      <button type="submit" value="" class="flex justify-content-center align-items-center"><i class="fa fa-search"></i></button>
                                  </form>
                              </div><!-- .header-bar-search -->

                              <div class="header-bar-menu">
                                  <ul class="flex justify-content-center align-items-center py-2 pt-md-0">
                                    <div class="dropdown">
                                      <button class="dropbtn">Login</button>
                                        <div class="dropdown-content">
                                          <div class="card-login">
                                            <div class="">
                                              <div class="card-header">
                                              Bem Vindo
                                              </div>
                                              <div class="card-body">
                                                <form action="valida_login.php" method="post">
                                                  <div class="form-group">
                                                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                                                  </div>
                                                <div class="form-group">
                                                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                                                </div>

                                                <?php
                                                  if(isset($_GET['login']) && $_GET['login'] == 'erro') {

                                                ?>

                                                <div class="text-danger">
                                                Usuário ou senha inválido(s)
                                                </div>

                                                <?php } ?>

                                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { 
                                                ?>

                                                <div class="text-danger">
                                                Faça login antes de acessar as páginas protegidas
                                                </div>
                                        
                                                <?php } ?>
                                                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                  </ul>
                              </div><!-- .header-bar-menu -->
                          </div><!-- .col -->
                      </div><!-- .row -->
                  </div><!-- .container-fluid -->
              </div><!-- .top-header-bar -->

              <div class="nav-bar">
                  <div class="container">
                      <div class="row">
                          <div class="col-9 col-lg-3">
                              <div class="site-branding">
                                  <h1 class="site-title"><a href="index.php" rel="home">King<span>scorpion</span></a></h1>
                              </div><!-- .site-branding -->
                          </div><!-- .col -->

                          <div class="col-3 col-lg-9 flex justify-content-end align-content-center">
                              <nav class="site-navigation flex justify-content-end align-items-center">
                                  <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                      <li class="current-menu-item"><a href="index.php"> Home</a></li>
                                      <li><a href="#"></a></li>
                                      <li><a href="#"></a></li>
                                  </ul>

                                  <div class="hamburger-menu d-lg-none">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                  </div><!-- .hamburger-menu -->

                                  <div class="header-bar-cart">
                                      <a href="#" class="flex justify-content-center align-items-center"><span aria-hidden="true" class="icon_bag_alt"></span></a>
                                  </div><!-- .header-bar-search -->
                              </nav><!-- .site-navigation -->
                          </div><!-- .col -->
                      </div><!-- .row -->
                  </div><!-- .container -->
              </div><!-- .nav-bar -->
          </header><!-- .site-header -->

          <div class="hero-content-overlay">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">
                              <header class="entry-header">
                                  <h4>Acelere seus processos e fluxos</h4>
                                  <h1>eleve<br/>suas expectativas</h1>
                              </header><!-- .entry-header -->

                              <div class="entry-content">
                                  <p>Com a KingScorpion você pode ter o controle completo de todos
                                  os problemas que ocorrem dentro do seu Ambiente, e com a praticidade e agilidade da plataforma para acelerar o atendimento e solução deles.
                                  Venha fazer parte do Futuro.</p>
                                  <p>
                                    <h4><strong>Nome: </strong>Gabriel Campos Gonçalves  <strong>RA: </strong>918104587<br>
                                    <strong>Nome: </strong>Hugo Henrique B Menezes  <strong>RA: </strong>918120764<br>
                                    <strong>Nome: </strong>Marcus V Mendes Dantas  <strong>RA: </strong>918110521<br>
                                    <strong>Nome: </strong>Bruno Tavares Batista Pinto  <strong>RA: </strong>918112192<br>
                                    <strong>Nome: </strong>Victor Hugo Barbosa Fusco  <strong>RA: </strong>918106938<br>
                                    <strong>Nome: </strong>Gustavo Proença de Souza  <strong>RA: </strong>918104606<br>
                                    <strong>Nome: </strong>Maurício Moura Gonçalves Pereira  <strong>RA: </strong>918112135<br>
                                    <strong>Nome: </strong>Kauê Capila Fernandes Reis  <strong>RA: </strong>917203752<br>
                                    <strong>Nome: </strong>Anderson Henrique da Silva  <strong>RA: </strong>917202704<br>
                                    <strong>Nome: </strong>Paulesson Silva dos Santos  <strong>RA: </strong>917204791<br>
                                    <strong>Nome: </strong>Julio Rafael Silva Alves de Aquino  <strong>RA: </strong>317102949</h4>
                                  </p>    
                              </div><!-- .entry-content -->

                              <footer class="entry-footer read-more">
                                  
                              </footer><!-- .entry-footer -->
                          </div><!-- .hero-content-wrap -->
                      </div><!-- .col -->
                  </div><!-- .row -->
              </div><!-- .container -->
          </div><!-- .hero-content-hero-content-overlay -->
      </div><!-- .hero-content -->

      <div class="clients-logo">
          <div class="container">
              <div class="row">
                  <div class="col-12 flex flex-wrap justify-content-center justify-content-lg-between align-items-center">
                      <div class="logo-wrap">
                          <img src="images/logo-1.png" alt="">
                      </div><!-- .logo-wrap -->

                      <div class="logo-wrap">
                          <img src="images/logo-2.png" alt="">
                      </div><!-- .logo-wrap -->

                      <div class="logo-wrap">
                          <img src="images/logo-3.png" alt="">
                      </div><!-- .logo-wrap -->

                      <div class="logo-wrap">
                          <img src="images/logo-4.png" alt="">
                      </div><!-- .logo-wrap -->

                      <div class="logo-wrap">
                          <img src="images/logo-5.png" alt="">
                      </div><!-- .logo-wrap -->
                  </div><!-- .col -->
              </div><!-- .row -->
          </div><!-- .container -->
      </div><!-- .clients-logo -->

      <footer class="site-footer">
          <div class="footer-widgets">
              <div class="container">
                  <div class="row">
                      <div class="col-12 col-md-6 col-lg-3">
                          <div class="foot-about">
                              <!--a class="foot-logo" href="#"><img src="images/foot-logo.png" alt=""></a-->
                              <h1 class="site-title"><a href="index.php" rel="home"><span>Kingscorpion</span></a></h1>            
                              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum. </p>

                              <p class="footer-copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This site is produced <i class="fa fa-heart-o" aria-hidden="true"></i> by <a target="_blank">Kingscorpiondevelopment</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                          </div><!-- .foot-about -->
                      </div><!-- .col -->

                      <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                          <div class="foot-contact">
                              <h2>Contact Us</h2>

                              <ul>
                                  <li>Email: kingscorpiondevelop@gmail.com</li>
                                  <li>Phone: (+55) 11 9999-9999</li>
                                  <li>Address: 40 Qualquer Rua 123 São Paulo-SP, BRA</li>
                              </ul>
                          </div><!-- .foot-contact -->
                      </div><!-- .col -->

                      <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                          <div class="quick-links flex flex-wrap">
                              <h2 class="w-100">Quick Links</h2>

                              <ul class="w-50">
                                  <li><a href="#">About </a></li>
                                  <li><a href="#">Terms of Use </a></li>
                                  <li><a href="#">Privacy Policy </a></li>
                                  <li><a href="#">Contact Us</a></li>
                              </ul>

                              <ul class="w-50">
                                  <li><a href="#">Documentation</a></li>
                                  <li><a href="#">Forums</a></li>
                                  <li><a href="#">Language Packs</a></li>
                                  <li><a href="#">Release Status</a></li>
                              </ul>
                          </div><!-- .quick-links -->
                      </div><!-- .col -->

                      <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                          
                      </div><!-- .col -->
                  </div><!-- .row -->
              </div><!-- .container -->
          </div><!-- .footer-widgets -->

          <div class="footer-bar">
              <div class="container">
                  <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-center">
                      <div class="col-12 col-lg-6">
                          <div class="download-apps flex flex-wrap justify-content-center justify-content-lg-start align-items-center">
                              <a href="#"><img src="images/app-store.png" alt=""></a>
                              <a href="#"><img src="images/play-store.png" alt=""></a>
                          </div><!-- .download-apps -->

                      </div>

                      <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                          <div class="footer-bar-nav">
                              <ul class="flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                                  <li><a href="#">DPA</a></li>
                                  <li><a href="#">Terms of Use</a></li>
                                  <li><a href="#">Privacy Policy</a></li>
                              </ul>
                          </div><!-- .footer-bar-nav -->
                      </div><!-- .col-12 -->
                  </div><!-- .row -->
              </div><!-- .container -->
          </div><!-- .footer-bar -->
      </footer><!-- .site-footer -->

  <script type='text/javascript' src='js/jquery.js'></script>
  <script type='text/javascript' src='js/swiper.min.js'></script>
  <script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
  <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
  <script type='text/javascript' src='js/custom.js'></script>

  </body>

  </html>