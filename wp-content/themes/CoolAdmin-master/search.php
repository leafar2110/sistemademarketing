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
                             
                         
                         <?php while (have_posts()) : the_post(); ?>
                              <a href="<?php bloginfo('url'); ?>/biblioteca" class="col-md-6 col-lg-3">
                                <div class="statistic__item">
                                    <h2 class="number">

                                        <?php $nota_adicional_checked_labels = get_field( 'nota_adicional' ); ?>
                                        <?php if ( $nota_adicional_checked_labels ) : ?>
                                            <?php foreach ( $nota_adicional_checked_labels as $nota_adicional_label ): ?>
                                            <span class="badge badge-success float-right mt-1"><?php echo $nota_adicional_label; ?></span>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                    
                                    </h2>
                                    <span class="desc"><?php the_title(); ?></span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
</a>
                            <?php endwhile; ?>
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
<?php else:

header('Location: http://174.138.38.5/sistemademarketing/');


 endif; ?>
<?php get_footer(); ?>
