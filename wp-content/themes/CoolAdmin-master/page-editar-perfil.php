<?php
    if(is_user_logged_in()):
   
     ?>

<?php get_header(); ?>
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">Xtreme 5/7</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Enlaces para Xtreme 5/7</h3>
                                        </div>
                                        <hr>
                                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 7, 'title' => false, 'description' => false ) ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Company</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                         <?php $args = array( 'post_type' => 'Xtreme', 'posts_per_page' => 1);?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                            <?php 
                                $user_id = get_current_user_id();

                                     if ( $user_id  == $user_id ): ?>
                                        <div class="form-group">
                                            <label for="company" class=" form-control-label">URL Referidos</label>
                                            <a href="<?php the_permalink(); ?>"> <?php the_permalink(); ?></a>
                                            
                                        </div>
                                    <?php endif; endwhile; ?>

                                    
                                      
                                    </div>
                                </div>
                            </div>
                         
                             
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020  <a href="https://wecan.company">We Can! Company</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php else:

header('Location: http://localhost/Plataforma');


 endif; ?>
<?php get_footer(); ?>