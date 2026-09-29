<?php
/**
 * Fallback template.
 */
get_header();
?>

<main class="gd-page active">
  <div class="gd-page-content">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <h1>404 Not Found</h1>
      <p>お探しのページは見つかりませんでした。</p>
      <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOMEへ戻る</a></p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
