<?php get_header("sb");
/* Template Name: Front Page SB */
session_start();
$_SESSION['url_type']="sb";
$_SESSION['page_type']="top";
?>
<!-- .l-main | メインコンテンツ -->
<main class="l-main p-top">
  <!-- start imageplay -->
  <div class="imageplay">
    <!-- picture area -->
    <ul>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SB/Strada_Bs_Slider_01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SB/Strada_Bs_Slider_01.png"
            alt="" /></a>
      </li>
      <li>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SB/Strada_Bs_Slider_01.png"
            alt="" /></a>
      </li>
    </ul>
    <!-- left,right arrow -->
    <div class="left"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/arrow-left.png" alt=""
        class="arrowstyle-left" /></div>
    <div class="right"><img src="<?php echo get_template_directory_uri(); ?>/images/top_SZ/arrow-right.png" alt=""
        class="arrowstyle-right" /></div>
    <!-- dot -->
    <ol>
    </ol>
  </div>
  <!-- end imageplay -->
  <!-- start What’s New -->
  <div class="block_wrap">
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap" class="title_item_wrap active">
            <p class="chapter_title">What's New
            <div class="circle"></div>
            </p>
          </div>
          <div id="text" class="border-text border-text-controll">更新のご案内</div>
        </div>
      </div>
    </div>
    <div class="l-container">
      <div id="list_wrap" class="node_wrap node_wrap_show">
