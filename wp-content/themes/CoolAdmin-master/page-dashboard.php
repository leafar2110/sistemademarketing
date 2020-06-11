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
       
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Novedades</h2>
                                
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <?php $args = array( 'post_type' => 'Videos', 'posts_per_page' => 1);?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
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

 <?php $args = array( 'post_type' => 'Documentos', 'posts_per_page' => 1);?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
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

 <?php $args = array( 'post_type' => 'Noticia', 'posts_per_page' => 1);?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
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

 <?php $args = array( 'post_type' => 'Videos', 'posts_per_page' => 1);?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
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
                        <div class="overview-wrap">
                                    <h2 class="title-1">Cursos <strong>Lo mas nuevo</strong></h2>
                                
                                </div>
                        <div class="row">
                        <?php $args = array( 'post_type' => 'Videos', 'posts_per_page' => 2);?>   
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                            <div class="col-lg-6">
                                <div class="au-card recent-report iframe-custom ">
                                    <div class="au-card-inner">
                                        <h3 class="title-2"><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                             <?php endwhile; ?>
                       
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">PDF</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                     <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Fecha</th>
                                                <th>order ID</th>
                                                <th>Nombre</th>
                                                <th class="text-right">Nota</th>
                                                <th class="text-right">Descargar</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $args = array( 'post_type' => 'Documentos', 'posts_per_page' => 5);?>   
                                         <?php $loop = new WP_Query( $args ); ?>
                                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                                            <tr>
                                                <td><?php echo get_the_date(); ?></td>
                                                <td><?php the_id(); ?></td>
                                                <td><?php the_title(); ?></td>
                                                <td class="text-right"><?php the_field('nota'); ?></td>
                                                <td class="text-right"><a style="color: black; margin-right: 20px;" href="<?php the_field('cargar_documento'); ?>">Ver </a><a download="<?php the_title(); ?>" href="<?php the_field('cargar_documento'); ?>"> Descargar</a>  </td>
                                               
                                            </tr>
                                        <?php endwhile; ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                         <div class="overview-wrap">
                                    <h2 class="title-1">Noticias</h2>
                                
                                </div>
                     
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
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php else:

header('Location: http://174.138.38.5/sistemademarketing/');


 endif; ?>


<?php get_footer(); ?>