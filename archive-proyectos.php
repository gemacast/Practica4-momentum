<?php
//Template: archive-proyectos.php - Listado de CPT Proyectos
get_header( );?>

<main class="container">
    <h1 class="my-5 text-center">Nuestros proyectos</h1>
    <div class="row">
            <!-- Uso el loop de wordpress -->
        <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
        <div class="col mb-5">
                    <div class="card text-center mb-3 h-100">
                    <!--card-img-top img-fluid -->
                    <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) {the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) );}
                            ?></a>
                        
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title();?></h5></a>
                            <p class="card-text"><?php the_excerpt(); ?></p>
                        </div>
                        
                    </div>
                </div>
            <?php endwhile; else:
                ( 'Lo sentimos, no hemos encontrado ningún Proyecto.');
            endif;?>
        </div>
    </div>

</main>


<?php get_footer( );?>