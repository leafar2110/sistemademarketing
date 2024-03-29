

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        
                        <li class="<?php if(is_page(18)){ echo 'active has-sub';} ?> ">
                            <a class="js-arrow" href="<?php bloginfo('url'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Bienvenida</a>
                         
                        </li>
                          <li class="<?php if(is_page(9)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/editar-perfil">
                                <i class="far fa-check-square"></i>Editar Perfil</a>
                        </li>
                        <li class="<?php if(is_page(63)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/oportunidad">
                                <i class="fas fa-play"></i>Oportunidad</a>
                        </li>
                         <li class="<?php if(is_page(67)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/como-iniciar">
                                <i class="fas fa-play"></i>Como Iniciar</a>
                        </li>
                         <li class="<?php if(is_page(60)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/como-funciona">
                                <i class="fas fa-play"></i>Como funciona</a>
                        </li>
                         <li class="<?php if(is_page(69)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/productos">
                                <i class="fas fa-chart-bar"></i>Productos</a>
                        </li>
                          <li class="<?php if(is_page(71)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/formacion-general">
                                <i class="fas fa-play"></i>Formación General</a>
                        </li>
                           <li class="<?php if(is_page(73)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/desarrolla-tu-potencial">
                                <i class="fas fa-play"></i>Desarrolla tu potencial</a>
                        </li>
                         <li class="<?php if(is_page(14)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/biblioteca">
                                <i class="fas fa-file-text"></i>Biblioteca</a>
                        </li>
                           <li class="<?php if(is_page(75)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/herramientas">
                                <i class="fas fa-file-text"></i>Herramientas</a>
                        </li>
                        <li class="<?php if(is_page(65)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/comunicacion-efectiva">
                                <i class="fas fa-play"></i>Comunicación Efectiva</a>
                        </li>
                       
                        <li class="<?php if(is_page(16)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/noticias">
                                <i class="fas fa-desktop"></i>Noticias</a>
                        </li>
                        <!-- <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                       
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                         
                        <li class="<?php if(is_page(18)){ echo 'active has-sub';} ?> ">
                            <a class="js-arrow" href="<?php bloginfo('url'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Bienvenida</a>
                         
                        </li>
                          <li class="<?php if(is_page(9)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/editar-perfil">
                                <i class="far fa-check-square"></i>Editar Perfil</a>
                        </li>
                        <li class="<?php if(is_page(63)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/oportunidad">
                                <i class="fas fa-play"></i>Oportunidad</a>
                        </li>
                         <li class="<?php if(is_page(67)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/como-iniciar">
                                <i class="fas fa-play"></i>Como Iniciar</a>
                        </li>
                         <li class="<?php if(is_page(60)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/como-funciona">
                                <i class="fas fa-play"></i>Como funciona</a>
                        </li>
                         <li class="<?php if(is_page(69)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/productos">
                                <i class="fas fa-chart-bar"></i>Productos</a>
                        </li>
                          <li class="<?php if(is_page(71)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/formacion-general">
                                <i class="fas fa-play"></i>Formación General</a>
                        </li>
                           <li class="<?php if(is_page(73)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/desarrolla-tu-potencial">
                                <i class="fas fa-play"></i>Desarrolla tu potencial</a>
                        </li>
                         <li class="<?php if(is_page(14)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/biblioteca">
                                <i class="fas fa-file-text"></i>Biblioteca</a>
                        </li>
                           <li class="<?php if(is_page(75)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/herramientas">
                                <i class="fas fa-file-text"></i>Herramientas</a>
                        </li>
                        <li class="<?php if(is_page(65)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/comunicacion-efectiva">
                                <i class="fas fa-play"></i>Comunicación Efectiva</a>
                        </li>
                       
                        <li class="<?php if(is_page(16)){ echo 'active has-sub';} ?>">
                            <a href="<?php bloginfo('url'); ?>/noticias">
                                <i class="fas fa-desktop"></i>Noticias</a>
                        </li>
                       <!--  <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                         
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                           
                        </li> -->
                    </ul>
                </nav>
            </div>
        </aside>

      