<!--        <div class="news_style1"><iframe src="https://www.youtube.com/embed/D5-5j3AoQvw" frameborder="0"-->
<!--            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen-->
<!--            style="width:100%;height:90%"></iframe>-->
<!--          <p class="Youtube_text">ストラーダビジネスサポート紹介動画 Youtube</p>-->
<!--        </div>-->
        <div class="news_style2">
          <div class="t-news_list_topbox">
            <div style="display: flex;overflow-x: hidden;width:100%;border-bottom:1px dotted #707070;">
              <div class="news_title">ニュース</div>
              <a href="<?php echo home_url('bs/bsnewslist'); ?>" style="text-decoration:none">
                 <div class="news_title_readmore">READ MORE</div>
                <div style="position:relative;top:-5px">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/top/news_more.png" alt=""
                    style="width:30px" />
                </div>
              </a>
            </div>
            <?php
            // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
            $args = array(
              'post_type' => 'news', // 文章类型
              'posts_per_page' => 10,
              'paged' => $paged,
              'company' => 'SB', // 自定义字段名
            );
            $query = new WP_Query($args); // 执行查询
            ?>
            <ul>
              <?php
              if($query->have_posts()) :
                while($query->have_posts()) : $query->the_post(); ?>
              <li>
                <a href="<?php echo get_permalink(get_the_ID()); ?>">
                  <div class="t-news_list_topbox time" style="float: left; width: 10%;">
                    <?php echo get_the_date('Y.m.d') ?>
                  </div>
                  <div class="t-news_list_topbox time" style="float: right; width: 90%;">
                    <?php echo get_the_title(); ?>
                  </div>
                </a>
              </li>
              <?php endwhile;
                wp_reset_postdata();
              else:
                ?>
              <div class="title">
                <li>
                  <p>
                    <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?>
                  </p>
                </li>
              </div>
              <?php endif;?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end What’s New -->

  <!-- start Message -->
  <div class="block_wrap1">
    <div class="border-text1"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap1" class="title_item_wrap1 active1">
            <p class="chapter_title1">Message
            <div class="circle1"></div>
            </p>
          </div>
          <div id="text1" class="border-text border-text-controll">トップメッセージ</div>
        </div>
      </div>
    </div>
    <div id="list_wrap1" class="node_wrap1 node_wrap_show1">
      <div class="l-container Message_style1_extra">
        <div class="Message_style1">
          <p class="Message_style1_p1">ビジネスを成長させたいあなたへ</p>
          <p class="Message_style1_p2">ビジネスの土台作りから<br />拡大・上場まで一括支援。<br /><br /></p>
          <p class="Message_style1_p3">
            　「ストラーダ」とは、イタリア語で「道」という意味があります。<br /><br />
            　お客様と歩む長い道をともに歩み続けられるような、会社にしたいという意味を込めて、「ストラーダビジネスサポート」と名付けました。<br />
            　私たちの使命は、バックオフィスの総合的な支援です。<br /><br />
          </p>
          <p class="Message_style1_p4">ストラーダビジネスサポート株式会社 代表取締役</p>
          <p class="Message_style1_p5">山田 直輝</p>
        </div>
        <div class="Message_style2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top_SB/IMG_0362.JPG" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- end Message -->

  <!-- start Strada Group -->
  <a id="StradaGroup" class="target-fix"></a>
  <div class="block_wrap2">
    <div class="border-text2"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap2" class="title_item_wrap2 active2">
            <p class="chapter_title2">Strada Group
            <div class="circle2"></div>
            </p>
          </div>
          <div id="text2" class="border-text border-text-controll">ストラーダグループ</div>
        </div>
      </div>
    </div>

      <div id="list_wrap2" class="node_wrap2 node_wrap_show2">
      <div class="l-container">
                <div class="l-container Group_style2_extra">
                    <div class="Group_style_left">
                        <div class="image_div2">
                            <div class="title_div_p_2">
                                <p class="Group_style1_p1">ワンストップの集団だからこそできる部分最適ではなく全体最適な提案を。</p>
                                <!-- <p class="Group_style1_p2">部分最適ではなく全体最適な提案を。</p> -->
                            </div>
                            <div id="mainDiv" class="div-relative">
                                <div id="firstDiv" class="div-a">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/groupImg.png"
                                        alt="" />
                                </div>
                                <div id="secendDiv" class="div-b"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Group_style_right">
                        <div class="youtube_div_2">
                            <div class="Group_youtube_style1">
                                <iframe src="https://www.youtube.com/embed/D5-5j3AoQvw" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen style="width:100%;height:90%"></iframe>
                                <p class="Youtube_text">ストラーダグループ紹介動画 Youtube</p>
                            </div>
                            <div class="StradaStyle_div">
                                <div class="StradaStyle">ストラーダグループとは、　 <br>
                                    <a href="<?php echo home_url('tax'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span1">■税理士：ストラーダ税理士法人　</span></a> <br>
                                    <a href="<?php echo home_url('bs'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span2">■ビジネスコンサル：ストラーダビジネスサポート株式会社　</span></a> <br>
                                    <a href="#" style="text-decoration: none;"><span 
                                            class="StradaStyle_span3">■公認会計士：ストラーダ公認会計士　</span></a> <br>                                    
                                    <a href="<?php echo home_url('sr'); ?>" style="text-decoration: none;">
                                        <span class="StradaStyle_span4">■社会保険労務士：ストラーダ社会保険労務士</span></a> <br>
                                    <a href="<?php echo home_url('chushoukigyouroudou'); ?>"
                                        style="text-decoration: none;"><span
                                            class="StradaStyle_span5">■労働保険事業組合業務：中小企業労働企画開発協会</span></a> <br>
                                    <a href="<?php echo home_url('admin'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span6">■行政書士：ストラーダ行政書士　</span></a> <br>
                                    <a href="<?php echo home_url('taxria'); ?>" style="text-decoration: none;"><span
                                            class="StradaStyle_span7">■不動産：株式会社タックス・リアルティ　</span></a> <br>
                                    <a href="#" style="text-decoration: none;"><span 
                                            class="StradaStyle_span8">■AI・DXコンサル：ストラーダAIDX株式会社　</span></a> <br>
                                    <span
                                        class="StradaStyle_span9">が在籍しています。ストラーダグループとして、企業の戦略を下支する、バックオフィス業務の専門家集団です。バックオフィス業務を総合的な支援をさせて頂くことにより、
                                        会社の全体戦略に基づいたアドバイスを可能としております。</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--    <div class="l-container">-->
