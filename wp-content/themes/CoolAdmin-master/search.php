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
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <?php $nota_adicional_checked_labels = get_field( 'nota_adicional' ); ?>
                                            <?php if ( $nota_adicional_checked_labels ) : ?>
                                                <?php foreach ( $nota_adicional_checked_labels as $nota_adicional_label ): ?>
                                                <h2><?php echo $nota_adicional_label; ?></h2>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                                <span><?php the_title(); ?></span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas ></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
