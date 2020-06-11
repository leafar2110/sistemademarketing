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
                            <?php $args = array( 'post_type' => 'Noticia');?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Profile Card</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1"><?php the_title(); ?></h5>
                                            <div class="location text-sm-center">
                                                <?php the_content(); ?></div>
                                        </div>
                                        <hr>
                                        <div class="card-text text-sm-center">
                                            <a href="<?php the_permalink(); ?>">
                                               Leer mas
                                            </a>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>
<?php else:

header('Location: http://localhost/Plataforma');


 endif; ?>
<?php get_footer(); ?>