<!--      <div id="list_wrap2" class="node_wrap2 node_wrap_show2">-->
<!--        <div class="Strada_style">-->
<!--          <div class="Strada_style_img1">-->
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/top_SZ/Strada Group_icon.png" alt=""-->
<!--              class="Strada_style_img1_1" />-->
<!--          </div>-->
<!--          <p class="StradaStyle">ストラーダグループとは、　-->
<!--            <span style="color: #00a159; font-weight: bold;">■ビジネスコンサル：ストラーダビジネスサポート株式会社　</span>-->
<!--            <span style="color: #003e75; font-weight: bold;">■税理士：ストラーダ税理士法人　</span>-->
<!--            <span style="color: #684799; font-weight: bold;">■公認会計士：ストラーダ公認会計士　</span>-->
<!--            <span style="color: #e17401; font-weight: bold;">■社会保険労務士：ストラーダ</span>-->
<!--            <span style="color: #e17401; font-weight: bold;">社会保険労務士　</span>-->
<!--            <span style="color: #b3752a; font-weight: bold;">■中小企業診断士：中小企業労働企画開発協会　</span>-->
<!--            <span style="color: #808c96; font-weight: bold;">■行政書士：ストラーダ行政書士　</span>-->
<!--            <span style="color: #b8183f; font-weight: bold;">■不動産：株式会社タックス・リアルティ　</span>-->
<!--            <span style="color: #221815;">が在籍しています。ストラーダグループとして、企</span>-->
<!--            <span style="color: #221815;">業の戦略を下支する、バックオフィス業務の専門家集団です。バックオフィス業務を総合的な支援をさせて頂くことにより、-->
<!--              会社の全体戦略に基づいたアドバイスを可能としております。</span>-->
<!--          </p>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
  </div>
  <!-- end Strada Group -->

  <!-- start Service -->
  <a id="Service" class="target-fix"></a>
  <div class="block_wrap3">
    <div class="border-text3"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap3" class="title_item_wrap3 active3">
            <p class="chapter_title3">Service
            <div class="circle3"></div>
            </p>
          </div>
          <div id="text3" class="border-text border-text-controll">業務内容</div>
        </div>
      </div>
    </div>
    <div id="list_wrap3" class="node_wrap3 node_wrap_show3">
      <?php get_template_part('template', 'sb-service'); ?>
    </div>
  </div>
  <!-- end Service -->

  <!-- start Case Study -->
  <a id="CaseStudy" class="target-fix"></a>
  <div class="block_wrap5">
    <div class="border-text5"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap5" class="title_item_wrap5 active5">
            <p class="chapter_title5">Case Study
            <div class="circle5"></div>
            </p>
          </div>
          <div id="text5" class="border-text border-text-controll">当社事例</div>
        </div>
      </div>
    </div>
    <div id="list_wrap5" class="node_wrap5 node_wrap_show5">
      <?php get_template_part('template', 'casestudy'); ?>
    </div>
  </div>
  <!-- end Case Study -->

  <!-- start About -->
  <a id="About" class="target-fix"></a>
  <div class="block_wrap7">
    <div class="border-text7"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap7" class="title_item_wrap7 active7">
            <p class="chapter_title7">About
            <div class="circle7"></div>
            </p>
          </div>
          <div id="text7" class="border-text border-text-controll">会社概要、アクセス、メンバー</div>
        </div>
      </div>
    </div>
    <div id="list_wrap7" class="node_wrap7 node_wrap_show7">
      <?php get_template_part('template', 'about_sb'); ?>
      <?php get_template_part('template', 'sb-members'); ?>
    </div>
  </div>
  </div>
  </div>
  <!-- end About -->

  <!-- start Contact -->
  <a id="Contact" class="target-fix"></a>
  <div class="block_wrap8">
    <div class="border-text8"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap8" class="title_item_wrap8 active8">
            <p class="chapter_title8">Contact
            <div class="circle8"></div>
            </p>
          </div>
          <div id="text8" class="border-text border-text-controll">お問い合わせ</div>
        </div>
      </div>
    </div>
    <div id="list_wrap8" class="node_wrap8 node_wrap_show8">
      <?php get_template_part('template', 'contact_sb'); ?>
    </div>
  </div>
  <!-- end Contact -->

  <!-- start Recruit -->
  <a id="Recruit" class="target-fix"></a>
  <div class="block_wrap9">
    <div class="border-text9"></div>
    <div class="border-bt">
      <div class="l-container">
        <div style="display:flex">
          <div id="block_wrap9" class="title_item_wrap9 active9">
            <p class="chapter_title9">Recruit
            <div class="circle9"></div>
            </p>
          </div>
          <div id="text9" class="border-text border-text-controll">採用情報</div>
        </div>
      </div>
    </div>
    <div id="list_wrap9" class="node_wrap9 node_wrap_show_new">
        <?php get_template_part('template', 'recruit_sb'); ?>
    </div>
  </div>
  <!-- end Recruit -->
