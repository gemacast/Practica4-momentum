<?php get_header( );
/*¿Para qué creo este archivo?
Cuando hacemos clic en un proyecto desde el listado, WordPress va a:
Buscar single-proyectos.php
Si no existe, usará single.php
Si tampoco está, usará singular.php o <index class="php"></index>*/
?>

<main class="container py-5">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <article class="proyecto bg-white p-4 shadow rounded">
                <!-- Titulo del articulo !-->
                <h1 class="mb-4 text-center text-primary"><?php the_title( );?></h1>
                <!-- Imagen destacada !-->
                <?php if(has_post_thumbnail( )):?>
                    <div class="mb-4 text-center">
                        <?php the_post_thumbnail('medium_large', ['class' => 'img-fluid rounded']); ?>
                    </div>
                <?php endif; ?>
                <!-- Contenido !-->    
                <div class="contenido-proyecto mb-4 ">
                     <?php the_content( );?>
                </div>
                <!-- Enlace a Proyectos !--> 
                 <div class="text-center">
                    <a href="<?php echo site_url( '/proyectos');?>" class="btn btn-outline-primary">  ← Volver a Proyectos</a>
                 </div>   
            </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer( );?>
