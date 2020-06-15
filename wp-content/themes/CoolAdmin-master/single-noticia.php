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
                        <div class="col-md-12">
                                <!-- MAP DATA-->
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                     
                                    
                                    
                         <?php if (have_posts()) : the_post(); ?>
							<img class="rounded-circle mx-auto d-block" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Card image cap">
                                          <h1 class="text-sm-center mt-2 mb-4"><?php the_title(); ?></h1>
                                            <div class="location text-sm-center">
                                                <?php the_content(); ?></div>
                                       
						<?php endif; ?>
                                </div>
                                <!-- END MAP DATA-->
                            </div>
                     
                        </div>
                     
                        </div>
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
