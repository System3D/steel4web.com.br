<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8" />
    <title>Steel4Web</title>
    <meta name="description" content="Here goes description" />
    <meta name="author" content="author name" />
    <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/png"/>
    <!-- ======================================================================
    Mobile Specific Meta
    ======================================================================= -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- ======================================================================
    Style CSS + Google Fonts
    ======================================================================= -->
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/swipebox.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/animate.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/ionicons.min.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/css/jquery.fullpage.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/color-style.css" rel="stylesheet" />
    <link href="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/farbtastic/farbtastic.css" rel="stylesheet" />
</head>
                <body class="home-page">
                    <div class="load-complete">
                        <div class="load-position">
                            <div class="logo"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo_dark.png" alt="logo"/></div>
                            <h6>Carregando. Um minuto por favor...</h6>
                            <div class="loading">
                                <div class="loading-line"></div>
                                <div class="loading-break loading-dot-1"></div>
                                <div class="loading-break loading-dot-2"></div>
                                <div class="loading-break loading-dot-3"></div>
                            </div>
                        </div>
                    </div>
                    <!-- === START COLOR BOX === -->
                    <div class="settings-box">
                        <div class="settings-box-icon"><i class="fa fa-spin d-text-c fa-cog"></i></div>
                        <div class="settings-box-title">Settings Box</div>
                        <p>Primary color</p>
                        <ul id="site_color">
                            <li><span class="color_1"></span></li>
                            <li><span class="color_2"></span></li>
                            <li><span class="color_3"></span></li>
                            <li><span class="color_4"></span></li>
                            <li><span class="color-select"></span></li>      
                        </ul>
                        <hr> 
                        <p>Layout type</p>
                        <select name="site_layout">
                            <option value="wide">Wide</option>
                            <option value="boxed">Boxed</option>
                        </select>
                        <hr> 
                        <p>Background</p>
                        <ul id="background_patterns">
                            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-1.png" alt="patterns"></li>
                            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-2.png" alt="patterns"></li>
                            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-3.png" alt="patterns"></li>
                            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/square-4.png" alt="patterns"></li> 
                            <li><img src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/background/bg-image.jpg" alt="background"></li>       
                        </ul>
                    </div>
                    <!-- === END COLOR BOX === -->
                    <div class="box-wide">
                        <!-- === START HEADER === -->
                        <header class="header-black sticky-bar">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="logo"><a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/></a></div>
                                    </div>
                                    <div class="col-md-9">
                                        <nav class="menu">
                                            <div class="responsive-menu d-text-c-h"><i class="fa fa-bars"></i></div>
                                            <ul>
                                                <li class="active"><a class="d-text-c-h" data-anchor="slider-section" href="#">Home</a>
                                                    <ul>
                                                        <li><a class="d-text-c-h" href="index-2.html">Homepage</a></li>
                                                        <li><a class="d-text-c-h" href="index-animations.html">Homepage with animations</a></li>
                                                        <li><a class="d-text-c-h" href="index-no-animations.html">Homepage no animations</a></li>
                                                        <li><a class="d-text-c-h" href="index-header-2.html">Homepage heaver v2</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="d-text-c-h" data-anchor="engenharia-section" href="#">Engenharia</a></li>
                                                <li><a class="d-text-c-h" data-anchor="producao-section" href="#">Produção</a></li>
                                                <li><a class="d-text-c-h" data-anchor="logistica-section" href="#">Logística</a></li>
                                                <li><a class="d-text-c-h" data-anchor="montagem-section" href="#">Montagem</a></li>
                                                <li><a class="d-text-c-h" data-anchor="blog-section" href="#">Blog</a></li>                                    
                    <!-- <li><a class="d-text-c-h" data-anchor="blog-section" href="#">Blog</a>
                        <ul>
                            <li><a class="d-text-c-h" href="blog.html">Blog with sidebar</a></li>
                            <li><a class="d-text-c-h" href="post.html">Blog post</a></li>
                        </ul>
                    </li>                                     -->
                    <li><a class="d-text-c-h" data-anchor="contact-section" href="#">Contato</a></li>
