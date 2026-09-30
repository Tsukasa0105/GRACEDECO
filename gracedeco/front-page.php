<?php
/**
 * Home page (front page)
 */
get_header();
?>

<main class="gd-page active" id="page-home">
  <section class="gd-hero<?php echo gracedeco_has_media( 'videos/consulting.mp4' ); ?>">
    <div class="gd-hero-bg"><?php gracedeco_media( 'videos/consulting.mp4', '' ); ?></div>
    <div class="gd-hero-overlay"></div>
    <div class="gd-hero-corner tl">EST. 2020<span>HOME STAGING PROFESSIONAL</span></div>
    <div class="gd-hero-corner br">YOKOHAMA / JAPAN<span>GRACE DECO — 悠・結・優</span></div>
    <div class="gd-hero-content">
      <div class="gd-hero-label">Creating value, Connecting to the future</div>
      <h1 class="gd-hero-title" id="heroTitle" data-text="空き家問題専門トータルコンサルティング">空き家問題専門トータルコンサルティング</h1>
      <div class="gd-hero-sub">Home Staging Professional</div>
      <p class="gd-hero-desc">
        快適な住まいと暮らしを実現するためのさまざまな問題を専門知識と技術で解決し質を高めること
      </p>
    </div>
    <div class="gd-scroll-ind">
      <span>SCROLL</span>
      <div class="gd-scroll-line"></div>
    </div>
  </section>

  <!-- ABOUT INTRO -->
  <section class="gd-section gd-about-top">
    <div class="gd-section-inner">
      <div class="gd-about-grid">
        <div class="gd-about-img reveal<?php echo gracedeco_has_media( 'images/about-portrait.jpg' ); ?>"><?php gracedeco_media( 'images/about-portrait.jpg', '代表 平野眞理子' ); ?></div>
        <div class="gd-about-txt">
          <h3 class="reveal">About GRACE DECO</h3>
          <div class="gd-about-kicker reveal">Home Staging Professional</div>
          <h2 class="reveal reveal-delay-1">お客様に今何が必要なのか<br>何がやりたいのかを<span class="em">瞬時に見極めます。</span></h2>
          <p class="reveal reveal-delay-2">
            空き家専門のGRACE DECOでは、お客様のご意向を瞬時に反映させます。
          </p>
          <p class="reveal reveal-delay-3">
            寄り添いながら、心地よく、魅力が伝わる空間づくりをワンストップでご提案実施致します。
          </p>
          <div class="gd-about-sig reveal reveal-delay-4">
            <div>
              <div class="gd-about-sig-role" style="margin:0 0 8px;">Home Staging Professional</div>
              <div class="gd-about-sig-name">Mariko Hirano</div>
              <div class="gd-about-sig-role">REPRESENTATIVE — 代表 平野眞理子</div>
            </div>
            <div style="font-family:var(--serif);font-size:38px;color:var(--gold);font-style:italic;">GD</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PHILOSOPHY -->
  <section class="gd-section gd-philo">
    <div class="gd-section-inner">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">PHILOSOPHY</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">3つの<span class="accent">「ゆう」</span>に寄り添う</h2>
        <p class="gd-sec-desc reveal reveal-delay-2">
          ゆったりと結ぶ循環する住まいをご提供します。
        </p>
      </div>
      <div class="gd-yuu-wrap">
        <div class="gd-yuu reveal">
          <div class="gd-yuu-num">— 01 —</div>
          <div class="gd-yuu-kanji">悠</div>
          <div class="gd-yuu-yomi">yuu</div>
          <div class="gd-yuu-line"></div>
          <div class="gd-yuu-txt">ゆったりと<br>心ほどける空間</div>
        </div>
        <div class="gd-yuu reveal reveal-delay-1">
          <div class="gd-yuu-num">— 02 —</div>
          <div class="gd-yuu-kanji">結</div>
          <div class="gd-yuu-yomi">yuu</div>
          <div class="gd-yuu-line"></div>
          <div class="gd-yuu-txt">人と人を結ぶ<br>暮らし</div>
        </div>
        <div class="gd-yuu reveal reveal-delay-2">
          <div class="gd-yuu-num">— 03 —</div>
          <div class="gd-yuu-kanji">優</div>
          <div class="gd-yuu-yomi">yuu</div>
          <div class="gd-yuu-line"></div>
          <div class="gd-yuu-txt">やさしさが<br>循環する住まい</div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5 REASONS -->
  <section class="gd-section gd-features">
    <div class="gd-section-inner">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">REASONS</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">ホームステージングが<span class="accent">選ばれる理由</span></h2>
        <p class="gd-sec-desc reveal reveal-delay-2">
          物件の魅力を最大限に引き出し、早期売却・賃貸を実現。<br>プロのコーディネートで、貴社の取引実績向上をサポートします。
        </p>
      </div>
      <div class="gd-feat-list">
        <div class="gd-feat reveal">
          <div class="gd-feat-num">01</div>
          <div class="gd-feat-en">EARLY SALE</div>
          <div>
            <div class="gd-feat-title">早期売却・賃貸の実現</div>
            <div class="gd-feat-desc">空室専門のGRACE DECOでは、<br>お客様の意向にお応えいたします。</div>
          </div>
          <div class="gd-feat-arrow">→</div>
        </div>
        <div class="gd-feat reveal">
          <div class="gd-feat-num">02</div>
          <div class="gd-feat-en">HIGH VALUE</div>
          <div>
            <div class="gd-feat-title">物件価値の向上</div>
            <div class="gd-feat-desc">魅力的な空間演出により、<br>物件の価値を最大限に引き出します。</div>
          </div>
          <div class="gd-feat-arrow">→</div>
        </div>
        <div class="gd-feat reveal">
          <div class="gd-feat-num">03</div>
          <div class="gd-feat-en">DIFFERENTIATION</div>
          <div>
            <div class="gd-feat-title">競合との差別化</div>
            <div class="gd-feat-desc">他社物件との差をつけ、内覧数・成約率をアップ。写真映え・WEB掲載反響を強化します。</div>
          </div>
          <div class="gd-feat-arrow">→</div>
        </div>
        <div class="gd-feat reveal">
          <div class="gd-feat-num">04</div>
          <div class="gd-feat-en">COST PERFORMANCE</div>
          <div>
            <div class="gd-feat-title">高いコストパフォーマンス</div>
            <div class="gd-feat-desc">物件の印象を劇的に向上させます。</div>
          </div>
          <div class="gd-feat-arrow">→</div>
        </div>
        <div class="gd-feat reveal">
          <div class="gd-feat-num">05</div>
          <div class="gd-feat-en">PROFESSIONAL</div>
          <div>
            <div class="gd-feat-title">プロの空間演出</div>
            <div class="gd-feat-desc">物件の特性に合わせて最適な演出をします。</div>
          </div>
          <div class="gd-feat-arrow">→</div>
        </div>
      </div>
    </div>
  </section>

  <!-- PHOTO -->
  <section class="gd-section gd-photo">
    <div class="gd-section-inner">
      <figure class="gd-photo-fig reveal">
        <div class="gd-photo-grid">
          <div class="gd-photo-img gd-photo-wide<?php echo gracedeco_has_media( 'images/photo-europe-1.jpg' ); ?>"><?php gracedeco_media( 'images/photo-europe-1.jpg', 'France Parisにて撮影' ); ?></div>
          <div class="gd-photo-img gd-photo-tall<?php echo gracedeco_has_media( 'images/photo-europe-2.jpg' ); ?>"><?php gracedeco_media( 'images/photo-europe-2.jpg', 'France Parisにて撮影 テーブルコーディネート' ); ?></div>
        </div>
        <figcaption class="gd-photo-cap">France Parisにて撮影　テーブルコーディネート</figcaption>
      </figure>
    </div>
  </section>

  <!-- CASE PREVIEW -->
  <section class="gd-section gd-cases-top">
    <div class="gd-section-inner">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">CASE STUDY</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">豊富な実績と<span class="accent">確かな成果</span></h2>
        <p class="gd-sec-desc reveal reveal-delay-2">
          不動産会社様との数多くの取引実績。迅速・丁寧・柔軟な対応で、貴社の業務をサポートします。
        </p>
      </div>
      <div class="gd-case-grid">
        <a class="gd-case-card reveal" href="<?php echo esc_url( gracedeco_url( 'case' ) ); ?>">
          <div class="gd-case-ba">
            <?php $gd_img = gracedeco_image( 'case-01-before.jpg' ); ?>
            <div class="gd-case-half<?php echo $gd_img ? ' has-img' : ''; ?>" data-label="BEFORE"><?php if ( $gd_img ) : ?><img src="<?php echo esc_url( $gd_img ); ?>" alt="BEFORE"><?php endif; ?></div>
            <?php $gd_img = gracedeco_image( 'case-01-after.jpg' ); ?>
            <div class="gd-case-half<?php echo $gd_img ? ' has-img' : ''; ?>" data-label="AFTER"><?php if ( $gd_img ) : ?><img src="<?php echo esc_url( $gd_img ); ?>" alt="AFTER"><?php endif; ?></div>
          </div>
          <div class="gd-case-body">
            <div class="gd-case-cat">CASE 01 — RESALE</div>
            <div class="gd-case-title">中古マンション（3LDK）</div>
            <div class="gd-case-stats">
              <div class="gd-case-stat">
                <div class="gd-case-stat-label">成約期間</div>
                <div class="gd-case-stat-val">45<span class="up">→18日</span></div>
              </div>
              <div class="gd-case-stat">
                <div class="gd-case-stat-label">販売価格</div>
                <div class="gd-case-stat-val">+200<span class="up">万円</span></div>
              </div>
            </div>
          </div>
        </a>
        <a class="gd-case-card reveal reveal-delay-1" href="<?php echo esc_url( gracedeco_url( 'case' ) ); ?>">
          <div class="gd-case-ba">
            <?php $gd_img = gracedeco_image( 'case-02-before.jpg' ); ?>
            <div class="gd-case-half<?php echo $gd_img ? ' has-img' : ''; ?>" data-label="BEFORE"><?php if ( $gd_img ) : ?><img src="<?php echo esc_url( $gd_img ); ?>" alt="BEFORE"><?php endif; ?></div>
            <?php $gd_img = gracedeco_image( 'case-02-after.jpg' ); ?>
            <div class="gd-case-half<?php echo $gd_img ? ' has-img' : ''; ?>" data-label="AFTER"><?php if ( $gd_img ) : ?><img src="<?php echo esc_url( $gd_img ); ?>" alt="AFTER"><?php endif; ?></div>
          </div>
          <div class="gd-case-body">
            <div class="gd-case-cat">CASE 02 — HOUSE</div>
            <div class="gd-case-title">戸建住宅（4LDK）</div>
            <div class="gd-case-stats">
              <div class="gd-case-stat">
                <div class="gd-case-stat-label">成約期間</div>
                <div class="gd-case-stat-val">60<span class="up">→25日</span></div>
              </div>
              <div class="gd-case-stat">
                <div class="gd-case-stat-label">販売価格</div>
                <div class="gd-case-stat-val">+400<span class="up">万円</span></div>
              </div>
            </div>
          </div>
        </a>
        <a class="gd-case-card reveal reveal-delay-2" href="<?php echo esc_url( gracedeco_url( 'case' ) ); ?>">
          <div class="gd-case-ba">
            <?php $gd_img = gracedeco_image( 'case-03-before.jpg' ); ?>
            <div class="gd-case-half<?php echo $gd_img ? ' has-img' : ''; ?>" data-label="BEFORE"><?php if ( $gd_img ) : ?><img src="<?php echo esc_url( $gd_img ); ?>" alt="BEFORE"><?php endif; ?></div>
            <?php $gd_img = gracedeco_image( 'case-03-after.jpg' ); ?>
            <div class="gd-case-half<?php echo $gd_img ? ' has-img' : ''; ?>" data-label="AFTER"><?php if ( $gd_img ) : ?><img src="<?php echo esc_url( $gd_img ); ?>" alt="AFTER"><?php endif; ?></div>
          </div>
          <div class="gd-case-body">
            <div class="gd-case-cat">CASE 03 — INVEST</div>
            <div class="gd-case-title">投資用アパート（1K×8戸）</div>
            <div class="gd-case-stats">
              <div class="gd-case-stat">
                <div class="gd-case-stat-label">入居率</div>
                <div class="gd-case-stat-val">50<span class="up">→100%</span></div>
              </div>
              <div class="gd-case-stat">
                <div class="gd-case-stat-label">平均賃料</div>
                <div class="gd-case-stat-val">+3,000<span class="up">円/月</span></div>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <?php
  get_template_part( 'template-parts/cta-band', null, array(
    'title'  => 'まずは<span style="color:var(--gold)">無料相談</span>から',
    'text'   => 'ホームステージングに関するご相談・お見積りは<br>お気軽にお問い合わせください。',
    'button' => 'CONTACT US',
  ) );
  ?>
</main>

<?php get_footer(); ?>
