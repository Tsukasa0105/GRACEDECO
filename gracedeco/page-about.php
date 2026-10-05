<?php
/**
 * About page (slug: about)
 */
get_header();
?>

<main class="gd-page active" id="page-about">
  <?php
  get_template_part( 'template-parts/page-hero', null, array(
    'en'    => 'ABOUT US',
    'jp'    => '私たちについて',
    'media' => 'videos/consulting.mp4',
    'crumb' => 'ABOUT',
  ) );
  ?>
  <section class="gd-about-page-intro">
    <div class="gd-about-page-grid">
      <div class="gd-about-img reveal<?php echo gracedeco_has_media( 'images/about-fullbody.jpg' ); ?>" style="aspect-ratio:3/4;"><?php gracedeco_media( 'images/about-fullbody.jpg', '代表 平野眞理子' ); ?></div>
      <div>
        <div class="gd-sec-en reveal" style="justify-content:flex-start;text-align:left;">GREETINGS</div>
        <h2 class="reveal reveal-delay-1" style="font-family:var(--jp);font-size:clamp(24px,3.2vw,34px);font-weight:400;letter-spacing:.1em;line-height:1.7;margin:24px 0 32px;">
          暮らしに、<br>やさしい<span style="color:var(--gold);">彩り</span>を。
        </h2>
        <p class="reveal reveal-delay-2" style="font-size:clamp(13px,1.4vw,15px);line-height:2.3;color:var(--gray-2);margin-bottom:20px;letter-spacing:.05em;">
          GRACE DECOは、横浜を拠点にホームステージング・インテリアコーディネート・空間デザインを提供するプロフェッショナル集団です。不動産会社様の売却活動を全面サポートし、物件の魅力を最大化することを使命としています。
        </p>
        <p class="reveal reveal-delay-3" style="font-size:clamp(13px,1.4vw,15px);line-height:2.3;color:var(--gray-2);margin-bottom:20px;letter-spacing:.05em;">
          代表・平野眞理子は、丁寧なヒアリングと幅広い空間認知力を強みに、お客様のご要望をカタチにしてまいりました。「聞く力」を大切に、0から1を生み出すクリエイティブなご提案をお約束します。
        </p>
        <div class="gd-about-sig reveal reveal-delay-4">
          <div>
            <div class="gd-about-sig-name">Mariko Hirano</div>
            <div class="gd-about-sig-role">REPRESENTATIVE — 代表 平野眞理子</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="gd-about-mission">
    <div class="gd-mission-block">
      <div class="gd-mission-title reveal">MISSION</div>
      <div class="gd-sec-en reveal reveal-delay-1" style="margin-bottom:40px;">悠 · 結 · 優</div>
      <p class="gd-mission-body reveal reveal-delay-2">
        住まいは、ただ暮らす場所ではありません。<br>
        心を休め、家族を<span class="accent">結び</span>、<br>
        毎日の暮らしを豊かにする大切な場所です。<br><br>
        GRACE DECOは、3つの<span class="accent">「ゆう」</span>に寄り添い、<br>
        心地よく、魅力が伝わる空間づくりを<br>
        ご提案いたします。
      </p>
    </div>
  </section>
  <section class="gd-section" style="background:var(--white);">
    <div class="gd-section-inner">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">STRENGTHS</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">私たちの<span class="accent">強み</span></h2>
      </div>
      <div class="gd-yuu-wrap" style="grid-template-columns:repeat(auto-fit,minmax(280px,1fr));">
        <div class="gd-yuu reveal" style="background:var(--paper);border-color:var(--line);color:var(--ink);">
          <div class="gd-yuu-num" style="color:var(--gold);">— STRENGTH 01 —</div>
          <div style="font-family:var(--jp);font-size:clamp(22px,2.8vw,32px);font-weight:400;color:var(--ink);margin-bottom:20px;letter-spacing:.12em;">丁寧なヒアリング</div>
          <div class="gd-yuu-line"></div>
          <div class="gd-yuu-txt" style="color:var(--gray-2);">お客様のご要望を伺い、丁寧に分かりやすくアドバイスいたします。「聞く力」を大切にした対話重視の姿勢が特長です。</div>
        </div>
        <div class="gd-yuu reveal reveal-delay-1" style="background:var(--paper);border-color:var(--line);color:var(--ink);">
          <div class="gd-yuu-num" style="color:var(--gold);">— STRENGTH 02 —</div>
          <div style="font-family:var(--jp);font-size:clamp(22px,2.8vw,32px);font-weight:400;color:var(--ink);margin-bottom:20px;letter-spacing:.12em;">幅広い空間認知</div>
          <div class="gd-yuu-line"></div>
          <div class="gd-yuu-txt" style="color:var(--gray-2);">幅広いインテリア分野から思考能力を発揮し、0を1に、そして100に。空間の潜在価値を最大限引き出します。</div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
