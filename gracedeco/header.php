<?php
/**
 * Header
 */
$gd = gracedeco_contact();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="gd-app">
  <div class="gd-cursor"></div>
  <div class="gd-dot"></div>
  <div class="gd-page-transition"></div>

  <!-- HEADER -->
  <header class="gd-header" id="gdHeader">
    <a class="gd-logo" href="<?php echo esc_url( gracedeco_url( 'home' ) ); ?>" aria-label="GRACE DECO">
      <div class="gd-logo-mark">GD</div>
      <div>
        <div class="gd-logo-text">GRACE DECO</div>
        <span class="gd-logo-sub">HOME STAGING &amp; INTERIOR</span>
      </div>
    </a>
    <nav class="gd-nav" aria-label="Global">
      <a data-nav="home" href="<?php echo esc_url( gracedeco_url( 'home' ) ); ?>"<?php echo gracedeco_nav_class( 'home' ); ?>>HOME</a>
      <a data-nav="about" href="<?php echo esc_url( gracedeco_url( 'about' ) ); ?>"<?php echo gracedeco_nav_class( 'about' ); ?>>ABOUT</a>
      <a data-nav="service" href="<?php echo esc_url( gracedeco_url( 'service' ) ); ?>"<?php echo gracedeco_nav_class( 'service' ); ?>>SERVICE</a>
      <a data-nav="flow" href="<?php echo esc_url( gracedeco_url( 'flow' ) ); ?>"<?php echo gracedeco_nav_class( 'flow' ); ?>>FLOW</a>
      <a data-nav="case" href="<?php echo esc_url( gracedeco_url( 'case' ) ); ?>"<?php echo gracedeco_nav_class( 'case' ); ?>>CASE</a>
      <a data-nav="company" href="<?php echo esc_url( gracedeco_url( 'company' ) ); ?>"<?php echo gracedeco_nav_class( 'company' ); ?>>COMPANY</a>
      <a class="gd-cta" data-nav="contact" href="<?php echo esc_url( gracedeco_url( 'contact' ) ); ?>">CONTACT</a>
    </nav>
    <button class="gd-burger" id="gdBurger" type="button" aria-label="menu" aria-controls="gdMobileMenu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </header>

  <!-- MOBILE MENU -->
  <div class="gd-mobile-menu" id="gdMobileMenu">
    <div class="gd-mobile-menu-inner">
      <a data-nav="home" href="<?php echo esc_url( gracedeco_url( 'home' ) ); ?>"><span class="num">01</span> Home</a>
      <a data-nav="about" href="<?php echo esc_url( gracedeco_url( 'about' ) ); ?>"><span class="num">02</span> About</a>
      <a data-nav="service" href="<?php echo esc_url( gracedeco_url( 'service' ) ); ?>"><span class="num">03</span> Service</a>
      <a data-nav="flow" href="<?php echo esc_url( gracedeco_url( 'flow' ) ); ?>"><span class="num">04</span> Flow</a>
      <a data-nav="case" href="<?php echo esc_url( gracedeco_url( 'case' ) ); ?>"><span class="num">05</span> Case</a>
      <a data-nav="company" href="<?php echo esc_url( gracedeco_url( 'company' ) ); ?>"><span class="num">06</span> Company</a>
      <a data-nav="contact" href="<?php echo esc_url( gracedeco_url( 'contact' ) ); ?>"><span class="num">07</span> Contact</a>
    </div>
    <div class="gd-mobile-info">
      <div class="gd-mobile-info-label">CONTACT</div>
      <div class="gd-mobile-info-tel"><?php echo esc_html( $gd['tel'] ); ?></div>
      <div class="gd-mobile-info-mail"><?php echo esc_html( $gd['mail'] ); ?></div>
    </div>
  </div>
