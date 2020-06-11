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
                            <div class="overview-wrap">
                                <h2 class="title-1"><strong>Biblioteca</strong></h2>
                            
                            </div>
                        </div>
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
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
                                        <?php $args = array( 'post_type' => 'Documentos');?>   
                                         <?php $loop = new WP_Query( $args ); ?>
                                         <?php while ($loop->have_posts()) : $loop->the_post();  global $product; ?>
                                            <tr>
                                                <td><?php echo get_the_date(); ?></td>
                                                <td><?php the_id(); ?></td>
                                                <td><?php the_title(); ?></td>
                                                <td class="text-right"><?php the_field('nota_adicional'); ?></td>
                                                <td class="text-right"><a style="color: black; margin-right: 20px;" href="<?php the_field('cargar_documento'); ?>">Ver </a><a download="<?php the_title(); ?>" href="<?php the_field('cargar_documento'); ?>"> Descargar</a>  </td>
                                               
                                            </tr>
                                        <?php endwhile; ?>
                                           
                                        </tbody>
                                    </table>
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

header('Location: http://174.138.38.5/sistemademarketing/');


 endif; ?>

<?php get_footer(); ?>