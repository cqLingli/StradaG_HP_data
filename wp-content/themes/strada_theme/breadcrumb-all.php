<?php
$newsurl = get_post_type_archive_link('news');

$url1=str_replace("/news", "", $newsurl);
$text1="TOP";
$url2="";
$text2="";
$url3="";
$text3="";
$url4="";

$breadcrumbType = "";

session_start();
//$url_type = $_SESSION['url_type'];
$url_type = get_query_var('headername');
$thisurl = home_url(add_query_arg(array()));


if($url_type==="sz"){
    if(strpos($thisurl,'news')){
        $url2=$url1."tax";
        $text2="税理士法人トップ";
        $url3=$url1."tax/taxnewslist";
        $text3="税理士法人ニュース";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'service')){
        if(is_tax()){
            $url2=$url1."tax";
            $text2="税理士法人トップ";
            $url3=$url1."tax/taxservicelist";
            $text3="税理士法人サービス";
            $term = get_queried_object();
            $text4="事業内容:".$term->name;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."tax";
            $text2="税理士法人トップ";
            $url3=$url1."tax/taxservicelist";
            $text3="税理士法人サービス";
            $terms = get_the_terms(get_the_id(),'taxonomy_service');
            $url4=$url1."service/".$terms[0]->slug;
            $text4="事業内容:".$terms[0]->name;
            $text5=get_the_title();
            $breadcrumbType="5";
        }
    }elseif(strpos($thisurl,'voice')){
        $url2=$url1."tax";
        $text2="税理士法人トップ";
        $url3=$url1."tax/taxvoicelist";
        $text3="税理士法人お客様の声";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'columns')){
        if(is_archive()){
            $url2=$url1."tax";
            $text2="税理士法人トップ";
            $url3=$url1."tax/taxcolumn1";
            $text3="税理士法人お役立ち情報";
            $category = get_the_category();
            $text4=$_SESSION["CAT_NAME"] ;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."tax";
            $text2="税理士法人トップ";
            $url3=$url1."tax/taxcolumn1";
            $text3="税理士法人お役立ち情報";
            
            if($_SESSION["CAT_NAME"]){
                $url4=$url1."columns/category/".$_SESSION["CAT_SLUG"];
                $text4=$_SESSION["CAT_NAME"] ;
            }else{
                $category = get_the_category();
                $url4=$url1."columns/category/".$category[0]->slug;
                $text4=$category[0]->cat_name;
            }
            

            $text5=get_the_title();
            $breadcrumbType="5";
        }
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."tax";
        $text2="税理士法人トップ";
        $url3=$url1."tax/taxmenber";
        $text3="税理士法人メンバー";
        $text4="メンバー紹介:".get_the_title();
        $breadcrumbType="4";
    }
}elseif ($url_type==="ss"){
    if(strpos($thisurl,'news')){
        $url2=$url1."sr";
        $text2="社労士法人トップ";
        $url3=$url1."sr/srnewslist";
        $text3="社労士法人ニュース";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'service')){
        if(is_tax()){
            $url2=$url1."sr";
            $text2="社労士法人トップ";
            $url3=$url1."sr/srservice";
            $text3="社労士法人サービス";
            $term = get_queried_object();
            $text4="事業内容:".$term->name;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."sr";
            $text2="社労士法人トップ";
            $url3=$url1."sr/srservice";
            $text3="社労士法人サービス";
            $text4="事業内容:".get_the_title();;
            $breadcrumbType="4";
        }
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."sr";
        $text2="社労士法人トップ";
        $url3=$url1."sr/srmenber";
        $text3="社労士法人メンバー";
        $text4="メンバー紹介:".get_the_title();
        $breadcrumbType="4";
    }

}elseif ($url_type==="ch"){
    if(strpos($thisurl,'news')){
        $url2=$url1."chushoukigyouroudou";
        $text2="中小企業労働企画開発協会トップ";
        $url3=$url1."chushoukigyouroudou/chushoukigyouroudounewslist";
        $text3="中小企業労働企画開発協会ニュース";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."chushoukigyouroudou";
        $text2="中小企業労働企画開発協会トップ";
        $url3=$url1."chushoukigyouroudou/chushoukigyouroudoumenber";
        $text3="中小企業労働企画開発協会メンバー";
        $text4="メンバー紹介:".get_the_title();
        $breadcrumbType="4";
    }
}elseif ($url_type==="sg"){
    if(strpos($thisurl,'news')){
        $url2=$url1."admin";
        $text2="行政書士トップ";
        $url3=$url1."admin/adminnewslist";
        $text3="行政書士ニュース";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'service')){
        if(is_tax()){
            $url2=$url1."admin";
            $text2="行政書士トップ";
            $url3=$url1."admin/adminservicelist";
            $text3="行政書士サービス";
            $term = get_queried_object();
            $text4="事業内容:".$term->name;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."admin";
            $text2="行政書士トップ";
            $url3=$url1."admin/adminservicelist";
            $text3="行政書士サービス";
            $terms = get_the_terms(get_the_id(),'taxonomy_servicesg');
            $url4=$url1."servicesg/taxonomy_servicesg/".$terms[0]->slug;
            $text4="事業内容:".$terms[0]->name;
            $text5=get_the_title();
            $breadcrumbType="5";
        }
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."admin";
        $text2="行政書士トップ";
        $url3=$url1."admin/adminmenber";
        $text3="行政書士メンバー";
        $text4="メンバー紹介:".get_the_title();
        $breadcrumbType="4";
    }

}elseif ($url_type==="sb"){
    if(strpos($thisurl,'news')){
        $url2=$url1."bs";
        $text2="ビジネスサポートトップ";
        $url3=$url1."bs/bsnewslist";
        $text3="ビジネスサポートニュース";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'service')){
        if(is_tax()){
            $url2=$url1."bs";
            $text2="ビジネスサポートトップ";
            $url3=$url1."bs/bsservicelist";
            $text3="ビジネスサポートサービス";
            $term = get_queried_object();
            $text4="事業内容:".$term->name;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."bs";
            $text2="ビジネスサポートトップ";
            $url3=$url1."bs/bsservicelist";
            $text3="ビジネスサポートサービス";
            $text4="事業内容:".get_the_title();
            $breadcrumbType="4";
        }
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."bs";
        $text2="ビジネスサポートトップ";
        $url3=$url1."bs/bsmenber";
        $text3="ビジネスサポートメンバー";
        $text4="メンバー紹介:".get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'casestudy')){
        if(is_tax()){
            $url2=$url1."bs";
            $text2="ビジネスサポートトップ";
            $url3=$url1."bs/bscasestudylist";
            $text3="当社事例";
            $term = get_queried_object();
            $text4=$term->name;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."bs";
            $text2="ビジネスサポートトップ";
            $url3=$url1."bs/bscasestudylist";
            $text3="当社事例";
            $terms = get_the_terms(get_the_id(),'casestudy_type');
            $url4=$url1."casestudy/casestudy_type/".$terms[0]->slug;
            $text4=$terms[0]->name;
            $text5=get_the_title();
            $breadcrumbType="5";
        }
    }

}elseif ($url_type==="tr"){
    if(strpos($thisurl,'news')){
        $url2=$url1."taxria";
        $text2="タックスリアルティトップ";
        $url3=$url1."taxria/taxrianewslist";
        $text3="タックスリアルティニュース";
        $text4=get_the_title();
        $breadcrumbType="4";
    }elseif(strpos($thisurl,'service')){
        if(is_tax()){
            $url2=$url1."taxria";
            $text2="タックスリアルティトップ";
            $url3=$url1."taxria/taxriaservicelist";
            $text3="タックスリアルティサービス";
            $term = get_queried_object();
            $text4="事業内容:".$term->name;
            $breadcrumbType="4";
        }elseif(is_single()){
            $url2=$url1."taxria";
            $text2="タックスリアルティトップ";
            $url3=$url1."taxria/taxriaservicelist";
            $text3="タックスリアルティサービス";
            $text4="事業内容:".get_the_title();
            $breadcrumbType="4";
        }
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."taxria";
        $text2="タックスリアルティトップ";
        $url3=$url1."taxria/taxriamenber";
        $text3="タックスリアルティメンバー";
        $text4="メンバー紹介:".get_the_title();
        $breadcrumbType="4";
    }
}else{
    if(strpos($thisurl,'news')){
        $url2=$url1."news";
        $text2="ニュース";
        $text3=get_the_title();
        $breadcrumbType="3";
    }elseif(strpos($thisurl,'service')){
        //作成なし
    }elseif(strpos($thisurl,'columns')){
        //作成なし
    }elseif(strpos($thisurl,'members')){
        $text2="メンバー紹介:".get_the_title();
        $breadcrumbType="2";
    }
}





