<?php
/**
 * Flow page (slug: flow)
 */
get_header();
?>

<main class="gd-page active" id="page-flow">
  <?php
  get_template_part( 'template-parts/page-hero', null, array(
    'en'    => 'FLOW',
    'jp'    => 'サービスの流れ',
    'crumb' => 'FLOW',
  ) );
  ?>
  <section class="gd-section" style="background:var(--white);">
    <div class="gd-section-inner">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">PROCESS</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">お問い合わせから<span class="accent">撤去まで</span></h2>
        <p class="gd-sec-desc reveal reveal-delay-2">
          ご相談から成約後の撤去・原状回復まで、GRACE DECOがワンストップで対応。<br>
          お客様の負担を最小限に、最大の効果をお届けします。
        </p>
      </div>

      <div style="max-width:900px;margin:60px auto 0;">
        <div class="gd-svc-item reveal" style="margin-bottom:60px;">
          <div>
            <div class="gd-svc-item-num">01</div>
            <div class="gd-svc-item-en">CONTACT</div>
            <h2 class="gd-svc-item-title">お問い合わせ</h2>
            <p class="gd-svc-item-desc">お電話・メール・お問い合わせフォームより、お気軽にご相談ください。ご相談・お見積りは無料です。物件情報や現状の課題をお聞かせください。</p>
          </div>
          <div class="gd-svc-item-img"></div>
        </div>
        <div class="gd-svc-item reverse reveal" style="margin-bottom:60px;">
          <div>
            <div class="gd-svc-item-num">02</div>
            <div class="gd-svc-item-en">HEARING</div>
            <h2 class="gd-svc-item-title">現地調査・ヒアリング</h2>
            <p class="gd-svc-item-desc">物件を訪問し、特徴や周辺環境、ターゲット層を詳しくヒアリング。売却/賃貸のゴール設定を明確にし、最適な戦略をご提案いたします。</p>
          </div>
          <div class="gd-svc-item-img"></div>
        </div>
        <div class="gd-svc-item reveal" style="margin-bottom:60px;">
          <div>
            <div class="gd-svc-item-num">03</div>
            <div class="gd-svc-item-en">PLANNING</div>
            <h2 class="gd-svc-item-title">プランニング・ご提案</h2>
            <p class="gd-svc-item-desc">物件の魅力を最大限に引き出すステージングプランを作成。イメージパースやサンプル画像を交えて、詳細なお見積りとともにご提案いたします。</p>
          </div>
          <div class="gd-svc-item-img"></div>
        </div>
        <div class="gd-svc-item reverse reveal" style="margin-bottom:60px;">
          <div>
            <div class="gd-svc-item-num">04</div>
            <div class="gd-svc-item-en">STAGING</div>
            <h2 class="gd-svc-item-title">ステージング実施</h2>
            <p class="gd-svc-item-desc">プロのスタッフが家具・小物・グリーンを搬入し設置。モデルルームのような魅力的な空間を短期間で演出します。</p>
          </div>
          <div class="gd-svc-item-img"></div>
        </div>
        <div class="gd-svc-item reveal" style="margin-bottom:60px;">
          <div>
            <div class="gd-svc-item-num">05</div>
            <div class="gd-svc-item-en">PHOTO & SUPPORT</div>
            <h2 class="gd-svc-item-title">撮影・内覧サポート</h2>
            <p class="gd-svc-item-desc">プロカメラマンによる高品質な撮影で、WEB掲載時の反響率をアップ。内覧時のアドバイスもご提供いたします。</p>
          </div>
          <div class="gd-svc-item-img"></div>
        </div>
        <div class="gd-svc-item reverse reveal">
          <div>
            <div class="gd-svc-item-num">06</div>
            <div class="gd-svc-item-en">REMOVAL</div>
            <h2 class="gd-svc-item-title">撤去・原状回復</h2>
            <p class="gd-svc-item-desc">成約後は速やかに家具・小物を撤去し、原状回復まで責任をもって対応いたします。次のオーナー様にスムーズにお引き渡しできる状態に。</p>
          </div>
          <div class="gd-svc-item-img"></div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
