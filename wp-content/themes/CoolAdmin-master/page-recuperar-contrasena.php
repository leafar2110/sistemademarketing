<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.2
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_lost_password_form' );
?>
<?php get_header(); ?>
<body class="animsition">
	<div class="main-thanks__content"> 
	 <div class="page-wrapper">
        <div class="page-content--bge5 main-thanks__content">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?php bloginfo('url') ?>">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
            <form class="login-form" role="form" method="post">

                <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input class="au-input au-input--full" type="text" name="user_login" id="user_login" autocomplete="username" placeholder="Email" />    
                </div>
                <div class="clear"></div>

                <?php do_action( 'woocommerce_lostpassword_form' ); ?>
                <div class="action-send text-center">
                    <input type="hidden" name="wc_reset_password" value="true" />
                    <button id="" type="submit" name="sign-in-button" value="<?php esc_attr_e( 'Reset password', 'woocommerce' ); ?>"
                        class="au-btn au-btn--block au-btn--red m-b-20">Enviar correo</button>
                    </div>
                    <?php wp_nonce_field( 'lost_password', 'woocommerce-lost-password-nonce' ); ?>
                </form>
                <?php do_action( 'woocommerce_after_lost_password_form' );?>
            </div>

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
   

    <?php  get_footer(); ?>