</main>

<?php get_footer("sb"); ?>
<script>
function setHeightWidth() {
    document.getElementById("secendDiv").style.height = document.getElementById("firstDiv").offsetHeight + "px";
    document.getElementById("secendDiv").style.width = document.getElementById("mainDiv").offsetWidth + "px";
    document.getElementById("mainDiv").style.height = document.getElementById("firstDiv").offsetHeight + "px";
}

function creatCircle() {
    const circleContainer = document.querySelector('#secendDiv');
    let childElements = circleContainer.querySelectorAll('*'); // 获取所有子元素刪除
    childElements.forEach((element) => {
        element.parentNode.removeChild(element);
    });
    // const list = ['ストラーダAIDX株式会社', 'ストラーダ税理士法人', 'ストラーダビジネスサポート株式会社', 'ストラーダ公認会計士事務所', 'ストラーダ社会保険労務士法人',
    //'中小企業労働企画開発協会', 'ストラーダ行政書士法人', 'タックスリアルティ株式会社'];
    const list = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'i'];
    list.forEach((item, index) => {
        const circle = document.createElement('a');
        if (item == 'i') {
            circle.classList.add('circle10');
            // circle.textContent = item;
            circle.addEventListener('click', () => {
                circle.href = '<?php echo home_url('/'); ?>';
            });
        } else {
            circle.classList.add('circle100');
            // circle.textContent = item;
            circle.addEventListener('click', () => {
                // alert(item)
                //if(item == 'A'){
                //    circle.href= '<?php //echo home_url(''); ?>//';
                //}
                if (item == 'B') {
                    circle.href = '<?php echo home_url('tax'); ?>';
                }
                if (item == 'C') {
                    circle.href = '<?php echo home_url('bs'); ?>';
                }
                //if(item == 'D'){
                //    circle.href= '<?php /*echo home_url(''); */?>//';
                //}
                if (item == 'E') {
                    circle.href = '<?php echo home_url('sr'); ?>';
                }
                if (item == 'F') {
                    circle.href = '<?php echo home_url('chushoukigyouroudou'); ?>';
                }
                if (item == 'G') {
                    circle.href = '<?php echo home_url('admin'); ?>';
                }
                if (item == 'H') {
                    circle.href = '<?php echo home_url('taxria'); ?>';
                }

            });
        }
        circleContainer.appendChild(circle);
    });
}