<!--                                     <li>
                        <i class="fa fa-search d-text-c"></i>
                        <form class="search-form">
                            <input type="text" name="s" class="search-line" placeholder="Search...">
                            <input type="submit" value="" class="search-button">
                            <i class="fa fa-search d-text-c"></i>
                        </form>
                    </li>
                -->                            </ul>
            </nav>
        </div>
    </div>
</div>
</header>
<!-- === END HEADER === -->

<!-- === START CONTENT === -->
<div class="content" id="fullpage">

<!-- === START VIDEO SECTION === -->
<section class="video-section" id="video-section">

    <div class="bg-cover"></div>

    <div class="slide-text">
        <h2 class="wow flip d-text-c-s animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s;">
            <span>4D</span> + <span>WEB</span>
            <br/>
        </h2>
        <!-- <h3 class="wow pulse animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: pulse;">A maneira mais simples e eficaz de gestão e acompanhamento da estrutura metálica</h3> -->

        <h3 class="wow pulse animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: pulse;">Gestão e apresentação de projetos metálicos em 3D na web</h3>

        <div class="text-center">                            
            <a href="#" class="btn btn-primary btn-lg">Veja em ação</a>
            &nbsp;                                                            
            <a href="#" class="btn btn-primary btn-lg">Solicite demonstração</a>                            
        </div>

    </div>

    <!-- TESTE #569 -->
    <!-- <video autoplay  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
        <source src="<?php echo bloginfo('stylesheet_directory'); ?>/videos/home_bg.mp4" type="video/mp4"/>
        <source src="<?php echo bloginfo('stylesheet_directory'); ?>/videos/home_bg.webm" type="video/webm"/>
    </video> -->
    <video class="bg" preload="auto" autoplay="true" loop="true" muted="true">
        <source src="<?php echo bloginfo('stylesheet_directory'); ?>/videos/home_bg.mp4" type="video/mp4">
    </video>

    <span class="intro-icon animated bounce">
        <a href="#" data-anchor="about-section" data-scroll-reveal-id="1" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true" class=""><i class="fa fa-angle-down"></i></a>
    </span>

    <style>
    .intro-icon {
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
    }
    </style>
    
</section>

<!-- === END SLIDER SECTION === -->

<!-- === START ABOUT === -->
<div class="about-section dark-side" id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="site-title-2">
                    <h1 class="d-text-c">Conheça o app</h1>
                    <h2>Steel4web</h2>
                    <h3><span class="d-bg-c"></span>O software S4W é uma aplicação em nuvem desenvolvida com foco em simplificar e facilitar a gestão, apresentação, acompanhamento e análise de dados de projetos de estruturas metálicas, totalmente direto do seu navegador.</h3>
                </div>
            </div>
            <div class="col-md-8 white-side">
                <div class="about-box-2">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-1a.jpg" alt="about img" />             -->
                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/features/Teste.gif" alt="about img" /> 
                        </div>
                        <div class="col-md-6">
                            <div class="about-box-2-name">
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i1.png" alt="icon" class="icon-a d-bg-c" />
                                <h1>Gestão visual</h1>
                                <h6>Interface simples e intuitiva. Possibilita o gerenciamento de forma 100% visual.</h6> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-box-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-box-2-name-2">
                               <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i2.png" alt="icon" class="icon-a d-bg-c" />
                               <h1>Acompanhamento<br/>em tempo real</h1>
                                <h6>Todos os estágios de produção atualizados contínuamente (?)</h6>
                               
                           </div>
                       </div>
                       <div class="col-md-6">
                        <!-- <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-2a.jpg" alt="about img" />  -->
                        <img src="http://placehold.it/370x260" alt="about img" /> 
                    </div>
                </div>
            </div>
            <div class="about-box-2">
                <div class="row">
                    <div class="col-md-6">
                        <!-- <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-3a.jpg" alt="about img" /> -->
                        <img src="http://placehold.it/370x260" alt="about img" />
                    </div>
                    <div class="col-md-6">
                        <div class="about-box-2-name">
                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i3.png" alt="icon" class="icon-a d-bg-c" />
                            <h1>Visualização 3D<br/>
                                de projetos</h1>
                                <h6>Veja os seus projetos em 3D atravéz do próprio navegador.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</div>
<!-- === END ABOUT === -->

