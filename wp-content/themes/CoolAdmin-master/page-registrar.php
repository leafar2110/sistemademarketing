<?php get_header(); ?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?php bloginfo('url') ?>">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                             <?php echo do_shortcode('[user_registration_form id="22"]') ?>
                            
                            <div class="register-link">
                                <p>
                                ¿Ya tienes una cuenta?
                                    <a href="<?php bloginfo('url') ?>/iniciar-sesion">Iniciar Sesion</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php get_footer(); ?>