<?php
$newsurl = get_post_type_archive_link('news');

$url1=str_replace("/news", "", $newsurl);
$text1="TOP";
$url2="";
$text2="";
$url3="";
$text3="";
$url4="";
$text4=the_title();

session_start();
$url_type = $_SESSION['url_type'];
$thisurl = the_permalink();


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


}

?>
