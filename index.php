<!DOCTYPE html>
<html lang="pt">
    
<head>
        <meta charset="utf-8" />
        <title>Rhyno</title>
        <meta name="description" content="Here goes description" />
        <meta name="author" content="author name" />
        <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
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
        <link href="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/color-style.css" rel="stylesheet" />
        <link href="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/farbtastic/farbtastic.css" rel="stylesheet" />
    </head>
    <body class="home-page">
        <div class="load-complete">
            <div class="load-position">
                <div class="logo"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/>Rhyno</div>
                <h6>Please wait, loading...</h6>
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
                            <div class="logo"><a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/>RHYNO</a></div>
                        </div>
                        <div class="col-md-9">
                            <nav class="menu">
                                <div class="responsive-menu d-text-c-h"><i class="fa fa-bars"></i></div>
                                <ul>
                                    <li class="active"><a class="d-text-c-h" data-anchor="slider-section" href="#">Home<span>/</span></a>
                                        <ul>
                                            <li><a class="d-text-c-h" href="index-2.html">Homepage</a></li>
                                            <li><a class="d-text-c-h" href="index-animations.html">Homepage with animations</a></li>
                                            <li><a class="d-text-c-h" href="index-no-animations.html">Homepage no animations</a></li>
                                            <li><a class="d-text-c-h" href="index-header-2.html">Homepage heaver v2</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="d-text-c-h" data-anchor="about-section" href="#">About<span>/</span></a></li>
                                    <li><a class="d-text-c-h" data-anchor="team-section" href="#">Team<span>/</span></a></li>
                                    <li><a class="d-text-c-h" data-anchor="portfolio-section" href="#">Works<span>/</span></a>
                                        <ul>
                                            <li><a class="d-text-c-h" href="project.html">Single project</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="d-text-c-h" data-anchor="blog-section" href="#">Blog<span>/</span></a>
                                        <ul>
                                            <li><a class="d-text-c-h" href="blog.html">Blog with sidebar</a></li>
                                            <li><a class="d-text-c-h" href="post.html">Blog post</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="d-text-c-h" data-anchor="shop-section" href="#">Shop<span>/</span></a>
                                        <ul>
                                            <li><a class="d-text-c-h" href="shop.html">Shop</a></li>
                                            <li><a class="d-text-c-h" href="shop-item.html">Shop Item</a></li>
                                            <li><a class="d-text-c-h" href="cart.html">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="d-text-c-h" data-anchor="contact-section" href="#">Contact</a></li>
                                    <li>
                                        <!-- SEARCH FORM -->
                                        <i class="fa fa-search d-text-c"></i>
                                        <form class="search-form">
                                            <input type="text" name="s" class="search-line" placeholder="Search...">
                                            <input type="submit" value="" class="search-button">
                                            <i class="fa fa-search d-text-c"></i>
                                        </form>
                                        <!-- SEARCH FORM -->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- === END HEADER === -->

            <!-- === START CONTENT === -->
            <div class="content">
                <!-- === START SLIDER SECTION === -->
                <section class="slider-section" id="slider-section">
                    <div class="slider" data-theme-plugin="slider" data-theme-item=".slide" data-theme-next=".slide-right" data-theme-prev=".slide-left" data-theme-container=".slide-wrapper">
                        <ul class="slider-arrows">
                            <li class="slide-left"><i class="fa fa-angle-left"></i></li>
                            <li class="slide-right"><i class="fa fa-angle-right"></i></li>
                        </ul>
                        <div class="bg-cover"></div>
                        <ul class="slide-wrapper">
                            <li class="slide">
                                <div class="slide-text">
                                    <h2 class="wow fadeInDown d-text-c-s" data-wow-delay="1s">We are <span>rhyno</span>, your lovely business partner</h2>
                                    <h4 class="wow rollIn" data-wow-delay="1s">It is easiest than never to reach us right now</h4>                                    
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/slide-1.jpg" alt="slide">
                            </li>
                            <li class="slide">
                                <div class="slide-text">
                                    <h2 class="wow fadeInUp d-text-c-s" data-wow-delay="1s">We are <span>rhyno</span>, your lovely business partner</h2>
                                    <h4 class="wow lightSpeedIn" data-wow-delay="1s">It is easiest than never to reach us right now</h4>                                    
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/slide-2.jpg" alt="slide">
                            </li>
                            <li class="slide">
                                <div class="slide-text">
                                    <h2 class="wow flip d-text-c-s" data-wow-delay="1s">We are <span>rhyno</span>, your lovely business partner</h2>
                                    <h4 class="wow pulse" data-wow-delay="1s">It is easiest than never to reach us right now</h4>                                    
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/slide-3.jpg" alt="slide">
                            </li>
                        </ul>

                        <ul class="slider-dots" data-theme-plugin="bullets">
                            <li class="d-border-c-h"></li>
                            <li class="d-border-c-h"></li>
                            <li class="d-border-c-h"></li>
                        </ul>
                    </div>
                </section>
                <!-- === END SLIDER SECTION === -->

                <!-- === START ABOUT === -->
                <div class="about-section dark-side" id="about-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="site-title-2">
                                    <h1 class="d-text-c">Get to Know Us</h1>
                                    <h2>About</h2>
                                    <h3><span class="d-bg-c"></span>Vix rebum oblique laboramus ad, prompta reprimique ea eos copiosae appellantur, prompta reprimique. </h3>
                                </div>
                            </div>
                            <div class="col-md-8 white-side">
                                <div class="about-box-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-1a.jpg" alt="about img" />            
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about-box-2-name">
                                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i1.png" alt="icon" class="icon-a d-bg-c" />
                                                <h1>Product Visual<br/>identity</h1>
                                                <h6>Branding</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="about-box-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about-box-2-name-2">
                                                 <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i2.png" alt="icon" class="icon-a d-bg-c" />
                                                <h1>advanced web<br/>development</h1>
                                                <h6>IT / Web</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-2a.jpg" alt="about img" /> 
                                        </div>
                                    </div>
                                </div>
                                <div class="about-box-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-3a.jpg" alt="about img" />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about-box-2-name">
                                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/about-i3.png" alt="icon" class="icon-a d-bg-c" />
                                                <h1>modern graphic<br/>
                                                design</h1>
                                                <h6>Design</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </div>
                </div>
                <!-- === END ABOUT === -->

                <!-- === START STATISTICS === -->
                <div class="statistics-section statistics-section-2">
                    <div class="bg-cover">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="statistic">
                                        <span class="divide"></span>
                                        <h3><span class="counter-all">36</span></h3>
                                        <h6>awards</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="statistic">
                                        <span class="divide"></span>
                                        <h3><span class="counter-all">53</span></h3>
                                        <h6>projects</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="statistic">
                                        <span class="divide"></span>
                                        <h3><span class="counter-all">346</span></h3>
                                        <h6>clients</h6>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="statistic">
                                        <h3><span class="counter-all">89</span></h3>
                                        <h6>concepts</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END STATISTICS === -->

                <!-- === START WHYUS === -->
                <div class="whyus-section" id="whyus-section">
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
                </div>
                <!-- === END WHYUS === -->

                <!-- === START CLIENTS === -->
                <div class="clients-section d-bg-c" id="clients-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 no-padding">
                                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-1a.png" alt="clinets" /></a>
                            </div>
                            <div class="col-md-2 no-padding">
                                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-2a.png" alt="clinets" /></a>
                            </div>
                            <div class="col-md-2 no-padding">
                                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-3a.png" alt="clinets" /></a>
                            </div>
                            <div class="col-md-2 no-padding">
                                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-4a.png" alt="clinets" /></a>
                            </div>
                            <div class="col-md-2 no-padding">
                                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-5a.png" alt="clinets" /></a>
                            </div>
                            <div class="col-md-2 no-padding">
                                <a href="#"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/clients-6a.png" alt="clinets" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END CLIENTS === -->

                <!-- === START TEAM === -->
                <div class="team-section dark-side" id="team-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="site-title-2">
                                    <h1 class="d-text-c">Who We Are?</h1>
                                    <h2>Our Team</h2>
                                    <h3><span class="d-bg-c"></span>Vix rebum oblique laboramus ad, prompta reprimique ea eos copiosae appellantur, prompta reprimique. </h3>
                                </div>
                            </div>
                            <div class="col-md-8 white-side">
                                <div class="slider" data-theme-plugin="slider" data-theme-item=".slide" data-theme-next=".slide-right" data-theme-prev=".slide-left" data-theme-container=".slide-wrapper">
                                    <ul class="slide-wrapper">
                                        <li class="slide">
                                            <div class="team-member">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/member-1.jpg" alt="member" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Andrea clark</h3>
                                                        <h6>Designer</h6>
                                                        <p>Quo et sale facete disputando, ne causae option gloriatur  Ex sea latine gubergren, te minim novum sapientem iusmei. Ex sea latine gubergren, te minim novum sapientem ius.</p>
                                                        <ul class="socials">
                                                            <li><a href="#"><i class="fa d-text-c-h fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="slide">
                                            <div class="team-member">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/member-2.jpg" alt="member" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Agelica Morvis</h3>  
                                                        <h6>Art Director</h6>
                                                        <p>Quo et sale facete disputando, ne causae option gloriatur  Ex sea latine gubergren, te minim novum sapientem iusmei. Ex sea latine gubergren, te minim novum sapientem ius.</p>
                                                        <ul class="socials">
                                                            <li><a href="#"><i class="fa d-text-c-h fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="slide">
                                            <div class="team-member">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/member-3.jpg" alt="member" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h3>Sarah Doen</h3>
                                                        <h6>Marketing Manager</h6>
                                                        <p>Quo et sale facete disputando, ne causae option gloriatur Ex sea latine gubergren, te minim novum sapientem ius mei. Ex sea latine gubergren, te minim novum sapientem ius.</p>
                                                        <ul class="socials">
                                                            <li><a href="#"><i class="fa d-text-c-h fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-instagram"></i></a></li>
                                                            <li><a href="#"><i class="fa d-text-c-h fa-google-plus"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="slider-dots" data-theme-plugin="bullets">
                                        <li class="d-bg-c"></li>
                                        <li class="d-bg-c"></li>
                                        <li class="d-bg-c"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END TEAM === -->  

                <!-- === START CUSTOM === -->
                <div class="custom-section" id="custom-section">
                    <div class="container">
                        <div class="col-md-6">
                            <h3>One Day With Us</h3>
                            <br/>
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collaps-1" class="collapsed">Our mission</a>
                                        </h4>
                                    </div>
                                    <div id="collaps-1" class="panel-collapse collapse" style="height: 0px;">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collaps-2">our vision</a>
                                        </h4>
                                    </div>
                                    <div id="collaps-2" class="panel-collapse collapse in" style="height: auto;">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collaps-3" class="collapsed">our values</a>
                                        </h4>
                                    </div>
                                    <div id="collaps-3" class="panel-collapse collapse">
                                        <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Skills We've Got</h3>
                            <br/>
                            <div class="skill-one">
                                <h5>WordPress</h5>
                                <h6><span class="counter-all">80</span>%</h6>
                                <div class="skill-one-bg">
                                    <span class="d-bg-c wow bounceInLeft" data-wow-duration="3s" style="width: 80%;"></span>
                                </div>
                            </div>
                            <div class="skill-one">
                                <h5>Photoshop</h5>
                                <h6><span class="counter-all">90</span>%</h6>
                                <div class="skill-one-bg">
                                    <span class="d-bg-c wow bounceInLeft" data-wow-duration="3s" style="width: 90%;"></span>
                                </div>
                            </div>
                            <div class="skill-one">
                                <h5>HTML</h5>
                                <h6><span class="counter-all">66</span>%</h6>
                                <div class="skill-one-bg">
                                    <span class="d-bg-c wow bounceInLeft" data-wow-duration="3s" style="width: 66%;"></span>
                                </div>
                            </div>
                            <div class="skill-one">
                                <h5>PHP</h5>
                                <h6><span class="counter-all">76</span>%</h6>
                                <div class="skill-one-bg">
                                    <span class="d-bg-c wow bounceInLeft" data-wow-duration="3s" style="width: 76%;"></span>
                                </div>
                            </div>
                            <div class="skill-one">
                                <h5>Illustrator</h5>
                                <h6><span class="counter-all">85</span>%</h6>
                                <div class="skill-one-bg">
                                    <span class="d-bg-c wow bounceInLeft" data-wow-duration="3s" style="width: 85%;"></span>
                                </div>
                            </div>
                            <div class="skill-one">
                                <h5>SEO</h5>
                                <h6><span class="counter-all">70</span>%</h6>
                                <div class="skill-one-bg">
                                    <span class="d-bg-c wow bounceInLeft" data-wow-duration="3s" style="width: 70%;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END CUSTOM === -->

                <!-- === START PORTFOLIO === -->
                <div class="portfolio-section portfolio-section-2" id="portfolio-section">
                    <div class="dark-side">
                        <div class="container our-portfolio">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="site-title-2">
                                        <h1 class="d-text-c">Who We Are Doing?</h1>
                                        <h2>Our Works</h2>
                                        <h3><span class="d-bg-c"></span>Vix rebum oblique laboramus ad, prompta reprimique ea eos copiosae appellantur, prompta reprimique. </h3>
                                    </div>
                                </div>
                                <div class="col-md-6 white-side">
                                    <ul class="our-portfolio-filter" data-theme-plugin="filters">
                                        <li><a data-category="" class="d-text-c-h active" href="#">All</a></li>
                                        <li><a data-category="fashion" class="d-text-c-h" href="#">Fashion</a></li>
                                        <li><a data-category="print" class="d-text-c-h" href="#">Print</a></li>
                                        <li><a data-category="photography" class="d-text-c-h" href="#">Photograpy</a></li>
                                        <li><a data-category="abstract" class="d-text-c-h" href="#">Abstract</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-theme-plugin="masonry">
                        <div class="col-md-3 no-padding fashion">
                            <div class="portfolio-item">
                                <div class="portfolio-item-hover show-it">
                                    <h3><a href="#" class="d-text-c-h">Modeling With The Best</a></h3>
                                    <p>Fashion</p><br/>
                                    <p><span class="d-text-c">Client</span> Robotic Enterprises</p>
                                    <p><span class="d-text-c">Budget</span> $5400</p>
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/portfolio-1a.jpg" alt="portfolio" />
                            </div>
                        </div>
                        <div class="col-md-3 no-padding abstract">
                            <div class="portfolio-item">
                                <div class="portfolio-item-hover show-it">
                                    <h3><a href="#" class="d-text-c-h">Town Traffic</a></h3>
                                    <p>Abstract</p><br/>
                                    <p><span class="d-text-c">Client</span> Robotic Enterprises</p>
                                    <p><span class="d-text-c">Budget</span> $12000</p>
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/portfolio-2a.jpg" alt="portfolio" />
                            </div>
                        </div>
                        <div class="col-md-3 no-padding photography">
                            <div class="portfolio-item">
                                <div class="portfolio-item-hover show-it">
                                    <h3><a href="#" class="d-text-c-h">User Interface Design</a></h3>
                                    <p>Design</p><br/>
                                    <p><span class="d-text-c">Client</span> Robotic Enterprises</p>
                                    <p><span class="d-text-c">Budget</span> $1500</p>
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/portfolio-3a.jpg" alt="portfolio" />
                            </div>
                        </div>
                        <div class="col-md-3 no-padding print">
                            <div class="portfolio-item">
                                <div class="portfolio-item-hover show-it">
                                    <h3><a href="#" class="d-text-c-h">TypeEd Buysiness Cards</a></h3>
                                    <p>Print</p><br/>
                                    <p><span class="d-text-c">Client</span> Robotic Enterprises</p>
                                    <p><span class="d-text-c">Budget</span> $3000</p>
                                </div>
                                <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/portfolio-4a.jpg" alt="portfolio" />
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END PORTFOLIO === -->

                <!-- === START OFFER === -->
                <div class="offer-section" id="offer-section">
                    <div class="container">
                        <h1>What also we can offer you</h1>
                        <div class="offer-featured"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/mac.png" alt="mac" /></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="offer-box">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i1.png" alt="icon" />
                                    <span></span>
                                    <h3>graphic design</h3>
                                    <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="offer-box">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i2.png" alt="icon" />
                                    <span></span>
                                    <h3>vectorial design</h3>
                                    <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="offer-box">
                                    <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/offer-i3.png" alt="icon" />
                                    <span></span>
                                    <h3>web development</h3>
                                    <p>Quot lobortis reprehendunt te ius, id usu brute solet quodsi. Modo iusto ne sed, at tollit molestiae eum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END OFFER === -->

                <!-- === START TESTIMONIALS === -->
                <div class="testimonials-section" id="testimonials-section">
                    <div class="bg-cover">
                        <div class="container">
                            <div class="testimonials-slider" data-theme-plugin="slider" data-theme-item=".testimonial" data-theme-container=".testimonial-wrapper">
                                <ul class="testimonial-wrapper">
                                    <li class="testimonial">
                                        <div class="testimonial-cover">
                                            <img class="d-border-c" src="<?php echo bloginfo('stylesheet_directory'); ?>/images/avatar-1.jpg" alt="avatar" />
                                        </div>
                                        <div class="testimonial-content">
                                            <h3>Patricia Harris</h3>
                                            <h5>Umbrela Ltd, CEO</h5>
                                            <p>Mea eius primis definitiones ut, eu ius meis iusto qualisque. Erat vituperata usu ex, et nam probo etiam. Luptatum scriptorem sed ei, no nec etiam electram, natum perfecto ut sed. Est id possim recusabo, soluta doctus epicuri eu per. Periculis consectetuer pro an, ad pro omnis brute.</p>
                                        </div>
                                    </li>
                                    <li class="testimonial">
                                        <div class="testimonial-cover">
                                            <img class="d-border-c" src="<?php echo bloginfo('stylesheet_directory'); ?>/images/avatar-2.jpg" alt="avatar" />
                                        </div>
                                        <div class="testimonial-content">
                                            <h3>Harold Jakens</h3>
                                            <h5>Umbrela Ltd, Marketing Manager</h5>
                                            <p>Mea eius primis definitiones ut, eu ius meis iusto qualisque. Erat vituperata usu ex, et nam probo etiam. Luptatum scriptorem sed ei, no nec etiam electram, natum perfecto ut sed. Est id possim recusabo, soluta doctus epicuri eu per. Periculis consectetuer pro an, ad pro omnis brute.</p>
                                        </div>
                                    </li>
                                    <li class="testimonial">
                                        <div class="testimonial-cover">
                                            <img class="d-border-c" src="<?php echo bloginfo('stylesheet_directory'); ?>/images/avatar-3.jpg" alt="avatar" />
                                        </div>
                                        <div class="testimonial-content">
                                            <h3>Alicia Marron</h3>
                                            <h5>Umbrela Ltd, Fron-End Developer</h5>
                                            <p>Mea eius primis definitiones ut, eu ius meis iusto qualisque. Erat vituperata usu ex, et nam probo etiam. Luptatum scriptorem sed ei, no nec etiam electram, natum perfecto ut sed. Est id possim recusabo, soluta doctus epicuri eu per. Periculis consectetuer pro an, ad pro omnis brute.</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="testimonials-dots" data-theme-plugin="bullets">
                                    <li class="d-border-c d-bg-c-a"></li>
                                    <li class="d-border-c d-bg-c-a"></li>
                                    <li class="d-border-c d-bg-c-a"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END TESTIMONIALS === -->

                <!-- === START SHOP === -->
                <div class="shop-section" id="shop-section">
                    <div class="container">
                        <div class="site-title">
                            <div class="row">
                                <div class="col-md-7">
                                    <h1>What Have You Got There?</h1>
                                    <h2>Our Goods</h2>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="d-border-c">Vix rebum oblique laboramus ad, prompta reprimique ea eos copiosae appellantur, prompta reprimique. </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="shop-item">
                                    <div class="item-image">
                                        <div class="item-hover d-bg-c"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/cart.png" alt="icon" /></div>
                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/shop-1.jpg" alt="shop image" />
                                    </div>
                                    <span class="center-line"></span>
                                    <div class="item-details">
                                        <h3><a class="d-text-c-h" href="<?php echo bloginfo('stylesheet_directory'); ?>/shop-item.html">Nambu cast kettle</a></h3>
                                        <h5>Kitchen</h5>
                                        <h6>$265</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="shop-item">
                                    <div class="item-image">
                                        <div class="item-hover d-bg-c"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/cart.png" alt="icon" /></div>
                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/shop-2.jpg" alt="shop image" />
                                    </div>
                                    <span class="center-line"></span>
                                    <div class="item-details">
                                        <h3><a class="d-text-c-h" href="<?php echo bloginfo('stylesheet_directory'); ?>/shop-item.html">Cairo wall clock</a></h3>
                                        <h5>Home Deco</h5>
                                        <h6>$135</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="shop-item">
                                    <div class="item-image">
                                        <div class="item-hover d-bg-c"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/cart.png" alt="icon" /></div>
                                        <img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/shop-3.jpg" alt="shop image" />
                                    </div>
                                    <span class="center-line"></span>
                                    <div class="item-details">
                                        <h3><a class="d-text-c-h" href="<?php echo bloginfo('stylesheet_directory'); ?>/shop-item.html">Bufa Chair</a></h3>
                                        <h5>Office</h5>
                                        <h6>$455</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === START SHOP === -->

                <!-- === START PRICING TABLES === -->
                <div class="pricing-section pricing-tables-v2" id="pricing-section">
                    <div class="bg-cover">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <h2 class="pricing-table-name">Basic</h2>
                                        <div class="pricing-table-price">$25</div>
                                        <ul class="pricing-table-stuff">
                                            <li>PSD Files</li>
                                            <li>Web Hosting</li>
                                            <li>Free Concept</li>
                                            <li>Updates</li>
                                            <li>Premium Support</li>
                                            <li>Troubleshooting</li>
                                        </ul>
                                        <p><a href="#" class="button">Buy it now</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-popular">
                                        <h2 class="pricing-table-name">Gold</h2>
                                        <div class="pricing-table-price">$35</div>
                                        <ul class="pricing-table-stuff">
                                            <li>PSD Files</li>
                                            <li>Web Hosting</li>
                                            <li>Free Concept</li>
                                            <li>Updates</li>
                                            <li>Premium Support</li>
                                            <li>Troubleshooting</li>
                                        </ul>                                    
                                        <p><a href="#" class="button">Buy it now</a></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table">
                                        <h2 class="pricing-table-name">Extra</h2>
                                        <div class="pricing-table-price">$40</div>
                                        <ul class="pricing-table-stuff"> 
                                            <li>PSD Files</li>
                                            <li>Web Hosting</li>
                                            <li>Free Concept</li>
                                            <li>Updates</li>
                                            <li>Premium Support</li>
                                            <li>Troubleshooting</li>
                                        </ul>
                                        <p><a href="#" class="button">Buy it now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- === END PRICING TABLES === -->

                <!-- === START BLOG SECTION === -->
                <div class="blog-section" id="blog-section">
                    <div class="container">
                        <div class="site-title">
                            <div class="row">
                                <div class="col-md-7">
                                    <h1>What Are We Thinking About?</h1>
                                    <h2>Our Blog</h2>
                                </div>
                                <div class="col-md-5">
                                    <h3 class="d-border-c">Vix rebum oblique laboramus ad, prompta reprimique ea eos copiosae appellantur, prompta reprimique. </h3>
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
                            <div class="logo"><a href="#" class="top"><img src="<?php echo bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="logo"/>Rhyno</a></div>
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
        <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/options.js" type="text/javascript"></script>
        <script src="<?php echo bloginfo('stylesheet_directory'); ?>/js/plugins.js" type="text/javascript"></script>
        <script src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/color-js.js" type="text/javascript"></script>
        <script src="<?php echo bloginfo('stylesheet_directory'); ?>/color-box/farbtastic/farbtastic.js" type="text/javascript"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- =========================== END SCRIPTS ========================== -->
    </body>

</html>