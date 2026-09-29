<?php
/**
 * Case page (slug: case)
 */
get_header();
?>

<main class="gd-page active" id="page-case">
  <?php
  get_template_part( 'template-parts/page-hero', null, array(
    'en'    => 'CASE STUDY',
    'jp'    => '導入事例',
    'crumb' => 'CASE STUDY',
  ) );
  ?>
  <section class="gd-case-page">
    <div style="max-width:1200px;margin:0 auto;">
      <div class="gd-sec-head">
        <div class="gd-sec-en reveal">OUR WORKS</div>
        <h2 class="gd-sec-jp reveal reveal-delay-1">数字が語る<span class="accent">確かな成果</span></h2>
        <p class="gd-sec-desc reveal reveal-delay-2">
          GRACE DECOが手掛けた実績の一部をご紹介いたします。ステージング前後の劇的な変化と、成約までの期間短縮・価格向上の実績をご確認ください。
        </p>
      </div>

      <div class="gd-case-filter reveal">
        <button class="gd-filter-btn active" data-filter="all">ALL</button>
        <button class="gd-filter-btn" data-filter="mansion">中古マンション</button>
        <button class="gd-filter-btn" data-filter="house">戸建住宅</button>
        <button class="gd-filter-btn" data-filter="invest">投資物件</button>
        <button class="gd-filter-btn" data-filter="model">モデルルーム</button>
      </div>

      <div class="gd-case-detail reveal" data-category="mansion">
        <div class="gd-case-hero">
          <div class="gd-case-hero-half" data-label="BEFORE"></div>
          <div class="gd-case-hero-half" data-label="AFTER"></div>
        </div>
        <div class="gd-case-info">
          <div class="gd-case-info-head">
            <div>
              <div class="gd-case-cat" style="margin-bottom:8px;">CASE 01 — 中古マンション</div>
              <h3 class="gd-case-info-title">築15年 3LDK・80㎡ / 横浜市</h3>
            </div>
            <div class="gd-case-info-tag">RESALE</div>
          </div>
          <div class="gd-case-metrics">
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">成約までの期間</div>
              <div class="gd-case-metric-val">約45日<span class="arr">→</span><span class="final">約18日</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">販売価格</div>
              <div class="gd-case-metric-val">2,980万<span class="arr">→</span><span class="final">3,180万</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">価格アップ</div>
              <div class="gd-case-metric-val"><span class="final">+200万円</span></div>
            </div>
          </div>
          <p class="gd-case-comment">
            <strong>【担当コメント】</strong><br>
            築15年の中古マンションで内覧希望が伸び悩んでいた物件。リビングを中心にナチュラルモダンなコーディネートを施し、生活イメージを具体化。ステージング実施後、内覧数が3倍に増え、想定以上の価格で成約に至りました。
          </p>
        </div>
      </div>

      <div class="gd-case-detail reveal" data-category="house">
        <div class="gd-case-hero">
          <div class="gd-case-hero-half" data-label="BEFORE"></div>
          <div class="gd-case-hero-half" data-label="AFTER"></div>
        </div>
        <div class="gd-case-info">
          <div class="gd-case-info-head">
            <div>
              <div class="gd-case-cat" style="margin-bottom:8px;">CASE 02 — 戸建住宅</div>
              <h3 class="gd-case-info-title">築8年 4LDK・120㎡ / 川崎市</h3>
            </div>
            <div class="gd-case-info-tag">HOUSE</div>
          </div>
          <div class="gd-case-metrics">
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">成約までの期間</div>
              <div class="gd-case-metric-val">約60日<span class="arr">→</span><span class="final">約25日</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">販売価格</div>
              <div class="gd-case-metric-val">4,280万<span class="arr">→</span><span class="final">4,680万</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">価格アップ</div>
              <div class="gd-case-metric-val"><span class="final">+400万円</span></div>
            </div>
          </div>
          <p class="gd-case-comment">
            <strong>【担当コメント】</strong><br>
            空室状態で3ヶ月間動きがなかった戸建物件。ファミリー層向けに、リビング・ダイニング・子供部屋を重点的にステージング。「ここで暮らしたい」というイメージを具現化し、想定価格を大きく上回る成約となりました。
          </p>
        </div>
      </div>

      <div class="gd-case-detail reveal" data-category="invest">
        <div class="gd-case-hero">
          <div class="gd-case-hero-half" data-label="BEFORE"></div>
          <div class="gd-case-hero-half" data-label="AFTER"></div>
        </div>
        <div class="gd-case-info">
          <div class="gd-case-info-head">
            <div>
              <div class="gd-case-cat" style="margin-bottom:8px;">CASE 03 — 投資用アパート</div>
              <h3 class="gd-case-info-title">1K×8戸 / 東京都内</h3>
            </div>
            <div class="gd-case-info-tag">INVEST</div>
          </div>
          <div class="gd-case-metrics">
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">入居率</div>
              <div class="gd-case-metric-val">50%<span class="arr">→</span><span class="final">100%</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">平均賃料</div>
              <div class="gd-case-metric-val"><span class="final">+3,000円/月</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">満室達成期間</div>
              <div class="gd-case-metric-val"><span class="final">2ヶ月</span></div>
            </div>
          </div>
          <p class="gd-case-comment">
            <strong>【担当コメント】</strong><br>
            入居率が半数程度で伸び悩んでいた1Kアパート。1戸をモデルルーム化し、WEB掲載写真もリニューアル。単身若年層に響くコーディネートで問い合わせが急増し、2ヶ月で満室を達成しました。
          </p>
        </div>
      </div>

      <div class="gd-case-detail reveal" data-category="model">
        <div class="gd-case-hero">
          <div class="gd-case-hero-half" data-label="BEFORE"></div>
          <div class="gd-case-hero-half" data-label="AFTER"></div>
        </div>
        <div class="gd-case-info">
          <div class="gd-case-info-head">
            <div>
              <div class="gd-case-cat" style="margin-bottom:8px;">CASE 04 — モデルルーム</div>
              <h3 class="gd-case-info-title">新築マンション モデルルーム / 横浜市</h3>
            </div>
            <div class="gd-case-info-tag">MODEL ROOM</div>
          </div>
          <div class="gd-case-metrics">
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">来場者数</div>
              <div class="gd-case-metric-val">前月比<span class="final">+180%</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">成約率</div>
              <div class="gd-case-metric-val">12%<span class="arr">→</span><span class="final">28%</span></div>
            </div>
            <div class="gd-case-metric">
              <div class="gd-case-metric-label">販売完了</div>
              <div class="gd-case-metric-val"><span class="final">3ヶ月早期</span></div>
            </div>
          </div>
          <p class="gd-case-comment">
            <strong>【担当コメント】</strong><br>
            新築マンションのモデルルームコーディネートを担当。ターゲット層である30代DINKSに響く上質でナチュラルな空間を演出。来場者からの反響が大幅にアップし、販売完了時期を大きく前倒しできました。
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php
  get_template_part( 'template-parts/cta-band', null, array(
    'title'  => '貴社の物件も<span style="color:var(--gold)">成功事例</span>に',
    'text'   => '物件の状況に合わせた最適なプランをご提案いたします。',
    'button' => '無料相談を申し込む',
  ) );
  ?>
</main>

<?php get_footer(); ?>
