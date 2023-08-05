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
    
    }elseif(strpos($thisurl,'columns')){
    
    }elseif(strpos($thisurl,'members')){
    
    }
}elseif ($url_type==="ss"){
    if(strpos($thisurl,'news')){
        
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
    
    }

}elseif ($url_type==="ch"){
    if(strpos($thisurl,'news')){
    
    }elseif(strpos($thisurl,'members')){
    
    }
}elseif ($url_type==="sg"){
    if(strpos($thisurl,'news')){
        
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
    
    }

}elseif ($url_type==="sb"){
    if(strpos($thisurl,'news')){
        
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
    
    }elseif(strpos($thisurl,'casestudy')){
    
    }

}elseif ($url_type==="tr"){
    if(strpos($thisurl,'news')){
        
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'members')){
    
    }
}else{
    if(strpos($thisurl,'news')){
        $url2=$url1."news";
        $text2="ニュース";
    }elseif(strpos($thisurl,'service')){
    
    }elseif(strpos($thisurl,'voice')){
    
    }elseif(strpos($thisurl,'columns')){
    
    }elseif(strpos($thisurl,'members')){
    
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
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <a property="item" typeof="WebPage" title="Go to <?php echo $text2 ?>." href="<?php echo $url2 ?>" class="post post-page">
            <span property="name">ニュース</span>
        </a>
        <meta property="position" content="2">
    </span>
    &gt;
    <span property="itemListElement" typeof="ListItem">
        <span property="name" class="post post-page current-item"><?php the_title() ?></span>
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
        <span property="name" class="post post-page current-item"><?php the_title() ?></span>
        <meta property="url" content="">
        <meta property="position" content="4">
    </span>
</span>

<?php } ?>
