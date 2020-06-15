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
                        <div class="col-md-12">
                            <div class="overview-wrap">
                                <h2 class="title-1"><strong>Como iniciar</strong></h2>
                            
                            </div>
                        </div>
                        <div class="row">

                    <?php $args = array( 'post_type' => 'Videos');?>   
                    <?php $loop = new WP_Query( $args ); ?>
                        <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                        <?php $categoria_de_video_checked_labels = get_field( 'categoria_de_video' ); ?>
                            <?php if ( $categoria_de_video_checked_labels ) : ?>
                                <?php foreach ( $categoria_de_video_checked_labels as $categoria_de_video_label ): ?>
                                    <?php if ($categoria_de_video_label == "Como Iniciar"): ?>
                                        <div class="col-lg-6">
                                <div class="au-card m-b-30 iframe-custom" style="width: 100%;">
                                <strong class="card-title"><?php the_title(); ?>
                                <?php $nota_adicional_checked_labels = get_field( 'nota_adicional' ); ?>
                                <?php if ( $nota_adicional_checked_labels ) : ?>
                                    <?php foreach ( $nota_adicional_checked_labels as $nota_adicional_label ): ?>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </strong>
                                <?php the_content(); ?>
                                </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                          
                  
                            <?php endwhile; ?>
                         
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
<?php else:

header('Location: http://174.138.38.5/sistemademarketing/');


 endif; ?>
<?php get_footer(); ?>