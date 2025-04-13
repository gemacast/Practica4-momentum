<?php get_header(); ?>

<main class="container py-5">

  <h1 class="mb-5 text-center text-primary">
    Categoría: <?php single_cat_title(); ?>
  </h1>

  <?php if ( have_posts() ) : ?>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col">
          <article class="card h-100 shadow-sm border-0">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
            <?php endif; ?>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary mt-auto">Leer más</a>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p class="text-center">No hay entradas en esta categoría.</p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>

