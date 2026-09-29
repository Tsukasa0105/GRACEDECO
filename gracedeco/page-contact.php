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
      <form class="gd-contact-form reveal reveal-delay-1" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
    <input type="hidden" name="action" value="gracedeco_contact">
    <?php wp_nonce_field( 'gracedeco_contact', 'gracedeco_nonce' ); ?>
    <p class="gd-form-hp" aria-hidden="true"><label>Leave empty<input type="text" name="website" tabindex="-1" autocomplete="off"></label></p>
    <?php get_template_part( 'template-parts/contact-notice' ); ?>
        <div class="gd-form-group">
          <label class="gd-form-label" for="gd-f-company">COMPANY NAME 会社名<span class="req">*</span></label>
          <input type="text" id="gd-f-company" name="company" class="gd-form-input" placeholder="株式会社◯◯不動産" required>
        </div>
        <div class="gd-form-group">
          <label class="gd-form-label" for="gd-f-name">YOUR NAME お名前<span class="req">*</span></label>
          <input type="text" id="gd-f-name" name="name" class="gd-form-input" placeholder="山田 太郎" required>
        </div>
        <div class="gd-form-group">
          <label class="gd-form-label" for="gd-f-email">EMAIL メールアドレス<span class="req">*</span></label>
          <input type="email" id="gd-f-email" name="email" class="gd-form-input" placeholder="example@company.co.jp" required>
        </div>
        <div class="gd-form-group">
          <label class="gd-form-label" for="gd-f-tel">TEL 電話番号</label>
          <input type="tel" id="gd-f-tel" name="tel" class="gd-form-input" placeholder="03-1234-5678">
        </div>
        <div class="gd-form-group">
          <label class="gd-form-label" for="gd-f-subject">SUBJECT ご相談内容<span class="req">*</span></label>
          <input type="text" id="gd-f-subject" name="subject" class="gd-form-input" placeholder="例：3LDKマンションのステージング相談" required>
        </div>
        <div class="gd-form-group">
          <label class="gd-form-label" for="gd-f-message">MESSAGE メッセージ<span class="req">*</span></label>
          <textarea id="gd-f-message" name="message" class="gd-form-textarea" placeholder="物件の状況やご要望をご記入ください" required></textarea>
        </div>
        <button type="submit" class="gd-form-btn"><span>SEND MESSAGE</span></button>
      </form>
    </div>
  </section>
</main>

<?php get_footer(); ?>
