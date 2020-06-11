<?php
    if(is_user_logged_in()):
   
     ?>
<?php get_header(); ?>

<style type="text/css">
    .iframe-custom iframe{
        width: 100% !important;
    }
</style>
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

                    <?php $args = array( 'post_type' => 'Videos');?>   
                    <?php $loop = new WP_Query( $args ); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                        <?php $categoria_de_video_checked_labels = get_field( 'categoria_de_video' ); ?>
                            <?php if ( $categoria_de_video_checked_labels ) : ?>
                                <?php foreach ( $categoria_de_video_checked_labels as $categoria_de_video_label ): ?>
                                    <?php if ($categoria_de_video_label == "Comunicación Efectiva"): ?>
                                        <div class="col-lg-6">
                                <div class="au-card m-b-30 iframe-custom" style="width: 100%;">
                                <?php the_content(); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                          
                  
                            <?php endwhile; ?>
                         
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
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
<?php else:

header('Location: http://localhost/Plataforma');


 endif; ?>
<?php get_footer(); ?>