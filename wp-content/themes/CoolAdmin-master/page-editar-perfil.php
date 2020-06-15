<?php
    if(is_user_logged_in()):
   
     ?>

<?php get_header(); ?>
<style type="text/css">
    .center-info{
        padding: 25px;
    text-align: center;
    }
    .copy-auto label{
        padding-top: 20px;
    color: black;
    }
   .copy-auto textarea{
                 height: 50px;
    font-size: 12px;
    padding: 15px;
    color: #666666;
    }
    #copyClip{
        background: transparent !important;
       
    }
   .copy-auto button{
            font-size: 14px;
    color: #d53625;
    margin-top: -10px;
    margin-bottom: -10px;
    }
</style>
 <?php global $current_user; get_currentuserinfo(); ?>
<body class="animsition">

        <?php get_template_part('partials/aside'); ?>
        <!-- END MENU SIDEBAR-->
   <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
           <?php get_template_part('partials/head-partial'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <?php $args = array( 'post_type' => 'Xtreme','author_name' => $current_user->user_login, 'posts_per_page' => 1);?>   
                    <?php $loop = new WP_Query( $args ); ?>
                    <?php while ($loop->have_posts()) : $loop->the_post();
                            $user_form = get_the_excerpt();
                            $user_id = get_current_user_id();
							
                           ?>
                                <?php 
                               
                                    
                                        $cuenta = true;
                                         $url_link = get_permalink();
							

                               ?>
                                       
                            <?php endwhile; ?>

                            <div class="col-lg-4">
                                <div class="card copy-auto">
                                    <div class="card-header">
                                        <strong>Xtreme 5/7</strong>
                                    </div>
                                     <?php if (  $cuenta != true ): ?>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Enlaces para Xtreme 5/7</h3>
                                        </div>
                                        <hr>
                                        
                                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); ?>
                                    </div>
                                    <?php else: ?>
                                     
                                                <label for="company" class=" form-control-label text-center">Registro Exitoso </label>
   <!-- Codigo usado en este ejemplo --><small for="company" class=" form-control-label text-center">Enlace de para Referidos </small>
                                                <textarea cols='20' rows='1' id="codigo" ><?php echo $url_link; ?></textarea><br>
                                                <div class="lista-buttons">
                                                <button class="js-lista" id="js-lista" href="#">Actualizar</button>
                                                    <button type="button" id="copyClip" class="" data-clipboard-target="#codigo">Copiar</button>
                                                <a href="<?php echo $url_link; ?>" target="_blank"> Ver</a>

                                                </div>
                                                

                                                <div class="lista">
                                                      <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); ?>

													
                                                </div>
                                               
                                      
                                        <div class="form-group center-info">
                                            
                                            
                                        </div>
                            

                                <?php endif; ?>
                                </div>
                            </div>
                            
                         
                             
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>

    </div>
  <style type="text/css">
        .lista-buttons{
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
        }
        
        .lista{
            display: none;
        }

        .lista.listaAbierta{
            display: block;
            padding: 0 20px;
            margin-top: 20px;
        }
    </style>

    
<?php else:

header('Location: https://www.sistemademarketing.com/');


 endif; ?>
<?php get_footer(); ?>

<script type="text/javascript">
        
        $('#js-lista').click(function(){
        
            $('.lista').toggleClass('listaAbierta')


        })
    </script>