<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <p>
                    <button type="button" class="btn btn-primary btn-lg">Large button</button>
                    <button type="button" class="btn btn-default btn-lg">Large button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary">Default button</button>
                    <button type="button" class="btn btn-default">Default button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    <button type="button" class="btn btn-default btn-sm">Small button</button>
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                    <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                </p>
            </div>
            <div class="col-md-6 text-center">
                <button type="button" class="btn btn-default">Default</button>
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-info">Info</button>
                <button type="button" class="btn btn-warning">Warning</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-link">Link</button>
            </div>
        </div>
    </div>
</section> -->

<!-- === START STATISTICS === -->
<div class="statistics-section statistics-section-2">
    <div class="bg-cover">
        <div class="container text-center">
            <h1>Eleve sua empresa e processos à outro nível!</h1>
            <h2>Entenda as suas vantagens</h2>
        </div>
    </div>
</div>
<!-- === END STATISTICS === -->


<!-- === START PRODUCT === -->
<div class="product-section" id="engenharia-section">
    <div class="container">
        <div class="col-md-6">

            <div class="site-title-2">
                <h1 class="d-text-c">ENGENHARIA</h1>
                <h3>Recursos para os estágios de <strong>ENGENHARIA</strong> e <strong>PLANEJAMENTO</strong></h3>
                <!-- <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3> -->
            </div>

            <!-- <h3>One Day With Us</h3> -->
            <br/>
            <div class="features panel-group" id="engenharia-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-1" class="collapsed">Recurso 1</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-2">Recurso 2</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-3" class="collapsed">Recurso 3</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#engenharia-section-features" href="#engenharia-section-collapse-4" class="collapsed">Recurso 4</a>
                        </h4>
                    </div>
                    <div id="engenharia-section-collapse-4" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="d-text-c">&nbsp;</h1>
            <h2>&nbsp;</h2>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

            <br>
            <br>

            <div class="site-title-2">
                <h2>Muitos recursos para você</h2>
                <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
            </div>

        </div>
    </div>
</div>
<!-- === END PRODUCT === -->


<!-- === START PRODUCT === -->
<div class="product-section bg-grey" id="producao-section">
    <div class="container">
        <div class="col-md-6">

            <div class="site-title-2">
                <h1 class="d-text-c">PRODUÇÃO</h1>
                <h3>Recursos para os estágios de <strong>PCP</strong> e <strong>PRODUÇÃO</strong></h3>
                <!-- <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3> -->
            </div>

            <!-- <h3>One Day With Us</h3> -->
            <br/>
            <div class="features panel-group" id="producao-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-1" class="collapsed">Recurso 1</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-2">Recurso 2</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-3" class="collapsed">Recurso 3</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#producao-section-features" href="#producao-section-collapse-4" class="collapsed">Recurso 4</a>
                        </h4>
                    </div>
                    <div id="producao-section-collapse-4" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="d-text-c">&nbsp;</h1>
            <h2>&nbsp;</h2>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

            <br>
            <br>

            <div class="site-title-2">
                <h2>Muitos recursos para você</h2>
                <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
            </div>

        </div>
    </div>
</div>
<!-- === END PRODUCT === -->


<!-- === START PRODUCT === -->
<div class="product-section" id="logistica-section">
    <div class="container">
        <div class="col-md-6">

            <div class="site-title-2">
                <h1 class="d-text-c">LOGÍSTICA</h1>
                <h3>Recursos para os estágios de <strong>LOGÍSTICA</strong></h3>
                <!-- <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3> -->
            </div>

            <!-- <h3>One Day With Us</h3> -->
            <br/>
            <div class="features panel-group" id="logistica-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#logistica-section-features" href="#logistica-section-collapse-1" class="collapsed">Recurso 1</a>
                        </h4>
                    </div>
                    <div id="logistica-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#logistica-section-features" href="#logistica-section-collapse-2">Recurso 2</a>
                        </h4>
                    </div>
                    <div id="logistica-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#logistica-section-features" href="#logistica-section-collapse-3" class="collapsed">Recurso 3</a>
                        </h4>
                    </div>
                    <div id="logistica-section-collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#logistica-section-features" href="#logistica-section-collapse-4" class="collapsed">Recurso 4</a>
                        </h4>
                    </div>
                    <div id="logistica-section-collapse-4" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="d-text-c">&nbsp;</h1>
            <h2>&nbsp;</h2>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

            <br>
            <br>

            <div class="site-title-2">
                <h2>Muitos recursos para você</h2>
                <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
            </div>

        </div>
    </div>