?>





<?php if($breadcrumbType==="2"){ ?>
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text1 ?>." href="<?php echo $url1 ?>" class="home">
            <span property="name">TOP</span>
        </a>
        <meta property="position" content="1">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <span property="name" class="post post-page current-item"><?php echo $text2 ?></span>
        <meta property="url" content="">
        <meta property="position" content="3">
    </span>
<?php } elseif($breadcrumbType==="3") { ?>

    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text1 ?>." href="<?php echo $url1 ?>" class="home">
            <span property="name">TOP</span>
        </a>
        <meta property="position" content="1">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text2 ?>." href="<?php echo $url2 ?>" class="post post-page">
            <span property="name"><?php echo $text2 ?></span>
        </a>
        <meta property="position" content="2">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <span property="name" class="post post-page current-item"><?php echo $text3 ?></span>
        <meta property="url" content="">
        <meta property="position" content="3">
    </span>
        
<?php } elseif($breadcrumbType==="4") { ?>
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text1 ?>." href="<?php echo $url1 ?>" class="home">
            <span property="name">TOP</span>
        </a>
        <meta property="position" content="1">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text2 ?>." href="<?php echo $url2 ?>" class="post post-page">
            <span property="name"><?php echo $text2 ?></span>
        </a>
        <meta property="position" content="2">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text3 ?>." href="<?php echo $url3 ?>" class="post post-page">
            <span property="name"><?php echo $text3 ?></span>
        </a>
        <meta property="position" content="3">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <span property="name" class="post post-page current-item"><?php echo $text4 ?></span>
        <meta property="url" content="">
        <meta property="position" content="4">
    </span>
<?php } elseif($breadcrumbType==="5") { ?>
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text1 ?>." href="<?php echo $url1 ?>" class="home">
            <span property="name">TOP</span>
        </a>
        <meta property="position" content="1">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text2 ?>." href="<?php echo $url2 ?>" class="post post-page">
            <span property="name"><?php echo $text2 ?></span>
        </a>
        <meta property="position" content="2">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text3 ?>." href="<?php echo $url3 ?>" class="post post-page">
            <span property="name"><?php echo $text3 ?></span>
        </a>
        <meta property="position" content="3">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text4 ?>." href="<?php echo $url4 ?>" class="post post-page">
            <span property="name"><?php echo $text4 ?></span>
        </a>
        <meta property="position" content="3">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <span property="name" class="post post-page current-item"><?php echo $text5 ?></span>
        <meta property="url" content="">
        <meta property="position" content="4">
    </span>
<?php } ?>



