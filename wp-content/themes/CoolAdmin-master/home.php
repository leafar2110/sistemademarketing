<?php 

if(is_user_logged_in() != NULL)
{
  header('Location: http://174.138.38.5/sistemademarketing/dashboard/');
  // header('Location: http://localhost/Plataforma/dashboard/');
} 

?>

<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

?>

<?php get_header(); ?>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                                                    <div class="login-form">
                            <form class="login-form login-form-sesion" method="post">

                              <?php do_action( 'woocommerce_login_form_start' ); ?>
                              <div class="form-group">
                                <label for="username" class="">Nombre de usuario:*</label>
                                <input class="au-input au-input--full" type="text"  name="username" id="username" autocomplete="username" placeholder="" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>     
                              </div>       
                              <div class="form-group">  
                                <label for="username" class="">Contraseña:*</label>
                                <input class="au-input au-input--full" type="password" placeholder="" name="password" id="password" autocomplete="current-password" />
                                
                              </div> 
                              
                              <?php do_action( 'woocommerce_login_form' ); ?>
                              
                              <p class="form-row form-row-sesion form-sesion--betweewn ">
                                <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                  
                                  <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" checked="checked" /> <strong><?php esc_html_e( 'Recuérdame', 'woocommerce' ); ?></strong>
                                </label>
                                <a class="forgot" href="<?php echo get_home_url() ?>/index.php/olvidaste-contrasena">Olvidaste tu contraseña?</a> 
                              </p>
                              <div class="action-login text-center">  
                                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                                <button type="submit" class="au-btn au-btn--block au-btn--red m-b-20" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Iniciar Sesión', 'woocommerce' ); ?></button>
                              </div>

                              <?php do_action( 'woocommerce_login_form_end' ); ?>

                            </form>

                            <div class="register-link">
                                <p>
                                  ¿No tienes cuenta?
                                    <a href="<?php bloginfo('url'); ?>/registrar">Regístrate aquí</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>