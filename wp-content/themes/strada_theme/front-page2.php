<?php get_header('abc');
/* Template Name: Front Page 2 */
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-top">
  <div class="t-mv">
    <div class="t-mv_slide">
		
		<?php
		if( have_rows('top_banner') ):
			while( have_rows('top_banner') ) : the_row();
				$image_pc = get_sub_field('image_pc');
				$image_sp = get_sub_field('image_sp');
				$url = get_sub_field('url');
		        $target = get_sub_field('target_url');
				//var_dump($image_pc);
				//var_dump($target);
				?>
				<div class="items">
					<?php if(strlen($url) > 0 ) : ?>
						<a href="<?php echo $url?>" <?php echo (sizeof($target) > 0) ? 'target="_blank"' : ""; ?>>		
							<div class="pc">
								<img src="<?php echo $image_pc['url']; ?>" alt="" />
							</div>
							<div class="sp">
								<img src="<?php echo $image_sp['url']; ?>" alt="" />
							</div>
						</a>
					<?php else: ?>
						<div class="pc">
								<img src="<?php echo $image_pc['url']; ?>" alt="" />
							</div>
						<div class="sp">
							<img src="<?php echo $image_sp['url']; ?>" alt="" />
						</div>
					<?php endif; ?>
				</div>
				<?php
			endwhile;
		endif;
	  ?>
      <!--<div class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv01.jpg" alt="" />
      </div>
      <div class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv01.jpg" alt="" />
      </div>
      <div class="items">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv01.jpg" alt="" />
      </div>-->
    </div>
    <div class="t-mv_arrows">
      <div class="t-mv_arrowsItem t-mv_prev">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/ico_prev.svg" alt="" />
      </div>
      <div class="t-mv_arrowsItem t-mv_next">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/ico_next.svg" alt="" />
      </div>
    </div>
  </div>
  <!-- end t-mv -->
  <div class="t-banner">
    <div class="l-container">
      <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/top/img_mv02.png" width="740" alt="" />
	  <img style="margin:0 auto" class="sp" src="https://strada-tax.jp/wp-content/uploads/2021/07/img_mv02_sp.png" width="740" alt="" />
    </div>
  </div>
  <div class="t-news">
    <div class="l-container_small">
      <div class="t-news_main">
        <div class="c-tlt01 c-tlt01__black c-tlt01__small">
          <h2>
            ニュース
            <span>NEWS</span>
          </h2>
        </div>
        <div class="t-news_list">
          <ul>
            <?php
              // $author_name = get_post_meta($post->ID, 'author_name', true);
              // $authorCurrent = array( get_user_by( 'id', $post->post_author ) );
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                'post_type' => 'news',
                'posts_per_page' => 3,
                'orderby' => 'date',
                'paged' => 1
              );

              $the_query = new WP_Query($args); ?>
              <?php
              if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
                  <li>
                    <a href="<?php echo get_permalink(get_the_ID()); ?>">
                      <time><?php echo get_the_date('Y.m.d') ?></time>
                      <span><?php echo get_the_title(); ?></span>
                    </a>
                  </li>
                <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
                <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
                <?php
              endif;
            ?>
          </ul>
        </div>
        <div class="c-btn01 c-btn01__center c-btn01__blue">
          <a href="<?php echo get_post_type_archive_link('news'); ?>">
            <span>もっと見る</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
              <path
                id="Path_441"
                data-name="Path 441"
                d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
                transform="translate(-540.103 -147.968)"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end t-news -->

