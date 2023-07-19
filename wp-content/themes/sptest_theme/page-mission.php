<?php get_header(); ?>
    <main>
        <div class="l-visualPage">
            <div class="container-wd">
                <div class="l-visualPage--main">
                    <h1 class="l-visualPage--tlt">
                        <p class="_en">MISSION</p>
                        <span class="_ja">ストラーダについて</span>
                    </h1>
                </div>
            </div>
            <div class="container c-breadcrumb_wr">
                <?php breadcrumb(); ?>
            </div>
        </div>
        <div class="container">
            <div class="page-nav pdt50">
                <ul class="tabanchor">
                    <li>
                        <a href="javascript:void(0)" id="defaultOpen" class="tabanchor_link" data-tab="philosophy" onclick="openTab(event, 'philosophy')">企業理念</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="tabanchor_link" data-tab="greeting" onclick="openTab(event, 'greeting')">代表挨拶</a>
                    </li>
                </ul>
            </div>
            <div class="p-about--sec01 pdt50">
                <div class="section-main tabcontent" id="philosophy">
                    <div class="page-tlt">
                        <p class="page-tlt--sub">
                            PHILOSOPHY
                        </p>
                        <h2 class="page-tlt--txt">
                            企業理念
                        </h2>
                    </div>
                    <div class="page-content">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.png">
                        </figure>
                        <p class="c-txt">
                            「ストラーダ」とは、イタリア語で「道」という意味があります。 お客様と共に歩む長い道を歩み続けられるような、税理士法人にしたいという思いを込めて、 「ストラーダ税理士法人」として、2015年に誕生致しました 。 税理士業務の特徴は、一時的なサービスではなく、企業が誕生し、企業が発展し続けるために、 一貫した支援です。 そのため、私たちは過度な節税ではなく、企業が存続するためのアドバイスをさせて頂きます。
                        </p>
                    </div>
                </div>
                <div class="section-main tabcontent" id="greeting">
                    <div class="page-tlt">
                        <p class="page-tlt--sub">
                            GREETING
                        </p>
                        <h2 class="page-tlt--txt">
                            代表挨拶
                        </h2>
                    </div>
                    <div class="page-content">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mission_img02.png">
                        </figure>
                        <p class="c-txt">
                            お客様と共に同じ道を歩く<br/>
                            <br/>
                            「ストラーダ」とは、イタリア語で「道」という意味があります。<br/>
                            お客様と歩む長い道をともに歩み続けられるような、<br/>
                            税理士法人にしたいという意味を込めて、「ストラーダ税理士法人」と名付けました。<br/>
                            <br/>
                            税理士の特徴は、一時的なサービスではなく、企業が誕生し、<br/>
                            企業が発展し続けるために、共に企業を成長させていく、<br/>
                            生涯付き合える、パートナーとしての性質を有しています。<br/>
                            企業の成長が、日本社会に価値を与え、幣法人のクライアントが少しでも<br/>
                            日本社会に価値を与える手助けすることが、私達の使命です。<br/>
                            <br/>
                            そのため、長期に渡って企業の価値を提供できるように、自己研鑽に励み、<br/>
                            税務的面はもちろん、他の面においても価値を提供できるように努めてまいります。<br/>
                            また、企業に価値を提供するスタッフが長期に渡って働けるような、社内環境を整え、新しいことに挑戦し続ける事務所経営を行います。<br/>
                            <br/>
                            ストラーダ税理士法人<br/>
                            代表社員　山田　直輝
                        </p>
                    </div>
                </div>
            </div>
            <div class="p-about--sec02 pdt50">
                <div class="content-link">
                    <div class="_items">
                        <a href="">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                所属弁護士
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                所属弁護士
                            </h3>
                        </a>
                    </div>
                    <div class="_items">
                        <a href="">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nophoto.png">
                            </figure>
                            <h3>
                                <span>MEMBER</span>
                                所属弁護士
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
