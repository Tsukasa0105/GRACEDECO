<?php
/**
 * Company page (slug: company)
 */
get_header();
?>

<main class="gd-page active" id="page-company">
  <?php
  get_template_part( 'template-parts/page-hero', null, array(
    'en'    => 'COMPANY',
    'jp'    => '会社概要',
    'crumb' => 'COMPANY',
  ) );
  ?>
  <section class="gd-company">
    <div class="gd-section-inner">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">CORPORATE PROFILE</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">会社<span class="accent">概要</span></h2>
      </div>
      <dl class="gd-company-table reveal">
        <div class="gd-company-row"><dt>COMPANY</dt><dd>GRACE DECO（グレースデコ）</dd></div>
        <div class="gd-company-row"><dt>REPRESENTATIVE</dt><dd>平野 眞理子（Mariko Hirano）</dd></div>
        <div class="gd-company-row"><dt>BUSINESS</dt><dd>ホームステージング／インテリアコーディネート／空間デザイン／家具・小物レンタル／物件写真撮影</dd></div>
        <div class="gd-company-row"><dt>LOCATION</dt><dd>神奈川県横浜市</dd></div>
        <div class="gd-company-row"><dt>TEL</dt><dd>090-8398-3001</dd></div>
        <div class="gd-company-row"><dt>MAIL</dt><dd>mhirano993@outlook.com</dd></div>
        <div class="gd-company-row"><dt>WEB</dt><dd>www.gracedeco-homestaging.com</dd></div>
        <div class="gd-company-row"><dt>INSTAGRAM</dt><dd>@gracedeco_homestaging</dd></div>
        <div class="gd-company-row"><dt>PHILOSOPHY</dt><dd>悠・結・優 — 3つの「ゆう」に寄り添う空間づくり</dd></div>
      </dl>
    </div>
  </section>
</main>

<?php get_footer(); ?>
