<?php
/**
 * Sub page hero.
 * args: en, jp, crumb
 */
$args = wp_parse_args( $args, array( 'en' => '', 'jp' => '', 'crumb' => '' ) );
?>
<div class="gd-page-hero">
  <div class="gd-page-hero-overlay"></div>
  <div class="gd-page-hero-content">
    <div class="gd-page-hero-en"><?php echo esc_html( $args['en'] ); ?></div>
    <h1 class="gd-page-hero-jp"><?php echo esc_html( $args['jp'] ); ?></h1>
    <div class="gd-breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a> <span>/</span> <?php echo esc_html( $args['crumb'] ); ?></div>
  </div>
</div>