</div>
<!-- === END PRODUCT === -->

<!-- === START PRODUCT === -->
<div class="product-section bg-grey" id="montagem-section">
    <div class="container">
        <div class="col-md-6">

            <div class="site-title-2">
                <h1 class="d-text-c">MONTAGEM</h1>
                <h3>Recursos para os estágios de <strong>EXPEDIÇÃO</strong> e <strong>MONTAGEM</strong></h3>
                <!-- <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3> -->
            </div>

            <!-- <h3>One Day With Us</h3> -->
            <br/>
            <div class="features panel-group" id="montagem-section-features">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#montagem-section-features" href="#montagem-section-collapse-1" class="collapsed">Recurso 1</a>
                        </h4>
                    </div>
                    <div id="montagem-section-collapse-1" class="panel-collapse collapse" style="height: 0px;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#montagem-section-features" href="#montagem-section-collapse-2">Recurso 2</a>
                        </h4>
                    </div>
                    <div id="montagem-section-collapse-2" class="panel-collapse collapse in" style="height: auto;">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#montagem-section-features" href="#montagem-section-collapse-3" class="collapsed">Recurso 3</a>
                        </h4>
                    </div>
                    <div id="montagem-section-collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#montagem-section-features" href="#montagem-section-collapse-4" class="collapsed">Recurso 4</a>
                        </h4>
                    </div>
                    <div id="montagem-section-collapse-4" class="panel-collapse collapse">
                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="d-text-c">&nbsp;</h1>
            <h2>&nbsp;</h2>
            <iframe width="100%" height="300" src="https://www.youtube.com/embed/ghA_gI0oe7M?list=PL1yyP-uh7GHDamwnD41RluCEJ0aNAk_Wl&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

            <br>
            <br>

            <div class="site-title-2">
                <h2>Muitos recursos para você</h2>
                <h3><span class="d-bg-c"></span>Para cada lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum quod ratione cumque, molestiae minus.</h3>
            </div>

        </div>
    </div>
</div>
<!-- === END PRODUCT === -->


<!-- === START WHYUS === -->
<!--  <div class="whyus-section" id="whyus-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <h3>Why Choose Us?</h3>
            <p>Sed mazim altera scriptorem te, vel habeo atomorum splendide at. Usu stet impetus ad. Ei errem adversarium vel, populo qualisque no vix.</p>
            <br/>
            <ul class="model-1">
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Vis graeci elaboraret assueverit te.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Eu euismod urbanitas quo, ut mel cibo dissentias persequeris.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Cibo noluisse reformidans at sit.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>At est corpora commune appellantur.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Ut tantas nonumy gubergren vis, erant dolorem est an.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Eirmod accumsan cum te, mel eu essent putant.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>An sea iriure regione saperet, at eum liber paulo persequeris.</li>
                <li><span class="d-border-c"><i class="d-border-c"></i></span>Et nec aliquam fuisset atomorum.</li>
            </ul>
            </div>
            <div class="col-md-6">
                <div class="whyus-featured"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/devices.png" alt="icon" /></div>
            </div>
        </div>
    </div>
</div> -->
<!-- === END WHYUS === -->

<!-- === START CLIENTS === -->
<div class="clients-section d-bg-c" id="clients-section">
    <div class="container">
        <h1 class="text-center">Utilizado por "grandes" empresas</h1>
        <h3 class="text-center">Conheça alguns clientes:</h3>
        <br>
        <br>
        <div class="row">
            <!-- <div class="col-md-2 no-padding">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-1a.png" alt="clients"/></a>
            </div> -->
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/metalfoort.png" alt="clients" class="img-responsive"/></a>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/demuth.png" alt="clients" class="img-responsive"/></a>
            </div>
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/dallemole.png" alt="clients" class="img-responsive"/></a>
            </div>
           <!--  <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-4a.png" alt="clients" class="img-responsive"/></a>
            </div> -->
            <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients/facebook.png" alt="clients" class="img-responsive"/></a>
            </div>
            <!-- <div class="col-md-3">
                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-6a.png" alt="clients"/></a>
            </div> -->
        </div>
    </div>