//----------start block_wrap union----------//
window.onload = function() {
    //creat group circle
    setHeightWidth();
    creatCircle();
    console.log("creat circle");

    var block_wrap = document.getElementById('block_wrap')
    var block_wrap1 = document.getElementById('block_wrap1')
    var block_wrap2 = document.getElementById('block_wrap2')
    var block_wrap3 = document.getElementById('block_wrap3')
    var block_wrap4 = document.getElementById('block_wrap4')
    var block_wrap5 = document.getElementById('block_wrap5')
    var block_wrap6 = document.getElementById('block_wrap6')
    var block_wrap7 = document.getElementById('block_wrap7')
    var block_wrap8 = document.getElementById('block_wrap8')
    var block_wrap9 = document.getElementById('block_wrap9')
    var list_wrap = document.getElementById('list_wrap')
    var list_wrap1 = document.getElementById('list_wrap1')
    var list_wrap2 = document.getElementById('list_wrap2')
    var list_wrap3 = document.getElementById('list_wrap3')
    var list_wrap4 = document.getElementById('list_wrap4')
    var list_wrap5 = document.getElementById('list_wrap5')
    var list_wrap6 = document.getElementById('list_wrap6')
    var list_wrap7 = document.getElementById('list_wrap7')
    var list_wrap8 = document.getElementById('list_wrap8')
    var list_wrap9 = document.getElementById('list_wrap9')
    var text = document.getElementById('text')
    var text1 = document.getElementById('text1')
    var text2 = document.getElementById('text2')
    var text3 = document.getElementById('text3')
    var text4 = document.getElementById('text4')
    var text5 = document.getElementById('text5')
    var text6 = document.getElementById('text6')
    var text7 = document.getElementById('text7')
    var text8 = document.getElementById('text8')
    var text9 = document.getElementById('text9')

    if (window.innerWidth <= 767) {
        if (block_wrap != null) {
            if (block_wrap.classList.contains('active') == false) {
                list_wrap.classList.add('node_wrap_hide')
            }
            block_wrap.onclick = function() {

                let classArray = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray.includes('active')) {
                    // 内容を隠す
                    block_wrap.classList.remove('active')
                    list_wrap.classList.remove('node_wrap_show')
                    list_wrap.classList.add('node_wrap_hide')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap.classList.add('active')
                    list_wrap.classList.add('node_wrap_show')
                    list_wrap.classList.remove('node_wrap_hide')
                    return
                }
            }
        }
        if (block_wrap1 != null) {
            if (block_wrap1.classList.contains('active1') == false) {
                list_wrap1.classList.add('node_wrap_hide1')
            }
            block_wrap1.onclick = function() {

                let classArray1 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray1.includes('active1')) {
                    // 内容を隠す
                    block_wrap1.classList.remove('active1')
                    list_wrap1.classList.remove('node_wrap_show1')
                    list_wrap1.classList.add('node_wrap_hide1')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap1.classList.add('active1')
                    list_wrap1.classList.add('node_wrap_show1')
                    list_wrap1.classList.remove('node_wrap_hide1')
                    return
                }
            }
        }

        if (block_wrap2 != null) {
            if (block_wrap2.classList.contains('active2') == false) {
                list_wrap2.classList.add('node_wrap_hide2')
            }
            block_wrap2.onclick = function() {

                let classArray2 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray2.includes('active2')) {
                    // 内容を隠す
                    block_wrap2.classList.remove('active2')
                    list_wrap2.classList.remove('node_wrap_show2')
                    list_wrap2.classList.add('node_wrap_hide2')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap2.classList.add('active2')
                    list_wrap2.classList.add('node_wrap_show2')
                    list_wrap2.classList.remove('node_wrap_hide2')
                    return
                }
            }
        }

        if (block_wrap3 != null) {
            if (block_wrap3.classList.contains('active3') == false) {
                list_wrap3.classList.add('node_wrap_hide3')
            }
            block_wrap3.onclick = function() {

                let classArray3 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray3.includes('active3')) {
                    // 内容を隠す
                    block_wrap3.classList.remove('active3')
                    list_wrap3.classList.remove('node_wrap_show3')
                    list_wrap3.classList.add('node_wrap_hide3')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap3.classList.add('active3')
                    list_wrap3.classList.add('node_wrap_show3')
                    list_wrap3.classList.remove('node_wrap_hide3')
                    return
                }
            }
        }

        if (block_wrap4 != null) {
            if (block_wrap4.classList.contains('active4') == false) {
                list_wrap4.classList.add('node_wrap_hide4')
            }
            block_wrap4.onclick = function() {

                let classArray4 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray4.includes('active4')) {
                    // 内容を隠す
                    block_wrap4.classList.remove('active4')
                    list_wrap4.classList.remove('node_wrap_show4')
                    list_wrap4.classList.add('node_wrap_hide4')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap4.classList.add('active4')
                    list_wrap4.classList.add('node_wrap_show4')
                    list_wrap4.classList.remove('node_wrap_hide4')
                    return
                }
            }
        }

        if (block_wrap5 != null) {
            if (block_wrap5.classList.contains('active5') == false) {
                list_wrap5.classList.add('node_wrap_hide5')
            }
            block_wrap5.onclick = function() {

                let classArray5 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray5.includes('active5')) {
                    // 内容を隠す
                    block_wrap5.classList.remove('active5')
                    list_wrap5.classList.remove('node_wrap_show5')
                    list_wrap5.classList.add('node_wrap_hide5')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap5.classList.add('active5')
                    list_wrap5.classList.add('node_wrap_show5')
                    list_wrap5.classList.remove('node_wrap_hide5')
                    return
                }
            }
        }

        if (block_wrap6 != null) {
            if (block_wrap6.classList.contains('active6') == false) {
                list_wrap6.classList.add('node_wrap_hide6')
            }
            block_wrap6.onclick = function() {

                let classArray6 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray6.includes('active6')) {
                    // 内容を隠す
                    block_wrap6.classList.remove('active6')
                    list_wrap6.classList.remove('node_wrap_show6')
                    list_wrap6.classList.add('node_wrap_hide6')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap6.classList.add('active6')
                    list_wrap6.classList.add('node_wrap_show6')
                    list_wrap6.classList.remove('node_wrap_hide6')
                    return
                }
            }
        }
        if (block_wrap7 != null) {
            if (block_wrap7.classList.contains('active7') == false) {
                list_wrap7.classList.add('node_wrap_hide7')
            }
            block_wrap7.onclick = function() {

                let classArray7 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray7.includes('active7')) {
                    // 内容を隠す
                    block_wrap7.classList.remove('active7')
                    list_wrap7.classList.remove('node_wrap_show7')
                    list_wrap7.classList.add('node_wrap_hide7')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap7.classList.add('active7')
                    list_wrap7.classList.add('node_wrap_show7')
                    list_wrap7.classList.remove('node_wrap_hide7')
                    return
                }
            }
        }

        if (block_wrap8 != null) {
            if (block_wrap8.classList.contains('active8') == false) {
                list_wrap8.classList.add('node_wrap_hide8')
            }
            block_wrap8.onclick = function() {

                let classArray8 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray8.includes('active8')) {
                    // 内容を隠す
                    block_wrap8.classList.remove('active8')
                    list_wrap8.classList.remove('node_wrap_show8')
                    list_wrap8.classList.add('node_wrap_hide8')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap8.classList.add('active8')
                    list_wrap8.classList.add('node_wrap_show8')
                    list_wrap8.classList.remove('node_wrap_hide8')
                    return
                }
            }
        }

        if (block_wrap9 != null) {
            if (block_wrap9.classList.contains('active9') == false) {
                list_wrap9.classList.add('node_wrap_hide9')
            }
            block_wrap9.onclick = function() {

                let classArray9 = this.className.split(/\s+/)

                // 内容の隠れと表示	
                if (classArray9.includes('active9')) {
                    // 内容を隠す
                    block_wrap9.classList.remove('active9')
                    list_wrap9.classList.remove('node_wrap_show9')
                    list_wrap9.classList.add('node_wrap_hide9')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap9.classList.add('active9')
                    list_wrap9.classList.add('node_wrap_show9')
                    list_wrap9.classList.remove('node_wrap_hide9')
                    return
                }
            }
        }
    } else {
        if (block_wrap != null) {
            if (block_wrap.classList.contains('active') == false) {
                list_wrap.classList.add('node_wrap_hide')
                text.classList.remove('border-text-controll')
            }
            block_wrap.onclick = function() {

                let classArray = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray.includes('active')) {
                    // 内容を隠す
                    block_wrap.classList.remove('active')
                    list_wrap.classList.remove('node_wrap_show')
                    list_wrap.classList.add('node_wrap_hide')
                    text.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap.classList.add('active')
                    list_wrap.classList.add('node_wrap_show')
                    list_wrap.classList.remove('node_wrap_hide')
                    text.classList.add('border-text-controll')
                    return
                }
            }
        }
        if (block_wrap1 != null) {
            if (block_wrap1.classList.contains('active1') == false) {
                list_wrap1.classList.add('node_wrap_hide1')
                text1.classList.remove('border-text-controll')
            }
            block_wrap1.onclick = function() {

                let classArray1 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray1.includes('active1')) {
                    // 内容を隠す
                    block_wrap1.classList.remove('active1')
                    list_wrap1.classList.remove('node_wrap_show1')
                    list_wrap1.classList.add('node_wrap_hide1')
                    text1.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap1.classList.add('active1')
                    list_wrap1.classList.add('node_wrap_show1')
                    list_wrap1.classList.remove('node_wrap_hide1')
                    text1.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap2 != null) {
            if (block_wrap2.classList.contains('active2') == false) {
                list_wrap2.classList.add('node_wrap_hide2')
                text2.classList.remove('border-text-controll')
            }
            block_wrap2.onclick = function() {

                let classArray2 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray2.includes('active2')) {
                    // 内容を隠す
                    block_wrap2.classList.remove('active2')
                    list_wrap2.classList.remove('node_wrap_show2')
                    list_wrap2.classList.add('node_wrap_hide2')
                    text2.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap2.classList.add('active2')
                    list_wrap2.classList.add('node_wrap_show2')
                    list_wrap2.classList.remove('node_wrap_hide2')
                    text2.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap3 != null) {
            if (block_wrap3.classList.contains('active3') == false) {
                list_wrap3.classList.add('node_wrap_hide3')
                text3.classList.remove('border-text-controll')
            }
            block_wrap3.onclick = function() {

                let classArray3 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray3.includes('active3')) {
                    // 内容を隠す
                    block_wrap3.classList.remove('active3')
                    list_wrap3.classList.remove('node_wrap_show3')
                    list_wrap3.classList.add('node_wrap_hide3')
                    text3.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap3.classList.add('active3')
                    list_wrap3.classList.add('node_wrap_show3')
                    list_wrap3.classList.remove('node_wrap_hide3')
                    text3.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap4 != null) {
            if (block_wrap4.classList.contains('active4') == false) {
                list_wrap4.classList.add('node_wrap_hide4')
                text4.classList.remove('border-text-controll')
            }
            block_wrap4.onclick = function() {

                let classArray4 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray4.includes('active4')) {
                    // 内容を隠す
                    block_wrap4.classList.remove('active4')
                    list_wrap4.classList.remove('node_wrap_show4')
                    list_wrap4.classList.add('node_wrap_hide4')
                    text4.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap4.classList.add('active4')
                    list_wrap4.classList.add('node_wrap_show4')
                    list_wrap4.classList.remove('node_wrap_hide4')
                    text4.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap5 != null) {
            if (block_wrap5.classList.contains('active5') == false) {
                list_wrap5.classList.add('node_wrap_hide5')
                text5.classList.remove('border-text-controll')
            }
            block_wrap5.onclick = function() {

                let classArray5 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray5.includes('active5')) {
                    // 内容を隠す
                    block_wrap5.classList.remove('active5')
                    list_wrap5.classList.remove('node_wrap_show5')
                    list_wrap5.classList.add('node_wrap_hide5')
                    text5.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap5.classList.add('active5')
                    list_wrap5.classList.add('node_wrap_show5')
                    list_wrap5.classList.remove('node_wrap_hide5')
                    text5.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap6 != null) {
            if (block_wrap6.classList.contains('active6') == false) {
                list_wrap6.classList.add('node_wrap_hide6')
                text6.classList.remove('border-text-controll')
            }
            block_wrap6.onclick = function() {

                let classArray6 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray6.includes('active6')) {
                    // 内容を隠す
                    block_wrap6.classList.remove('active6')
                    list_wrap6.classList.remove('node_wrap_show6')
                    list_wrap6.classList.add('node_wrap_hide6')
                    text6.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap6.classList.add('active6')
                    list_wrap6.classList.add('node_wrap_show6')
                    list_wrap6.classList.remove('node_wrap_hide6')
                    text6.classList.add('border-text-controll')
                    return
                }
            }
        }
        if (block_wrap7 != null) {
            if (block_wrap7.classList.contains('active7') == false) {
                list_wrap7.classList.add('node_wrap_hide7')
                text7.classList.remove('border-text-controll')
            }
            block_wrap7.onclick = function() {

                let classArray7 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray7.includes('active7')) {
                    // 内容を隠す
                    block_wrap7.classList.remove('active7')
                    list_wrap7.classList.remove('node_wrap_show7')
                    list_wrap7.classList.add('node_wrap_hide7')
                    text7.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap7.classList.add('active7')
                    list_wrap7.classList.add('node_wrap_show7')
                    list_wrap7.classList.remove('node_wrap_hide7')
                    text7.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap8 != null) {
            if (block_wrap8.classList.contains('active8') == false) {
                list_wrap8.classList.add('node_wrap_hide8')
                text8.classList.remove('border-text-controll')
            }
            block_wrap8.onclick = function() {

                let classArray8 = this.className.split(/\s+/)

                // 内容の隠れと表示
                if (classArray8.includes('active8')) {
                    // 内容を隠す
                    block_wrap8.classList.remove('active8')
                    list_wrap8.classList.remove('node_wrap_show8')
                    list_wrap8.classList.add('node_wrap_hide8')
                    text8.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap8.classList.add('active8')
                    list_wrap8.classList.add('node_wrap_show8')
                    list_wrap8.classList.remove('node_wrap_hide8')
                    text8.classList.add('border-text-controll')
                    return
                }
            }
        }

        if (block_wrap9 != null) {
            if (block_wrap9.classList.contains('active9') == false) {
                list_wrap9.classList.add('node_wrap_hide9')
                text9.classList.remove('border-text-controll')
            }
            block_wrap9.onclick = function() {

                let classArray9 = this.className.split(/\s+/)

                // 内容の隠れと表示	
                if (classArray9.includes('active9')) {
                    // 内容を隠す
                    block_wrap9.classList.remove('active9')
                    list_wrap9.classList.remove('node_wrap_show9')
                    list_wrap9.classList.add('node_wrap_hide9')
                    text9.classList.remove('border-text-controll')
                    console.log(this.className.split(/\s+/))
                    return
                } else {
                    // 内容を表示する
                    block_wrap9.classList.add('active9')
                    list_wrap9.classList.add('node_wrap_show9')
                    list_wrap9.classList.remove('node_wrap_hide9')
                    text9.classList.add('border-text-controll')
                    return
                }
            }
        }
    }
}
//----------end block_wrap union----------//

window.addEventListener('resize', () => {
    // 宽度变化的处理逻辑
    setHeightWidth();
    creatCircle();
    console.log("update circle");
});
</script>