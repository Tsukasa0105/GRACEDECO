<?php
/**
 * Service page (slug: service)
 */
get_header();
?>

<main class="gd-page active" id="page-service">
  <?php
  get_template_part( 'template-parts/page-hero', null, array(
    'en'    => 'SERVICE',
    'jp'    => 'サービス内容',
    'crumb' => 'SERVICE',
  ) );
  ?>
  <section class="gd-svc-detail">
    <div class="gd-svc-item">
      <div class="gd-svc-item-img reveal"></div>
      <div>
        <div class="gd-svc-item-num reveal">01</div>
        <div class="gd-svc-item-en reveal reveal-delay-1">HOME STAGING</div>
        <h2 class="gd-svc-item-title reveal reveal-delay-1">ホームステージング</h2>
        <p class="gd-svc-item-desc reveal reveal-delay-2">
          居住中・空室・空き家・モデルルームなど、あらゆる物件に対応。プロのインテリアコーディネートで空間の魅力を最大化し、内覧時の第一印象を劇的に改善します。
        </p>
        <ul class="gd-svc-list reveal reveal-delay-3">
          <li>空室物件フルステージング</li>
          <li>居住中物件アドバイスプラン</li>
          <li>空き家物件コンサルティング</li>
          <li>モデルルームコーディネート</li>
        </ul>
      </div>
    </div>
    <div class="gd-svc-item reverse">
      <div class="gd-svc-item-img reveal"></div>
      <div>
        <div class="gd-svc-item-num reveal">02</div>
        <div class="gd-svc-item-en reveal reveal-delay-1">LAYOUT CONSULTING</div>
        <h2 class="gd-svc-item-title reveal reveal-delay-1">レイアウト相談</h2>
        <p class="gd-svc-item-desc reveal reveal-delay-2">
          図面をもとに家具等のレイアウトを設計。家具選びの同行サービスもご提供し、暮らしはじめから理想の空間を実現します。
        </p>
        <ul class="gd-svc-list reveal reveal-delay-3">
          <li>間取り図面からのレイアウト設計</li>
          <li>家具・照明選定サポート</li>
          <li>家具店同行ショッピング</li>
          <li>初回ご相談無料</li>
        </ul>
      </div>
    </div>
    <div class="gd-svc-item">
      <div class="gd-svc-item-img reveal"></div>
      <div>
        <div class="gd-svc-item-num reveal">03</div>
        <div class="gd-svc-item-en reveal reveal-delay-1">CURTAIN & BLIND</div>
        <h2 class="gd-svc-item-title reveal reveal-delay-1">カーテン・ブラインド</h2>
        <p class="gd-svc-item-desc reveal reveal-delay-2">
          オーダーによる窓装飾を、生地選びから取り付けまでワンストップでご提供。空間の印象を大きく左右する窓辺を、こだわりのファブリックで演出します。
        </p>
        <ul class="gd-svc-list reveal reveal-delay-3">
          <li>オーダーカーテン制作</li>
          <li>ブラインド・シェード提案</li>
          <li>生地サンプルご提示</li>
          <li>採寸・取付施工</li>
        </ul>
      </div>
    </div>
    <div class="gd-svc-item reverse">
      <div class="gd-svc-item-img reveal"></div>
      <div>
        <div class="gd-svc-item-num reveal">04</div>
        <div class="gd-svc-item-en reveal reveal-delay-1">PHOTO & PROMOTION</div>
        <h2 class="gd-svc-item-title reveal reveal-delay-1">物件写真撮影・掲載画像作成</h2>
        <p class="gd-svc-item-desc reveal reveal-delay-2">
          プロカメラマンによる物件撮影、ポータルサイト掲載用画像の作成まで対応。WEB掲載時の反響率を高め、集客力アップに貢献します。
        </p>
        <ul class="gd-svc-list reveal reveal-delay-3">
          <li>物件写真撮影・レタッチ</li>
          <li>ポータルサイト用画像作成</li>
          <li>SNS投稿用ビジュアル制作</li>
          <li>掲載レイアウトアドバイス</li>
        </ul>
      </div>
    </div>
  </section>

  <?php
  get_template_part( 'template-parts/cta-band', null, array(
    'title'  => 'サービスに関する<span style="color:var(--gold)">ご相談</span>',
    'text'   => '物件情報をお伺いし、最適なプランをご提案いたします。',
    'button' => 'お問い合わせ',
  ) );
  ?>
</main>

<?php get_footer(); ?>
