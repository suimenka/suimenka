<?php get_header(); ?>


<!-- ファーストビュー -->
<div class="firstview">
  <h2 class="firstview__title">
    suimenka

    <span class="circle-01"></span>
    <span class="circle-02"></span>
    <span class="circle-03"> </span>
  </h2>

  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
  <div class="bubble"></div>
</div>

<!-- ヘッダーメニュー -->
<?php get_template_part('header-menu'); ?>

<!-- メイン -->
<div class="wrap">
  <main class="main" id="main">

    <!-- アバウト -->
    <section class="about" id="about">
      <div class="section-title-center">
        <h2 class="section-title-en">About</h2>
        <p class="section-title-ja">コンセプトと、私について</p>
      </div>

      <!-- アバウト_コンセプト -->
      <div class="about__conceptWrap fadein">
        <div class="about__conceptWrap__concept">
          <p class="about__conceptWrap__concept__catch">『 suimenka = 水面下 』</p>
          <p class="about__conceptWrap__concept__fish">
            <i class="fas fa-fish black-fish fa-rotate-180"></i>
          </p>

          <div class="about__conceptWrap__concept__concept-txt-pc">
            <p>
              Webサイトの素敵なところはこだわりや<br />オリジナリティを発信できる点です。
            </p>
            <p>
              水面下にあるイメージ･アイディア･らしさを<br />
              浮上させて、ぜひ形にしてみませんか？
            </p>
          </div>
          <div class="about__conceptWrap__concept__concept-txt-sp">
            <p>
              Webサイトの素敵なところはこだわりやオリジナリティを発信できる点です。
            </p>
            <br>
            <p>
              水面下にあるイメージ･アイディア･らしさを浮上させて、ぜひ形にしてみませんか？
            </p>
          </div>

        </div>

        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
      </div>

      <!-- アバウト_プロフィール -->
      <div class="about__profileWrap fadein">
        <div class="about__profileWrap__profile">
          <div class="about__profileWrap__profile__profile-img">
            <img src="<?php echo get_theme_file_uri('/images/profile.png'); ?>" alt="" プロフィール画像 />
          </div>
          <div class="about__profileWrap__profile__profile-txt-pc">
            <p class="about__profileWrap__profile__name-pc">NAME : Saori Suzuki</p>
            <p>一般企業で約12年間経理職に従事。<br>
              趣味でサイト運営をしていた経験から<br>
              Web制作の世界に惹かれ、デザインと<br>
              コーディングの道へ。</p>

            <p>クライアント様の思い描いているものを<br>
              表現することを第一に考えています。</p>
            </p>
          </div>
          <div class="about__profileWrap__profile__profile-txt-sp">
            <p class="about__profileWrap__profile__name-sp">NAME : Saori Suzuki</p>
            <p>一般企業で約12年間経理職に従事。
              趣味でサイト運営をしていた経験から
              Web制作の世界に惹かれ、デザインとコーディングの道へ。</p>

            <p>クライアント様の思い描いているものを表現することを第一に考えています。</p>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- サービス -->
    <section class="service" id="service">
      <div class="section-title-center">
        <h2 class="section-title-en">Service</h2>
        <p class="section-title-ja">サービス内容</p>
      </div>

      <ul class="service__ul">
        <li class="serviceList fadein">
          <img class="serviceList__img" src="<?php echo get_theme_file_uri('/images/icon1.png'); ?>" alt="Hearing" />
          <h3 class="serviceList__title">Hearing</h3>
          <p class="serviceList__txt">
            どんなHPを作りたいか(構造･イメージ)をご相談しながらお見積りさせて頂きます。<br />
            不明点はお気軽にお尋ね下さい。
          </p>
          <div class="wave"></div>
        </li>

        <div class="arrow fadein"></div>

        <li class="serviceList fadein">
          <img class="serviceList__img" src="<?php echo get_theme_file_uri('/images/icon2.png'); ?>" alt="Design" />
          <h3 class="serviceList__title">Design</h3>
          <p>
            ご相談頂きました内容に基づきデザインします。デザインデータがある場合はそちらを使用させて頂くことも可能です。
          </p>
          <div class="wave"></div>
        </li>

        <div class="arrow fadein"></div>

        <li class="serviceList fadein">
          <img class="serviceList__img" src="<?php echo get_theme_file_uri('/images/icon3.png'); ?>" alt="Coding" />
          <h3 class="serviceList__title">Coding</h3>
          <p>
            デザインが確定しましたら制作作業に入ります。<br />
            スマホ版の制作も合わせて行い、動作を確認後に納品となります。
          </p>
          <div class="wave"></div>
        </li>
      </ul>

      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
    </section>

    <!-- ワークス -->
    <section class="works" id="works">
      <div class="section-title-center">
        <h2 class="section-title-en">Works</h2>
        <p class="section-title-ja">制作したもの</p>
      </div>
      <div class="works__wrap">
        <?php
        $args = array(
          'post_type' => 'works', //カスタム投稿タイプ名
          'posts_per_page' => 4 //取得する投稿の件数
        );
        ?>
        <?php $posts = get_posts($args); ?>
        <?php foreach ($posts as $post) : ?>
          <?php setup_postdata($post); ?>

          <div class="works__item fadein">

            <a href="<?php the_permalink(); ?>">
              <img class="works__item__img" class="fadein" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
              <p class="works__itemTitle"><?php the_title(); ?></p>
            </a>
          </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </section>

    <!-- コンタクト -->
    <section class="contact" id="contact">
      <div class="section-title-center">
        <h2 class="section-title-en">Contact</h2>
        <p class="section-title-ja">お問い合わせ</p>
      </div>

      <?php the_content(); ?>

      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
      <div class="bubble"></div>
    </section>
  </main>

  <?php get_footer(); ?>