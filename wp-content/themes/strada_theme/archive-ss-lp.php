<?php
session_start();
$_SESSION['url_type']="ss";
get_header("sslp");
$_SESSION['page_type']="service";
$_SESSION["CAT_NAME"] = "";
$_SESSION["CAT_SLUG"] = "";
/**
* Template Name: Archive Sz lp
*/
?>
<!-- .l-main | メインコンテンツ -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_min.css" />
<main>
    <div id="page_content" class="smooth-scroll page_content" data-scroll-container="">

        <div class="c-breakcrumds">
            <div class="l-container">
                <?php if (function_exists('bcn_display')) { bcn_display(); }?>
            </div>
        </div>
        <section id="top__mv" class="top__mv section__full__height" data-scroll-section=""
            data-scroll-section-id="section0" data-scroll-section-inview="">
            <!-- end c-breakcrumds -->
            <div class="top__mv__wrap">
                <div class="top__mv__image">
                    <img src="<?php echo home_url('wp-content/uploads/2023/09/mv-01.jpg')?>" alt="ストラーダ社会保険労務士法人"
                        class="top__mv__image__item">
                </div>
            </div>

            <div class="top__mv__caption__wrap">
                <h2 class="top__mv__caption">
                    <span class="caption__text__wrap">
                        <span class="caption__text caption-01">
                            <span class="caption__text__inner">あなたは、</span>
                        </span>
                    </span>
                    <span class="caption__text__wrap">
                        <span class="caption__text caption-02">
                            <span class="caption__text__inner">障害年金をもらえる</span>
                        </span>
                    </span>
                    <span class="caption__text__wrap">
                        <span class="caption__text caption-03">
                            <span class="caption__text__inner">かもしれません</span>
                        </span>
                    </span>
                </h2>
            </div>

            <div class="top__mv__note">
                <div class="top__mv__note__image mv__note__image-01">
                    <img src="<?php echo home_url('wp-content/uploads/2023/09/p-01.svg')?>" alt="ストラーダ社会保険労務士法人"
                        class="top__mv__note__image">
                </div>

                <div class="top__mv__note__image mv__note__image-02">
                    <img src="<?php echo home_url('wp-content/uploads/2023/09/p-02.svg')?>" alt="ストラーダ社会保険労務士法人"
                        class="top__mv__note__image">
                </div>

                <div class="top__mv__note__image mv__note__image-03">
                    <img src="<?php echo home_url('wp-content/uploads/2023/09/p-03.svg')?>" alt="ストラーダ社会保険労務士法人"
                        class="top__mv__note__image">
                </div>
            </div>

        </section>
        <!-- MV SECTION-->

        <!-- CONTACT SECTION-->
        <section id="contact__section" class="section__wrapper" data-scroll-section="" data-scroll-section-id="section1"
            data-scroll-section-inview="">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-4 d-flex p-0">
                        <div class="contact__wrap contact__phone">
                            <a href="tel:03-6231-1103" class="contact__link">
                                <div class="contact__content">
                                    <div class="contact__content__btn">
                                        <div class="content__btn__inner">
                                            <span class="content__btn__icon icon-telephone-fill"></span>
                                            <span class="content__btn__text">03-6231-1103</span>
                                        </div>
                                    </div>
                                    <div class="content__btn__note">
                                        <span class="content__btn__note__text">受付時間:平日9:00-17:00</span>
                                    </div>
                                </div>
                            </a>
                            <div class="contact__wrap__bkg">
                                <div class="contact__wrap__bkg__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/phone.webp')?>" alt=""
                                        class="bkg__image__item">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex p-0">
                        <div class="contact__wrap contact__mail">
                            <a href="<?php echo home_url('sr/#Contact'); ?>" class="contact__link">
                                <div class="contact__content">
                                    <div class="contact__content__btn">
                                        <div class="content__btn__inner">
                                            <span class="content__btn__icon icon-envelope-fill"></span>
                                            <span class="content__btn__text">お問い合わせ</span>
                                        </div>
                                    </div>
                                    <div class="content__btn__note">
                                        <span class="content__btn__note__text">お問い合わせフォーム</span>
                                    </div>
                                </div>
                            </a>
                            <div class="contact__wrap__bkg">
                                <div class="contact__wrap__bkg__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/mail.webp')?>" alt=""
                                        class="bkg__image__item">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-flex p-0">
                        <div class="contact__wrap contact__line">
                            <a href="https://works.do/R/ti/p/sr@strada-group" class="contact__link">
                                <div class="contact__content">
                                    <div class="contact__line__img">
                                        <img src="<?php echo home_url('wp-content/uploads/2023/09/line-qr.jpg')?>"
                                            alt="" class="contact__line__img__item">
                                    </div>
                                </div>
                            </a>
                            <div class="contact__wrap__bkg">
                                <div class="contact__wrap__bkg__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/line.jpg')?>" alt=""
                                        class="bkg__image__item">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- END ABOUT SECTION-->

        <!-- SECTION 01-->
        <section class="section__wrapper" data-scroll-section="" data-scroll-section-id="section2">

            <div class="container">

                <div class="d-flex justify-content-center align-items-center">
                    <h2 class="section__note__title">
                        <span class="section__note__text"><span
                                class="section__note__text__item">こんなお悩みありませんか？</span></span>
                    </h2>
                </div>

                <div class="row">

                    <div class="col-md-1"></div>

                    <div class="col-md-10">
                        <img src="<?php echo home_url('wp-content/uploads/2023/09/img-01.jpg')?>" alt="" class="w-100">
                    </div>

                    <div class="col-md-1"></div>

                </div>

                <div class="row">

                    <div class="col-lg-2"></div>

                    <div class="col-lg-8">
                        <div class="bordred-box bordred-box__negative px-2 px-md-7 py-5 py-md-9 mb-5 mb-md-7 is-inview"
                            data-scroll="" data-scroll-speed="2">
                            <ul class="check__list">
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">がんになり、長期の療養が必要になった。</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">うつ病になり、働けなくなってしまった。</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">人工関節を挿入した。</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">人工透析による治療を開始した。</p>
                                </li>
                            </ul>

                            <div class="mt-6">
                                <p>※ 糖尿病インスリン・腎不全なども受けれる場合がある</p>
                            </div>
                        </div>

                        <div class="text-center">
                            <p>障害や疾病で働きたくても働けない、<br>経済的に安定しない方には国から障害年金が受け取れる場合もあります。</p>
                        </div>
                    </div>

                    <div class="col-lg-2"></div>

                </div>



            </div>
        </section>
        <!-- END SECTION 01-->

        <!-- SECTION 02-->
        <section class="section__wrapper section__bkg__light" data-scroll-section="" data-scroll-section-id="section3">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">障害年金とは？</h2>
                </div>

                <div class="row">

                    <div class="col-lg-7 d-flex align-items-center justify-content-center is-inview" data-scroll=""
                        data-scroll-speed="2">

                        <div class="d-block">

                            <div class="mb-7">
                                <p>障害年金とは、ケガや病気などで日常生活や仕事に支障が出ている方に向けた、生活保障として国から支給される公的年金です。</p>
                                <p>ですが自分で手続きをするとなると、どこから進めていいのが、どこに請求したらいいのか、どんな書類が必要なのか分からないことが多いと思います。</p>
                            </div>

                            <h3 class="section__note__title__sub">
                                <span class="section__note__text"><span
                                        class="section__note__text__item">こんな方をサポートいたします。</span></span>
                            </h3>

                            <div class="bordred-box px-2 px-md-3 py-2 py-md-3 mb-3 mb-md-5">
                                <ul class="check__list">
                                    <li class="check__list__item">
                                        <p class="check__list__text check__list__text__big">仕事をしており、自分で動く時間がない人</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="bordred-box px-2 px-md-3 py-2 py-md-3 mb-3 mb-md-5">
                                <ul class="check__list">
                                    <li class="check__list__item">
                                        <p class="check__list__text check__list__text__big">受給できるか判断に迷っている人</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="bordred-box px-2 px-md-3 py-2 py-md-3 mb-3 mb-md-5">
                                <ul class="check__list">
                                    <li class="check__list__item">
                                        <p class="check__list__text check__list__text__big">申請できると認識していない人</p>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>

                    <div class="col-lg-5 d-flex align-items-center justify-content-center">
                        <div class="circle__img__wrap">
                            <img src="<?php echo home_url('wp-content/uploads/2023/09/img-11.jpg')?>" alt=""
                                class="circle__img__item">
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 02-->

        <!-- SECTION 03-->
        <section class="section__wrapper section__bkg__light" data-scroll-section="" data-scroll-section-id="section4">

            <div class="container">

                <div class="section__title__wrap is-inview" data-scroll="" data-scroll-speed="2">
                    <h2 class="section__title">年金の専門家である<br>社会保険労務士が障害年金受給を<br>サポートいたします。</h2>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-center justify-content-center mb-5 mb-md-7">
                        <div class="rounded__img__wrap">
                            <img src="<?php echo home_url('wp-content/uploads/2023/09/img-03.jpeg')?>" alt=""
                                class="rounded__img__item">
                        </div>
                    </div>

                    <div class="col-lg-7 d-flex align-items-center justify-content-center is-inview" data-scroll=""
                        data-scroll-speed="1">

                        <div class="d-block">
                            <h3 class="section__note__title__sub">
                                <span class="section__note__text"><span
                                        class="section__note__text__item">ストラーダ社労士法人にお任せください。</span></span>
                            </h3>

                            <div class="mb-5">
                                <p>ストラーダ社会保険労務士の宿谷です。私は元医療法人勤務の経験があるため、障害を抱える方のご苦労も身近でみてきております。中には障害年金を受給できるとご存じない方もいらっしゃるため、まずは受給可能かどうかご確認いただきたいと思います。障害年金を受給することで、少しでも皆様の生活のご負担を少なくすることができれば幸いです。ストラーダ社労士法人では、年金障害の申請経験が豊富なスタッフが対応いたしますのでまずはお気軽にご相談ください。
                                </p>
                            </div>

                            <div class="mb-7">
                                <p class="section__text__big text-end">宿谷裕樹<br>ストラーダ社会保険労務士法人　代表社員</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 03-->

        <!-- SECTION 03-->
        <section class="section__wrapper section__bkg__light" data-scroll-section="" data-scroll-section-id="section5">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">障害年金について</h2>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <p>年金と聞くと、高齢者の人が受け取るイメージがありますよね。ですが障害年金は、けがや病気によって日常生活や仕事などが制限されるようになった場合に、現役世代の方も含めて受け取ることができる年金です。例えば、長期療養が必要ながん、糖尿病・心疾患やうつ病、統合失調症などの精神疾患により仕事ができなかったり、人工関節の挿入や人工透析治療により普段の生活が維持できない場合などです。障害年金自体、存在があまり知られていないことが多く、制度も分かりづらいことから、自分が受給の対象なのか分からず、本来もらえるはずのものがもらえていない方も少なくないはずです。障害年金は経済的にそして精神的な支えにもなる、非常に役に立つ制度です。障害年金は大きく分けて２つあります。
                        </p>
                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 03-->

        <!-- SECTION 03-->
        <section class="section__wrapper section__bkg__yel" data-scroll-section="" data-scroll-section-id="section6">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">障害年金の種類</h2>
                </div>

                <div class="bordred-box">

                    <div class="tab__wrap">

                        <div class="nav nav-tabs tab__btn__wrap" role="tablist">
                            <div class="nav-item tab__btn" role="presentation">
                                <a href="" class="tab__link active" id="tab-01"
                                    data-bs-toggle="tab" data-bs-target="#tab-01-pane" role="tab"
                                    aria-controls="tab-01-pane" aria-selected="true">
                                    <span>障害基礎年金</span>
                                </a>
                            </div>
                            <div class="nav-item tab__btn" role="presentation">
                                <a href="" class="tab__link" id="tab-02"
                                    data-bs-toggle="tab" data-bs-target="#tab-02-pane" role="tab"
                                    aria-controls="tab-02-pane" aria-selected="false" tabindex="-1">
                                    <span>障害厚生年金</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="tab-content px-2 px-md-7 py-5 py-md-9">

                        <div class="tab-pane fade show active" id="tab-01-pane" role="tabpanel" aria-labelledby="tab-01"
                            tabindex="0">
                            <p class="section__text__big">障害基礎年金とは、初診日に国民年金に加入していた人が対象です。</p>
                            <p class="text_shomei1"><span class="text-orange">※</span> 初診日…けがや病気で初めて病院を受診した日</p>
                            <h3 class="mini__title">
                                <span class="mini__title__text">《具体例》</span>
                            </h3>
                            <ul class="check__list">
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">20歳より前に初診日があった人</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">学生やアルバイト、自営業の人</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">第3号被保険者</p>
                                    <p class="d-block text-orange">（配偶者の扶養に入っていた人）</p>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="tab-02-pane" role="tabpanel" aria-labelledby="tab-02"
                            tabindex="0">
                            <p class="section__text__big">「障害厚生年金」は、初診日に会社の厚生年金に加入していた人が対象です。</p>
                            <p class="text_shomei1">初診日の要件が大切であり、初診日にどの年金制度に加入していたかによって、年金の種類や請求先が変わってきます。</p>
                            <p class="text_shomei1">また、障害年金が支給される条件として「障害の程度」障害等級（1～3級）が定められています。この障害等級は、障害手帳や労働者災害補償保険法に定める障害とは異なります。</p>
                            <h3 class="mini__title">
                                <span class="mini__title__text">《障害年金1級》</span>
                            </h3>
                            <p class="text_shomei1">誰かの介助を受けなければ日常生活を送ることが困難な障害の状態です。</p>
                            <p class="section__text__big">具体的な病状：</p>
                            <ul class="check__list mb-7">
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">視覚障害により両眼の視力が0.03以下の状態</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">
                                        両手のすべての指を欠く状態又はすべての指その機能に著しい障害を有する状態等</p>
                                </li>
                            </ul>
                            <h3 class="mini__title">
                                <span class="mini__title__text">《障害年金2級》</span>
                            </h3>
                            <p class="text_shomei1">必ずしも誰かに介助してもらう必要はなくても、日常生活は極めて難しい状態のこと。</p>
                            <p class="text_shomei1">働いて収入を得ることができないほどの障害です。</p>
                            <p class="section__text__big">具体的な病状：</p>
                            <ul class="check__list mb-7">
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">
                                        人工透析治療を行っている状態精神疾患により、日常生活に著しい制限を受ける状態</p>
                                </li>
                            </ul>

                            <h3 class="mini__title">
                                <span class="mini__title__text">《障害年金3級》</span>
                            </h3>
                            <p class="text_shomei1">働けないなど著しい制限を受ける。または、働くことに著しい制限を加えることを必要とするような状態です。</p>
                            <p class="text_shomei1"><span class="text-orange">※ 初診日…けがや病気で初めて病院を受診した日</span></p>
                            <p class="section__text__big">具体的な病状：</p>
                            <ul class="check__list mb-7">
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">
                                        人工関節の挿入やストーマ（人工肛門や人工膀胱）の手術をしたペースメーカーを植え込んだ</p>
                                </li>
                            </ul>

                            <h3 class="mini__title">
                                <span class="mini__title__text">《障害手当金》</span>
                            </h3>
                            <p class="text_shomei1">けがや病気が治ったり、その症状が固定したもので、働く制限を受けるか働くことに制限を加えることを必要とする状態です。</p>
                            <p class="text_shomei1"><span class="text-orange">※ 一時金、厚生年金のみ</span></p>
                            <p class="section__text__big">具体的な病状：</p>
                            <ul class="check__list mb-7">
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">上肢のおや指の用を廃したもの</p>
                                </li>
                                <li class="check__list__item">
                                    <p class="check__list__text check__list__text__big">上肢の2指以上を失ったもの</p>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 03-->

        <!-- SECTION 03-->
        <section class="section__wrapper" data-scroll-section="" data-scroll-section-id="section7">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">障害年金の対象者</h2>
                </div>

                <div class="row">

                    <div class="col-md-4 mb-5 mb-md-7 is-inview" data-scroll="" data-scroll-speed="2">
                        <div class="card__wrap">
                            <div class="card_content">
                                <div class="card__title">
                                    <h3 class="card__title__text">内部障害</h3>
                                </div>
                                <div class="card__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/img-04.jpg')?>" alt=""
                                        class="card__image__item">
                                </div>
                                <div class="card__text__wrap">
                                    <p class="card__text">がん、糖尿病、呼吸器疾患、心疾患、腎疾患、肝疾患、血液・造血器疾患など</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5 mb-md-7 is-inview" data-scroll="" data-scroll-speed="1">
                        <div class="card__wrap">
                            <div class="card_content">
                                <div class="card__title">
                                    <h3 class="card__title__text">外部障害</h3>
                                </div>
                                <div class="card__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/img-05.jpg')?>" alt=""
                                        class="card__image__item">
                                </div>
                                <div class="card__text__wrap">
                                    <p class="card__text">肢体（手足の切断、人工関節の挿入など）、聴覚、眼などの障害</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-5 mb-md-7 is-inview" data-scroll="" data-scroll-speed="2">
                        <div class="card__wrap">
                            <div class="card_content">
                                <div class="card__title">
                                    <h3 class="card__title__text">精神障害</h3>
                                </div>
                                <div class="card__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/img-06.jpg')?>" alt=""
                                        class="card__image__item">
                                </div>
                                <div class="card__text__wrap">
                                    <p class="card__text">統合失調症、うつ病、認知障害、てんかん、知的障害、発達障害など</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 03-->

        <!-- SECTION 02-->
        <section class="section__wrapper section__bkg__light" data-scroll-section="" data-scroll-section-id="section8">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">具体的な受給事例</h2>
                </div>

                <div class="l">

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9 mb-4 case-box is-inview" data-scroll=""
                        data-scroll-speed="2">
                        <h3 class="mini__title">
                            <span class="mini__title__text text-orange">ケース1</span>
                            <span class="text-red ms-4">400万円受給</span>
                        </h3>
                        <p class="text_shomei1">20歳前に事故で片腕が動かない状態で結婚、出産。</p>
                        <p class="text_shomei1">障害者手帳は持っていたが、住所も変わっていたため初診日の確認がとれず、申請ができるか相談。</p>
                        <p class="text_shomei1">当時の住所地に障害者手帳発行の時の診断書を請求。15年以上前のものだったが当時かかった病院に資料があり、20歳前の日付だったが固定として診断書を作成してもらい5年の遡及して認定。</p>
                    </div>

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9 mb-4 case-box is-inview" data-scroll=""
                        data-scroll-speed="2">
                        <h3 class="mini__title">
                            <span class="mini__title__text text-orange">ケース2</span>
                            <span class="text-red ms-4">年間78万円受給</span>
                        </h3>
                        <p class="text_shomei1">ずっと通っていた精神科が院長急死のため閉院。初診日の確認が取れないと相談。保健所に相談連絡して病院の資料を取り寄せる形で初診日を確認し、2級を受給。</p>
                    </div>

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9 mb-4 case-box is-inview" data-scroll=""
                        data-scroll-speed="2">
                        <h3 class="mini__title">
                            <span class="mini__title__text text-orange">ケース3</span>
                            <span class="text-red ms-4">450万円受給</span>
                        </h3>
                        <p class="text_shomei1">がんで闘病の為、自分では申請できず相談。初診日確認の取り寄せから認定日、現在と診断書を作成してもらい遡及請求。</p>
                    </div>

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9 mb-4 case-box is-inview" data-scroll=""
                        data-scroll-speed="2">
                        <h3 class="mini__title">
                            <span class="mini__title__text text-orange">ケース4</span>
                            <span class="text-red ms-4">年間150万円受給</span>
                        </h3>
                        <p class="text_shomei1">20歳前に一度精神科にかかったが、体調が良くなり5年以上通院していなかったが、働いて厚生年金に加入してから再度精神科にかかるようになり相談。</p>
                        <p class="text_shomei1">厚生年金で請求し、20歳前の精神科は完治とみられ厚生年金2級を受給。</p>
                    </div>

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9 mb-4 case-box is-inview" data-scroll=""
                        data-scroll-speed="2">
                        <h3 class="mini__title">
                            <span class="mini__title__text text-orange">ケース5</span>
                            <span class="text-red ms-4">年間120万円受給</span>
                        </h3>
                        <p class="text_shomei1">糖尿病で透析を開始したが初診の病院が20年以上たっていて資料がないため相談。今まで受診したことのある病院を全て確認して、残っている資料で初診日を確認し、2級を受給。</p>
                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 02-->

        <!-- SECTION 02-->
        <section class="section__wrapper section__bkg__yel" data-scroll-section="" data-scroll-section-id="section9">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">ご相談の流れ</h2>
                </div>

                <div class="step__block">

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9">
                        <h3 class="mini__title">
                            <span class="mini__title__text text-orange">ご相談</span>
                        </h3>
                        <p class="text_shomei1">お気軽にお問い合わせください。その際、障害年金を受給できるかどうかのおおよその判断やスムーズなお手続きのために、 お名前や傷病名、現在の症状や年金加入期間、初診日などをお聞きします。
                        </p>
                    </div>

                </div>

                <div class="step__block">

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9">
                        <div class="card__title mb-9">
                            <h3 class="card__title__text">1ヶ月程度</h3>
                        </div>

                        <div class="mb-9">
                            <h4 class="mini__title">
                                <span class="mini__title__text text-orange">ご相談</span>
                            </h4>
                            <p class="text_shomei1">お気軽にお問い合わせください。その際、障害年金を受給できるかどうかのおおよその判断やスムーズなお手続きのために、
                                お名前や傷病名、現在の症状や年金加入期間、初診日などをお聞きします。</p>
                        </div>

                        <div class="mb-9">
                            <h4 class="mini__title">
                                <span class="mini__title__text text-orange">申請書の作成</span>
                            </h4>
                            <p class="text_shomei1">初診日や保険料納付要件などを確認し、申請書を作成します。 初診日の特定は、障害年金の請求手続きをする上でとても重要な項目です。
                                この初診日を基に「保険料納付要件」や「障害認定日要件」が判定されます。 また受給する年金の種類や、金額にも影響してきます。
                                また、年金保険料を一定期間納めていなければ障害年金の請求は出来ません。 納付要件は初診日の前日時点となります。</p>
                        </div>

                        <div class="mb-9">
                            <h4 class="mini__title">
                                <span class="mini__title__text text-orange">申請書類提出</span>
                            </h4>
                            <p class="text_shomei1">取得した診断書、病歴・就労状況等申立書や裁定請求書等など必要な書類をご準備いただき、年金事務所へ提出させていただきます。</p>
                        </div>

                    </div>

                </div>

                <div class="step__block">

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9">
                        <div class="card__title mb-9">
                            <h3 class="card__title__text">ご契約から3ヶ月程度</h3>
                        </div>

                        <div class="mb-9">
                            <h4 class="mini__title">
                                <span class="mini__title__text text-orange">受給決定</span>
                            </h4>
                            <p class="text_shomei1">取得した診断書、病歴・就労状況等申立書や裁定請求書等など必要な書類をご準備いただき、年金事務所へ提出させていただきます。</p>
                        </div>

                    </div>

                </div>

                <div class="step__block">

                    <div class="bordred-box px-2 px-md-7 py-5 py-md-9">
                        <div class="card__title mb-9">
                            <h3 class="card__title__text">受給決定後翌月</h3>
                        </div>

                        <div class="mb-9">
                            <h4 class="mini__title">
                                <span class="mini__title__text text-orange">障害年金受け取り</span>
                            </h4>
                            <p class="text_shomei1">ご指定の口座に障害年金が振り込まれます。</p>
                        </div>

                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 02-->

        <!-- SECTION 02-->
        <section class="section__wrapper section__bkg__light" data-scroll-section="" data-scroll-section-id="section10">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">担当者からのメッセージ</h2>
                </div>

                <div class="row">

                    <div class="col-lg-7 d-flex align-items-center justify-content-center">

                        <div class="d-block">

                            <div class="mb-7 is-inview" data-scroll="" data-scroll-speed="2">
                                <p class="text_shomei1">過去に障害年金が不支給になっていても再請求が可能です。
                                    障害年金は、請求書の書き方一つで不支給となったり、もらえる受給額が大きく変わったりするケースが多くあります。そこで、私たち専門家にご相談いただければ、障害年金についてのアドバイスも行わせていただきます。是非一度、ご相談ください。
                                </p>
                            </div>

                        </div>


                    </div>

                    <div class="col-lg-5 d-flex align-items-center justify-content-center">
                        <div class="circle__img__wrap">
                            <img src="<?php echo home_url('wp-content/uploads/2023/09/img-07.jpg')?>" alt=""
                                class="circle__img__item">
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 02-->

        <!-- SECTION 03-->
        <section class="section__wrapper" data-scroll-section="" data-scroll-section-id="section11">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">報酬体系</h2>
                </div>

                <ul class="check__list">
                    <li class="check__list__item">
                        <p class="check__list__text check__list__text__big">着手金30,000円</p>
                        <p class="text_shomei1">※ご契約書を締結時に電子決済でお支払いをいただいております。 <span class="d-block">対応クレジットカード：<span
                                    class="text-orange">JCB, MasterCard, VISA, AMERICAN EXPRESS, Diners Club
                                    INTERNATIONAL</span></span></p>
                    </li>
                    <li class="check__list__item">
                        <p class="check__list__text check__list__text__big">成功報酬年金額の2カ月分（着手金分は控除）</p>
                    </li>
                    <li class="check__list__item">
                        <p class="check__list__text check__list__text__big">遡及した分は10%</p>
                    </li>
                </ul>

            </div>

        </section>
        <!-- END SECTION 03-->

        <!-- SECTION 02-->
        <section class="section__wrapper section__bkg__yel" data-scroll-section="" data-scroll-section-id="section12">

            <div class="container">

                <div class="section__title__wrap">
                    <h2 class="section__title">Q&amp;A</h2>
                </div>

                <div id="faq__section" class="accordion faq__wrap">

                    <div class="faq__item px-4 px-md-5 py-4 py-md-5 mb-3 mb-md-5" data-bs-toggle="collapse"
                        data-bs-target="#faq-01" aria-expanded="false" aria-controls="faq-01">
                        <div class="q__accordion">
                            <span class="q__label">Q</span>
                            <h3 class="faq__title">障害者手帳を持っているので申請はできるか?</h3>
                        </div>
                        <div id="faq-01" class="a__accordion collapse" data-bs-parent="#faq__section">
                            <div class="a__accordion__inner">
                                <p class="faq__text mb-0">障害者手帳の有無は障害年金の申請には関係はありません。</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq__item px-4 px-md-5 py-4 py-md-5 mb-3 mb-md-5" data-bs-toggle="collapse"
                        data-bs-target="#faq-02" aria-expanded="false" aria-controls="faq-02">
                        <div class="q__accordion">
                            <span class="q__label">Q</span>
                            <h3 class="faq__title">納付要件の見方がわからない。</h3>
                        </div>
                        <div id="faq-02" class="a__accordion collapse" data-bs-parent="#faq__section">
                            <div class="a__accordion__inner">
                                <p class="faq__text mb-0">
                                    初診日の前日に、初診日がある月の前々月までの被保険者期間で、国民年金の保険料納付済期間（厚生年金保険の被保険者期間、共済組合の組合員期間を含む）と保険料免除期間をあわせた期間が3分の2以上あること。
                                </p>
                                <p class="faq__text mb-0">
                                    ただし、初診日が令和8年4月1日前にあるときは、初診日において65歳未満であれば、初診日の前日において、初診日がある月の前々月までの直近1年間に保険料の未納がなければよいことになっています。
                                </p>
                                <p class="faq__text mb-0">
                                    また、20歳前の年金制度に加入していない期間に初診日がある場合は、納付要件は不要です。詳しくはご相談の上、要件を満たしているか判断させていただきます。</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq__item px-4 px-md-5 py-4 py-md-5 mb-3 mb-md-5" data-bs-toggle="collapse"
                        data-bs-target="#faq-03" aria-expanded="false" aria-controls="faq-03">
                        <div class="q__accordion">
                            <span class="q__label">Q</span>
                            <h3 class="faq__title">初診がどこだかわからない。</h3>
                        </div>
                        <div id="faq-03" class="a__accordion collapse" data-bs-parent="#faq__section">
                            <div class="a__accordion__inner">
                                <p class="faq__text mb-0">
                                    長期との闘病が続くと最初の病院がどこなのかわからなくなります。弊社ではお客様の話をじっくり伺い、どこなのか一緒に特定していきます。</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq__item px-4 px-md-5 py-4 py-md-5 mb-3 mb-md-5" data-bs-toggle="collapse"
                        data-bs-target="#faq-04" aria-expanded="false" aria-controls="faq-04">
                        <div class="q__accordion">
                            <span class="q__label">Q</span>
                            <h3 class="faq__title">自分の病気は申請できるのかわからない。</h3>
                        </div>
                        <div id="faq-04" class="a__accordion collapse" data-bs-parent="#faq__section">
                            <div class="a__accordion__inner">
                                <p class="faq__text mb-0">いろんな症例を扱ってきたスタッフがお客様の病状や病名を聞きご相談させていただきます。</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- END SECTION 02-->

        <!-- CONTACT SECTION-->
        <section id="contact__footer" data-scroll-section="" data-scroll-section-id="section13">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-4 d-flex p-0">
                        <div class="contact__wrap contact__phone">
                            <a href="tel:03-6231-1103" class="contact__link">
                                <div class="contact__content">
                                    <div class="contact__content__btn">
                                        <div class="content__btn__inner">
                                            <span class="content__btn__icon icon-telephone-fill"></span>
                                            <span class="content__btn__text">03-6231-1103</span>
                                        </div>
                                    </div>
                                    <div class="content__btn__note">
                                        <span class="content__btn__note__text">受付時間:平日9:00-17:00</span>
                                    </div>
                                </div>
                            </a>
                            <div class="contact__wrap__bkg">
                                <div class="contact__wrap__bkg__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/phone.webp')?>" alt=""
                                        class="bkg__image__item">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex p-0">
                        <div class="contact__wrap contact__mail">
                            <a href="<?php echo home_url('sr/#Contact'); ?>" class="contact__link">
                                <div class="contact__content">
                                    <div class="contact__content__btn">
                                        <div class="content__btn__inner">
                                            <span class="content__btn__icon icon-envelope-fill"></span>
                                            <span class="content__btn__text">お問い合わせ</span>
                                        </div>
                                    </div>
                                    <div class="content__btn__note">
                                        <span class="content__btn__note__text">お問い合わせフォーム</span>
                                    </div>
                                </div>
                            </a>
                            <div class="contact__wrap__bkg">
                                <div class="contact__wrap__bkg__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/mail.webp')?>" alt=""
                                        class="bkg__image__item">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex p-0">
                        <div class="contact__wrap contact__line">
                            <a href="https://works.do/R/ti/p/sr@strada-group" class="contact__link">
                                <div class="contact__content">
                                    <div class="contact__line__img">
                                        <img src="<?php echo home_url('wp-content/uploads/2023/09/line-qr.jpg')?>"
                                            alt="" class="contact__line__img__item">
                                    </div>
                                </div>
                            </a>
                            <div class="contact__wrap__bkg">
                                <div class="contact__wrap__bkg__image">
                                    <img src="<?php echo home_url('wp-content/uploads/2023/09/line.jpg')?>" alt=""
                                        class="bkg__image__item">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <!-- END CONTACT SECTION-->

        <!-- FOOT SECTION-->
        <section data-scroll-section="" data-scroll-section-id="section14">

            <div class="row">

                <div class="l-footer__foot">
                    <div class="l-container">
                        <ul class="f-social">
                            <li>
                                <a href="https://www.facebook.com/stradatax" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/facebook_icon.png"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://line.me/R/ti/p/%40395gkqmy" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/line_icon.png"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="" class="fx-contact_btn youtube" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/youtube_icon.png"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/strada.tax/?hl=ja" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/ins_icon.png"
                                        alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/stradatax" target="_blank">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/common_sz/twitter_icon.png"
                                        alt="" />
                                </a>
                            </li>
                        </ul>
                        <ul>
                            <li><a href="<?php echo home_url('/sr/privacy-statement'); ?>">個人情報の保護に関するステートメント</a></li>
                            <li><a href="<?php echo home_url('/social-media-policy'); ?>">ソーシャルメディアポリシー</a></li>
                        </ul>
                    </div>
                    <div class="f-copyright">
                        <p>
                            Copyright © Strada Social Insurance Labor Corp. All rights reserved.
                        </p>
                    </div>
                </div>

            </div>

        </section>
        <!-- END FOOT SECTION-->

        <!-- ブランク SECTION-->
        <section data-scroll-section="" data-scroll-section-id="section15">

            <div class="blankArea"></div>

        </section>
        <!-- END ブランク SECTION-->

    </div>
</main>

<!-- jQueryの読み込み -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- polyfill.min.jsの読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/polyfill.min.js"></script>

<!-- script.min.jsの読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.min.js"></script>

<!-- custom.jsの読み込み -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>



</body>

</html>