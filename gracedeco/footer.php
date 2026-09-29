<?php
/**
 * Footer
 */
$gd = gracedeco_contact();
?>

  <!-- FOOTER -->
  <footer class="gd-footer">
    <div class="gd-footer-grid">
      <div class="gd-footer-brand">
        <div class="gd-footer-logo">GRACE DECO</div>
        <div class="gd-footer-tag">Creating value, Connecting to the future</div>
        <p class="gd-footer-desc">
          GRACE DECOは、インテリアの力で空間の価値を高め、不動産会社様の早期売却・高値売却をサポートします。
        </p>
      </div>
      <div class="gd-footer-col">
        <h4>MENU</h4>
        <a data-nav="home" href="<?php echo esc_url( gracedeco_url( 'home' ) ); ?>">HOME</a>
        <a data-nav="about" href="<?php echo esc_url( gracedeco_url( 'about' ) ); ?>">ABOUT</a>
        <a data-nav="service" href="<?php echo esc_url( gracedeco_url( 'service' ) ); ?>">SERVICE</a>
        <a data-nav="flow" href="<?php echo esc_url( gracedeco_url( 'flow' ) ); ?>">FLOW</a>
      </div>
      <div class="gd-footer-col">
        <h4>SERVICE</h4>
        <a data-nav="case" href="<?php echo esc_url( gracedeco_url( 'case' ) ); ?>">CASE STUDY</a>
        <a data-nav="company" href="<?php echo esc_url( gracedeco_url( 'company' ) ); ?>">COMPANY</a>
        <a data-nav="contact" href="<?php echo esc_url( gracedeco_url( 'contact' ) ); ?>">CONTACT</a>
      </div>
      <div class="gd-footer-col">
        <h4>CONTACT</h4>
        <a href="tel:<?php echo esc_attr( preg_replace( '/[^0-9+]/', '', $gd['tel'] ) ); ?>">TEL: <?php echo esc_html( $gd['tel'] ); ?></a>
        <a href="mailto:<?php echo esc_attr( $gd['mail'] ); ?>"><?php echo esc_html( $gd['mail'] ); ?></a>
        <a href="https://www.instagram.com/<?php echo esc_attr( $gd['instagram'] ); ?>/" target="_blank" rel="noopener">@<?php echo esc_html( $gd['instagram'] ); ?></a>
      </div>
    </div>
    <div class="gd-footer-bot">
      <div>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> GRACE DECO. All Rights Reserved.</div>
      <div>HOME STAGING · INTERIOR · SPACE DESIGN</div>
    </div>
  </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
