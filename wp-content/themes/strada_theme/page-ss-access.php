<?php 
/* Template Name: access_ss */
get_header("ss"); ?>

<main class="l-main p-access">
    <div class="c-breakcrumds">
      <div class="l-container">
        <?php if (function_exists('bcn_display')) { bcn_display(); }?>
      </div>
    </div>

    <div class="c-mainTitle">
      <div class="c-mainTitle_content">
        <div class="c-tlt01 c-tlt01__black">
          <h1 class="c-tlt01__line c-tlt01__line--gray">
            アクセス
            <span>ACCESS</span>
          </h1>
        </div>
      </div>
    </div>

    <div class="l-container accessbox">
        <div class="access-title">アクセス</div>
        <div class="p-about_groupContent">
            <div class="t-access t-block" id="access">
                <div class="l-container">
                    <div class="t-access_main">
                        <div class="t-access_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/top/img_access.jpg" alt="">
                        </div>
                        <div class="t-access_content">
                            <?php if(!is_page('access')) : ?>
                            <div class="c-tlt01 c-tlt01__black">
                                <h2 class="c-tlt01__line">
                                    アクセス
                                    <span>ACCSESS</span>
                                </h2>
                            </div>
                            <?php endif; ?>
                                <h4>ストラーダ社会保険労務士法人</h4>
                                <p class="t-access_add">
                                東京都中央区日本橋蛎殻町2-11-2 オートエックス工藤ビル3階
                                </p>
                                <p class="t-access_add">
                                TEL:03-6231-1103
                                </p>
                            <ul>
                                <li>
                                    <span>半蔵門線：水天宮前駅 5番出口から徒歩2分</span>
                                </li>
                                <li>
                                    <span>日比谷線：人形町駅 A2出口から徒歩5分 </span>
                                </li>
                                <li>
                                    <span>浅草線：人形町駅 A2出口から徒歩5分</span>
                                </li>
                                <li>
                                    <span>都営新宿線：浜町駅 A2出口から徒歩9分</span>
                                </li>
                            </ul>
                        </div>
                        <?php if(!is_page('access')) : ?>
                        <div class="t-access_map">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.732793825305!2d139.78441761525877!3d35.68358088019382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188945bc013343%3A0x91fe51cc7df02e4d!2z5pel5pys44CB44CSMTAzLTAwMTQg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL6JuO5q6755S677yS5LiB55uu77yR77yR4oiS77ySIOOCquODvOODiOOCqOODg-OCr-OCueW3peiXpOODk-ODqyA0Rg!5e0!3m2!1sja!2s!4v1619871108536!5m2!1sja!2s"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            <div class="access-list">
                <div class="access" id="access01">
                    <h3 class="cm-ttl01">半蔵門線「水天宮前駅」からお越しの場合</h3>
                    <ul>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access1_01.png" alt="半蔵門線「水天宮前駅」の水天宮前方面改札から出て、5番出口から地上に出る。" />
                            </div>
                            <p>半蔵門線「水天宮前駅」の水天宮前方面改札から出て、5番出口から地上に出る。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access1_02.png" alt="80m直進。" />
                            </div>
                            <p>80m直進。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access1_03.png" alt="右手に日高屋がある角を右折し、110m直進。" />
                            </div>
                            <p>右手に日高屋がある角を右折し、110m直進。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access1_03.png" alt="左手に見える青色・緑色・橙色の看板がある建物の５階。備長炭焼一久の向かい。" />
                            </div>
                            <p>左手に見える青色・緑色・橙色の看板がある建物の５階。備長炭焼一久の向かい。</p>
                        </li>
                    </ul>
                </div>
                <div class="access" id="access02">
                    <h3 class="cm-ttl01">日比谷線・浅草線「人形町駅」からお越しの場合</h3>
                    <ul>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access2_01.png" alt="日比谷線・浅草線「人形町駅」のA２番出口を出て、右折し、160m直進する。" />
                            </div>
                            <p>日比谷線・浅草線「人形町駅」のA２番出口を出て、右折し、160m直進する。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access2_02.png" alt="正面にキンコーズが見える水天宮前の交差点を左折。" />
                            </div>
                            <p>正面にキンコーズが見える水天宮前の交差点を左折。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access2_03.png" alt="交差点を渡ると右手に交番があるので、その道を90m直進。" />
                            </div>
                            <p>交差点を渡ると右手に交番があるので、その道を90m直進。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access2_04.png" alt="右手に日高屋がある角を右折し、110m直進。左手に青色・緑色・橙色の看板がある建物の５階。備長炭焼一久の向かい。" />
                            </div>
                            <p>右手に日高屋がある角を右折し、110m直進。<br/>左手に青色・緑色・橙色の看板がある建物の５階。備長炭焼一久の向かい。</p>
                        </li>
                    </ul>
                </div>
                <div class="access" id="access03">
                    <h3 class="cm-ttl01">新宿線「浜町駅」からお越しの場合</h3>
                    <ul>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access3_01.png" alt="都営新宿線「浜町駅」のA2番出口を出て、右折し、100m直進。" />
                            </div>
                            <p>都営新宿線「浜町駅」のA2番出口を出て、右折し、100m直進。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access3_02.png" alt="浜町公園を抜け、左折し、200m直進。" />
                            </div>
                            <p>浜町公園を抜け、左折し、200m直進。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access3_03.png" alt="正面に成城石井が見える浜町中ノ橋の交差点を右折し、260m直進。" />
                            </div>
                            <p>正面に成城石井が見える浜町中ノ橋の交差点を右折し、260m直進。</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/access/access1_03.png" alt="日高屋がある角を左折し、110m直進。左手に見える青色・緑色・橙色の看板がある建物の５階。備長炭焼一久の向かい。" />
                            </div>
                            <p>日高屋がある角を左折し、110m直進。<br/>左手に見える青色・緑色・橙色の看板がある建物の５階。備長炭焼一久の向かい。</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="access google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.732793825305!2d139.78441761525877!3d35.68358088019382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188945bc013343%3A0x91fe51cc7df02e4d!2z5pel5pys44CB44CSMTAzLTAwMTQg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL6JuO5q6755S677yS5LiB55uu77yR77yR4oiS77ySIOOCquODvOODiOOCqOODg-OCr-OCueW3peiXpOODk-ODqyA0Zg!5e0!3m2!1sja!2s!4v1635329371742!5m2!1sja!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</main>

<?php get_footer("ss"); ?>