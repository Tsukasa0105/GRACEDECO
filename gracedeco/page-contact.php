<?php
/**
 * Contact page (slug: contact)
 */
get_header();
?>

<main class="gd-page active" id="page-contact">
  <?php
  get_template_part( 'template-parts/page-hero', null, array(
    'en'    => 'CONTACT',
    'jp'    => 'お問い合わせ',
    'crumb' => 'CONTACT',
  ) );
  ?>
  <section class="gd-contact-page">
    <div class="gd-contact-grid">
      <div class="gd-contact-info reveal">
        <h3>GET IN TOUCH</h3>
        <h2>お気軽に<br>ご相談ください</h2>
        <p>
          ホームステージングに関するご相談・お見積りは無料です。<br>
          物件情報をお伺いし、最適なプランをご提案いたします。まずはお気軽にお問い合わせください。
        </p>
        <div class="gd-contact-detail">
          <div class="gd-contact-detail-item">
            <div class="gd-contact-detail-label">TELEPHONE</div>
            <div class="gd-contact-detail-val">090-8398-3001</div>
          </div>
          <div class="gd-contact-detail-item">
            <div class="gd-contact-detail-label">EMAIL</div>
            <div class="gd-contact-detail-val">mhirano993@outlook.com</div>
          </div>
          <div class="gd-contact-detail-item">
            <div class="gd-contact-detail-label">WEB</div>
            <div class="gd-contact-detail-val">www.gracedeco-homestaging.com</div>
          </div>
          <div class="gd-contact-detail-item">
            <div class="gd-contact-detail-label">HOURS</div>
            <div class="gd-contact-detail-val" style="font-size:14px;">平日 9:00 - 18:00</div>
          </div>
        </div>
      </div>
      <div class="gd-contact-form gd-cf7 reveal reveal-delay-1">
        <?php
        $gd_cf7_id = gracedeco_cf7_id();
        if ( $gd_cf7_id ) {
          echo do_shortcode( '[contact-form-7 id="' . (int) $gd_cf7_id . '"]' ); // phpcs:ignore WordPress.Security.EscapeOutput
        } else {
          ?>
          <p class="gd-form-unavailable">
            現在フォームをご利用いただけません。お手数ですが、お電話（<?php echo esc_html( gracedeco_contact()['tel'] ); ?>）またはメール（<?php echo esc_html( gracedeco_contact()['mail'] ); ?>）にてご連絡ください。
          </p>
          <?php if ( current_user_can( 'manage_options' ) ) : ?>
            <p class="gd-form-unavailable gd-form-admin-note">【管理者向け】プラグイン「Contact Form 7」を有効化してから、管理画面を開き直すと、フォームが自動作成されます。</p>
          <?php endif; ?>
        <?php } ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
