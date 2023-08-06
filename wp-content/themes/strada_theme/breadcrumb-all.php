<?php
$newsurl = get_post_type_archive_link('news');

$url1=str_replace("/news", "", $newsurl);
$text1="TOP";
$url2="";
$text2="";
$url3="";
$text3="";
$url4="";


session_start();
$url_type = $_SESSION['url_type'];
$thisurl = home_url(add_query_arg(array()));


if($url_type==="sz"){
    if(strpos($thisurl,'news')){
        $url2=$url1."tax";
        $text2="税理士法人トップ";
        $url3=$url1."tax/taxnewslist";
        $text3="税理士法人ニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'voice')){
        $url2=$url1."tax";
        $text2="税理士法人トップ";
        $url3=$url1."tax/taxvoicelist";
        $text3="税理士法人お客様の声";
    }elseif(strpos($thisurl,'columns')){
    
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."tax";
        $text2="税理士法人トップ";
        $url3=$url1."tax/taxmenber";
        $text3="税理士法人メンバー";
        $text4="メンバー紹介:";
    }
}elseif ($url_type==="ss"){
    if(strpos($thisurl,'news')){
        $url2=$url1."sr";
        $text2="社労士法人トップ";
        $url3=$url1."sr/srnewslist";
        $text3="社労士法人ニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."sr";
        $text2="社労士法人トップ";
        $url3=$url1."sr/srmenber";
        $text3="社労士法人メンバー";
        $text4="メンバー紹介:";
    }

}elseif ($url_type==="ch"){
    if(strpos($thisurl,'news')){
        $url2=$url1."chushoukigyouroudou";
        $text2="中小企業労働企画開発協会トップ";
        $url3=$url1."chushoukigyouroudou/chushoukigyouroudounewslist";
        $text3="中小企業労働企画開発協会ニュース";
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."chushoukigyouroudou";
        $text2="中小企業労働企画開発協会トップ";
        $url3=$url1."chushoukigyouroudou/chushoukigyouroudoumenber";
        $text3="中小企業労働企画開発協会メンバー";
        $text4="メンバー紹介:";
    }
}elseif ($url_type==="sg"){
    if(strpos($thisurl,'news')){
        $url2=$url1."admin";
        $text2="行政書士トップ";
        $url3=$url1."admin/adminnewslist";
        $text3="行政書士ニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."admin";
        $text2="行政書士トップ";
        $url3=$url1."admin/adminmenber";
        $text3="行政書士メンバー";
        $text4="メンバー紹介:";
    }

}elseif ($url_type==="sb"){
    if(strpos($thisurl,'news')){
        $url2=$url1."bs";
        $text2="ビジネスサポートトップ";
        $url3=$url1."bs/bsnewslist";
        $text3="ビジネスサポートニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."bs";
        $text2="ビジネスサポートトップ";
        $url3=$url1."bs/bsmenber";
        $text3="ビジネスサポートメンバー";
        $text4="メンバー紹介:";
    }elseif(strpos($thisurl,'casestudy')){
    
    }

}elseif ($url_type==="tr"){
    if(strpos($thisurl,'news')){
        $url2=$url1."taxria";
        $text2="タックスリアルティトップ";
        $url3=$url1."taxria/taxrianewslist";
        $text3="タックスリアルティニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
        $url2=$url1."taxria";
        $text2="タックスリアルティトップ";
        $url3=$url1."taxria/taxriamenber";
        $text3="タックスリアルティメンバー";
        $text4="メンバー紹介:";
    }
}else{
    if(strpos($thisurl,'news')){
        $url2=$url1."news";
        $text2="ニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'columns')){
    
    }elseif(strpos($thisurl,'members')){
        $text4="メンバー紹介:";
    }
}

?>

<?php if($url_type===""){ ?>
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text1 ?>." href="<?php echo $url1 ?>" class="home">
            <span property="name">TOP</span>
        </a>
        <meta property="position" content="1">
    </span>
    
  <?php if($text2!=""){ ?>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text2 ?>." href="<?php echo $url2 ?>" class="post post-page">
            <span property="name"><?php echo $text2 ?></span>
        </a>
        <meta property="position" content="2">
    </span>
  <?php } ?>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <span property="name" class="post post-page current-item"><?php echo $text4 ?><?php the_title() ?></span>
        <meta property="url" content="">
        <meta property="position" content="3">



<?php } else { ?>


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
        <span property="name" class="post post-page current-item"><?php echo $text4 ?><?php the_title() ?></span>
        <meta property="url" content="">
        <meta property="position" content="4">
    </span>
</span>

<?php } ?>
