<?php
/**
 * CTA band.
 * args: title (HTML allowed), text (HTML allowed), button
 */
$args = wp_parse_args( $args, array( 'title' => '', 'text' => '', 'button' => 'CONTACT US' ) );
$allowed = array(
	'span' => array( 'style' => true ),
	'br'   => array(),
);
?>
<section class="gd-cta-band">
  <h2><?php echo wp_kses( $args['title'], $allowed ); ?></h2>
  <p><?php echo wp_kses( $args['text'], $allowed ); ?></p>
  <a class="gd-cta-btn" href="<?php echo esc_url( gracedeco_url( 'contact' ) ); ?>"><?php echo esc_html( $args['button'] ); ?></a>
</section>