</div>
<!-- === END CLIENTS === -->


<!-- === START BLOG SECTION === -->
<div class="blog-section" id="blog-section">
    <div class="container">
        <div class="site-title">
            <div class="row">
                <div class="col-md-7">
                    <h1>Blog</h1>
                    <h2>Mantenha-se informado</h2>
                </div>
                <div class="col-md-5">
                    <h3 class="d-border-c">Acomapnhe nosso blog e obtenha informações úteis que podem auxiliar o crescimento da sua empresa.</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="blog-entry">
                    <div class="entry-image">
                        <div class="entry-hover"><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/post-hover.png" alt="hover image" /></a></div>
                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/blog-1.jpg" alt="image blog" />
                    </div>
                    <div class="entry-header">
                        <h3><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html" class="d-text-c-h">5 Steps of web development</a></h3>
                        <h5>Octomber 15, 2014</h5>
                    </div>
                    <div class="entry-content">
                        <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum. Eu mel nisl liber mucius. In cum tale dolorem mandamus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-entry">
                    <div class="entry-image">
                        <div class="entry-hover"><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/post-hover.png" alt="hover image" /></a></div>
                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/blog-2.jpg" alt="image blog" />
                    </div>
                    <div class="entry-header">
                        <h3><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html" class="d-text-c-h">5 Steps of web development</a></h3>
                        <h5>Octomber 15, 2014</h5>
                    </div>
                    <div class="entry-content">
                        <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum. Eu mel nisl liber mucius. In cum tale dolorem mandamus.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blog-entry">
                    <div class="entry-image">
                        <div class="entry-hover"><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/post-hover.png" alt="hover image" /></a></div>
                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/blog-3.jpg" alt="image blog" />
                    </div>
                    <div class="entry-header">
                        <h3><a href="<?php echo bloginfo('stylesheet_directory'); ?>/post.html" class="d-text-c-h">5 Steps of web development</a></h3>
                        <h5>Octomber 15, 2014</h5>
                    </div>
                    <div class="entry-content">
                        <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum. Eu mel nisl liber mucius. In cum tale dolorem mandamus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- === END BLOG SECTION === -->

<!-- START CONTACT SECTION -->
<div class="contact-section" id="contact-section">
    <div class="bg-cover">
        <div class="container">                        
            <h1>Contact us</h1>
            <form class="contact-form">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="contact-name" class="d-border-c-f contact-form-line" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="contact-email" class="d-border-c-f contact-form-line" placeholder="Email Address">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="contact-website" class="d-border-c-f contact-form-line" placeholder="Subject">
                    </div>
                    <div class="col-md-12">
                        <textarea name="contact-message" class="d-border-c-f contact-form-area" placeholder="Message"></textarea>
                        <p class="align-center"><input type="submit" value="Send" class="form-send d-border-c d-bg-c"></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END CONTACT SECTION -->

</div>
<!-- === END CONTENT === -->


<!-- === START FOOTER === -->
<footer class="footer">
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="logo"><a href="#" class="top"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/></a></div>
        </div>
        <div class="col-md-6">
            <ul class="socials">
                <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="d-text-c-h d-border-c-h"><i class="fa fa-rss"></i></a></li>
            </ul>  
        </div>              
    </div>  
</div>
<div class="bottom-side">
    <div class="container">
        <p class="copywrite">© Copyright 2014 by GeoThemes. All rights reserved.</p>
    </div>
</div>
</footer>
<!-- === END FOOTER === -->
</div>
<!-- =========================== START SCRIPTS ========================== -->
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/modernizr.custom.63321.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/waypoints.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/placeholder.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/masonry.pkgd.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.swipebox.min.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/wow.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/knob.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.counterup.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.vide.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/options.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/plugins.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/jquery.fullpage.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/color-js.js" type="text/javascript"></script>
<script src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/farbtastic/farbtastic.js" type="text/javascript"></script>

<script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/scripts.js" type="text/javascript"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!-- =========================== END SCRIPTS ========================== -->
</body>

      </html>