<div class="t-news">
    <div class="l-container_small">
      <div class="t-news_main">
        <div class="c-tlt01 c-tlt01__black c-tlt01__small">
          <h2>
            お役立ち情報
            <span>COLUMN</span>
          </h2>
        </div>
        <div class="t-column_list">
          <ul class="t-column_ul">
            <?php
              // $author_name = get_post_meta($post->ID, 'author_name', true);
              // $authorCurrent = array( get_user_by( 'id', $post->post_author ) );
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
              $args = array(
                'posts_per_page' => 3,
                'orderby' => 'date',
                'paged' => 1
              );

              $the_query = new WP_Query($args); ?>
              <?php
              if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post(); ?>
						  <li class="column_post">
							  <a href="<?php echo get_permalink(get_the_ID()); ?>">
								  <span class="column_post_thumbnail"><?php echo get_the_post_thumbnail(); ?></span>
								  <span class="column_post_cat"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
								  <p><time class="column_post_date"><?php echo get_the_date('Y.m.d'); ?></time></p>
								  <p><span class="column_post_ttl"><?php echo get_the_title(); ?></span></p>
							  </a>
						  </li>
                <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
                <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
                <?php
              endif;
            ?>
          </ul>
        </div>
        <div class="c-btn01 c-btn01__center c-btn01__blue">
          <a href="<?php echo esc_url( home_url( '/columns/' ) ); ?>">
            <span>もっと見る</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
              <path
                id="Path_441"
                data-name="Path 441"
                d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
                transform="translate(-540.103 -147.968)"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- end t-news -->



  <div class="t-about t-block">
    <div class="c-tlt01 c-tlt01__white">
      <h2 class="c-tlt01__line c-tlt01__line--white">
        ストラーダについて
        <span>ABOUT STRADA</span>
      </h2>
    </div>
    <div class="t-about_main">
      <div class="l-container">
        <p>
          ストラーダグループとは、税理士、公認会計士、社会保険労務士、中小企業診断士、行政書士が在籍している士業の専門家集団です。<br />
          私たちは、時代の先端の情報を収集して、バックオフィスのあらゆる業務を解決できる集団になるべく精進しております。<br />
          上場企業、大会社、社会福祉法人等でも、経理、人事、総務等の役割に応じて、部署が分かれていますが、会社の目指すべき方向は一つです。<br />
          各種部署が連携しながら、会社が目指すべき方向について、議論しています。その機能を私たち士業が担います。<br />
          ストラーダグループとして、総合的な支援をさせて頂くことにより、会社の全体戦略や方向性に基づいたアドバイスが可能になるのです。
        </p>
        <div class="c-btn01 c-btn01__center c-btn01__white">
          <a href="<?php echo get_permalink(32); ?>">
            <span>もっと見る</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
              <path
                id="Path_441"
                data-name="Path 441"
                d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
                transform="translate(-540.103 -147.968)"
              />
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- end t-about_main -->
  </div>
  <!-- end t-about -->
  <div class="t-voice t-block">
    <div class="c-tlt01 c-tlt01__black">
      <h2 class="c-tlt01__line c-tlt01__line--black">
        お客様の声
        <span>VOICE</span>
      </h2>
    </div>
    <div class="t-voice_main">
      <div class="c-voicePost">
        <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
              'post_type' => 'voice',
              'posts_per_page' => 9,
              'orderby' => 'date',
              'paged' => $paged,
            );

            $the_query = new WP_Query($args); ?>
            <?php
          if($the_query->have_posts()) :
            while($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="c-voicePost__items">
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <div class="c-voicePost__img">
                    <figure>
                      <?php
						if (has_post_thumbnail()) {
							echo get_the_post_thumbnail();
						} else { ?>
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/nophoto.png" alt="nophoto">
						<?php }
						?>
                    </figure>
                  </div>
                  <h3 class="c-voicePost__tlt">
                    <?php echo get_the_title(); ?>
                  </h3>
                  <p class="c-voicePost__name">
                    <?php echo get_field('name'); ?>
                  </p>
                </a>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else:
            ?>
            <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
            <?php
          endif;
        ?>
      </div>
    </div>
    <div class="c-btn01 c-btn01__center c-btn01__blue">
      <a href="<?php echo get_post_type_archive_link('voice'); ?>">
        <span>もっと見る</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
    </div>
  </div>
  <!-- end t-voice -->
  <div class="t-youtube t-block">
    <div class="banner-part">
      <div class="c-tlt01 c-tlt01__black">
        <h2 class="c-tlt01__line c-tlt01__line--black">
        公式YouTubeチャンネル
        </h2>
      </div>
      <p>ストラーダ税理士法人は、補助金や融資、会社設立等、YouTubeでも税務や労務に関する有益な情報を発信しています！<br>是非、ご覧ください。</p>
    </div>
    <div class="banner">
      <a href="https://www.youtube.com/channel/UCOFNxlei_rJFwPLs1e4npdQ" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/youtube.png" alt="" />
      </a>
    </div>
  </div>
  <div class="t-youtube t-block">
    <div class="banner-part">
      <div class="c-tlt01 c-tlt01__black">
        <h2 class="c-tlt01__line c-tlt01__line--black"> 税理士いらず!!ひとりで確定申告サポート</h2>
      </div>
      <p>ランチ1回分で一生使える確定申告・税金に関する学習が可能！</p>
    </div>
    <div class="banner">
      <a href="https://buppantax.com/" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/kakutei-sinkoku-lp.png" alt="" />
      </a>
    </div>
  </div>
	
  <div class="t-reason t-block"> 
    <div class="c-tlt01 c-tlt01__black">
      <h2 class="c-tlt01__line c-tlt01__line--black">
        選ばれる6つの理由
        <span>REASON</span>
      </h2>
    </div>
    <div class="l-container">
      <div class="t-reason_main">
        <div class="t-reason_items">
          <div class="t-reason_content">
            <span>01</span>
            <h3>上場企業含む300社以上の顧問実績</h3>
            <p>
              これまで担当してきた確かな実績で、あらゆるお客様のお悩みにお応え致します。<br />
              また、上場企業含む300社以上、個人事業主150名以上の顧問実績から培われた金融機関の人脈を駆使して、クライアント様に適切な銀行をご紹介しております。<br />
              ※一部紹介ができない地域がありますので、ご留意ください。
            </p>
          </div>
          <div class="t-reason_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img01.jpg" alt="上場企業含む300社以上の顧問実績" />
          </div>
        </div>
        <div class="t-reason_items">
          <div class="t-reason_content">
            <span>02</span>
            <h3>創業融資通過率99.7%の実績</h3>
            <p>
              ストラーダでは創業融資を通過率を上げるためにご依頼者の状況確認から最適な金融機関をご提案させて頂きます。<br />
              取引銀行の数や業種、業績など企業ごとに相性の良い金融機関をご紹介します。<br />
              申込書や事業計画書などのサポートも細かく行い、99.7％の融資通過率になりました。
            </p>
          </div>
          <div class="t-reason_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img02.jpg" alt="創業融資通過率99.7%の実績" />
          </div>
        </div>
        <div class="t-reason_items">
          <div class="t-reason_content">
            <span>03</span>
            <h3>経済産業省から認定された信頼性</h3>
            <p>
              ストラーダ税理士法人は、経営革新認定支援機関として、経済産業省に認定された登録機関です。<br />
              経営革新認定支援機関が、事業計画を作成することにより、融資の通過率の増加や金利が減少する場合があります。<br />
              また、補助金についても、補助金を得られる確率が増加します。<br />
              <br />
              ※実際に、補助金をご依頼頂く場合は、別途費用を頂戴致しますので、ご留意ください。
            </p>
          </div>
          <div class="t-reason_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img03.jpg" alt="経済産業省から認定された信頼性" />
          </div>
        </div>
        <div class="t-reason_items">
          <div class="t-reason_content">
            <span>04</span>
            <h3>チャットワークを使用し素早いレスポンスを実現</h3>
            <p>
              弊社では、基本的には、チャットワークというビジネスチャットでやり取りさせて頂いております。<br />
              お客様ごとの、弊社の従業員を含めた、チャットグループを作成させて頂きます。<br />
              不明な点等を気軽にチャットでご連絡頂ければ、適時に返信致します。<br />
              もちろん、メール・電話対応も行っておりますので、チャットワークをご利用いただかなくても結構です。
            </p>
          </div>
          <div class="t-reason_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img04.jpg" alt="チャットワークを使用し素早いレスポンスを実現" />
          </div>
        </div>
        <div class="t-reason_items">
          <div class="t-reason_content">
            <span>05</span>
            <h3>効率的なサポート体制と豊富な税制知識</h3>
            <p>
              毎年一回税制改正が行われます。 ストラーダでは、最新の税制に基いてお客様が安定経営ができるように、最新の情報を入手・発信致します。 また、効率化の観点から、全てのお客様に電子申告で申告作業を致します。
              そのため、決算申告の間際に、お客様に申告の作業で押印を頂く必要がありません。
            </p>
          </div>
          <div class="t-reason_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img05.jpg" alt="効率的なサポート体制と豊富な税制知識" />
          </div>
        </div>
        <div class="t-reason_items">
          <div class="t-reason_content">
            <span>06</span>
            <h3>公認会計士や社労士、行政書士が在籍しているから出来る、ビジネス全体のアドバイス</h3>
            <p>
              税理士は、税金の計算や税金に関するアドバイスをさせて頂きます。<br />
              一方で公認会計士は、税金以外の決算書に関するアドバイスをさせて頂きます。<br />
              企業運営には、税金の計算だけではなくて、財務、会計、経営、倒産リスク等考える必要がある項目は、多くあります。<br />
              そのような場合、税務以外の相談も、私たちが培った長年の経験を生かして、アドバイスさせて頂きます。
            </p>
          </div>
          <div class="t-reason_img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img06.jpg" alt="公認会計士や社労士、行政書士が在籍しているから出来る、ビジネス全体のアドバイス" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end t-reason -->
  <!-- <div class="t-member t-block">
    <div class="c-tlt01 c-tlt01__black">
      <h2 class="c-tlt01__line c-tlt01__line--black">
        メンバー紹介
        <span>MEMBER</span>
      </h2>
    </div>
    <div class="l-container">
      <div class="t-member_main">
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
          $args = array(
            'post_type' => 'members',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'paged' => $paged
          );

          $the_query = new WP_Query($args); ?>
          <?php
          if($the_query->have_posts()) :
            while($the_query->have_posts()) : $the_query->the_post(); ?>
              <div class="t-member_items">
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <figure>
                    <?php
                      if ( has_post_thumbnail() ) {
                        the_post_thumbnail('full');
                      } else {
                    ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/images/noimage.png" alt="<?php the_title(); ?>">
                    <?php } ?>
                  </figure>
                  <div class="_inner">
                    <span>
                      <?php
                        $terms = wp_get_post_terms($post->ID,'taxonomy_position', array(
                            'hide_empty' => false,
                            'parent' => 0,
                            'order' => 'ASC',
                            'orderby' => 'term_id'
                        ) );
                        foreach ( $terms as $term) {
                          $tax_link = get_term_link($term->slug, 'taxonomy_position');
                          $tax_name = $term->name;
                          $tax_slug = $term->slug;
                          echo $tax_name;
                        }
                      ?>
                    </span>
                    <h3><?php echo get_the_title(); ?></h3>
                  </div>
                </a>
              </div>
            <?php endwhile;
            if (function_exists("pagination")) {
              pagination($the_query->max_num_pages);
            }
            wp_reset_postdata();
          else:
            ?>
            <div class="title"><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p></div>
            <?php
          endif;
        ?>
      </div>
    </div>
    <div class="c-btn01 c-btn01__center c-btn01__blue">
       <a href="<?php echo get_post_type_archive_link('members'); ?>">
        <span>もっと見る</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="44.117" height="31.606" viewBox="0 0 44.117 31.606">
          <path
            id="Path_441"
            data-name="Path 441"
            d="M567.158,148.7a3.12,3.12,0,0,0-4.025,0,2.311,2.311,0,0,0,0,3.554l10.191,9H542.95a2.533,2.533,0,1,0,0,5.027h30.374l-10.19,9a2.31,2.31,0,0,0,0,3.554,3.118,3.118,0,0,0,4.025,0l17.062-15.067Z"
            transform="translate(-540.103 -147.968)"
          />
        </svg>
      </a>
    </div>
  </div> -->
  <!-- end t-member -->
  <div class="t-links t-block">
    <div class="l-container">
      <div class="t-links_main" style="justify-content:center;">
        <a href="<?php echo home_url('about') ?>/#message">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_link01.jpg" alt="代表挨拶" />
          <span class="t-links_ja">代表挨拶</span>
          <span class="t-links_en">MESSAGE</span>
        </a>
        <a href="<?php echo get_permalink(134); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_link02.jpg" alt="よくある質問" />
          <span class="t-links_ja">よくある質問</span>
          <span class="t-links_en">QA</span>
        </a>
        <a href="<?php echo get_permalink(90); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_link03.jpg" alt="アクセス" />
          <span class="t-links_ja">アクセス</span>
          <span class="t-links_en">ACCESS</span>
        </a>
        <a href="<?php echo home_url('recruit'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_link04.jpg" alt="採用情報" />
          <span class="t-links_ja">採用情報</span>
          <span class="t-links_en">RECRUIT</span>
        </a>
      </div>
    </div>
  </div>
  <!-- end t-links -->
  <?php get_template_part( 'template', 'access' ); ?>
</main>

<?php get_footer(); ?>