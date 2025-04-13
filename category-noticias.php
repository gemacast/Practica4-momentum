<?php get_header(); ?>

<main class="container py-5">

  <h1 class="mb-2 text-center text-danger">🗞️ Noticias</h1>
  <p class="text-center mb-5 text-muted">
    Aquí encontrarás las últimas novedades y artículos relevantes.
  </p>

  <?php if ( have_posts() ) : ?>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="col">
          <article class="card h-100 border-0 shadow-sm">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
            <?php endif; ?>
            <div class="card-body d-flex flex-column">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-outline-danger mt-auto">Leer más</a>
            </div>
          </article>
        </div>
      <?php endwhile; ?>
    </div>
  <?php else : ?>
    <p class="text-center">Aún no se han publicado noticias.</p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
