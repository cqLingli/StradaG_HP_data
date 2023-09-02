<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_header($url_type);
}else{
    get_header();
}


add_filter(
    'the_content',
    function ( string $content ) {
        if ( ! is_search() ) {
            return $content;
        }
        $count   = 60; // 検索した単語の前後の何文字を表示させるかをここで変えられます。
        $content = wp_strip_all_tags( $content );
        $keys    = implode( '|', array_filter( explode( ' ', get_search_query() ) ) );
        $pattern = '/(' . $keys . ')/iu';
        preg_match( $pattern, $content, $matches, PREG_OFFSET_CAPTURE );

        if ( ! ( isset( $matches[0] ) && isset( $matches[0][1] ) ) ) {
            return $content;
        }
        $start = mb_strlen( substr( $content, 0, $matches[0][1] ), 'utf-8' );
        return preg_replace( $pattern, '<span class="highlight">\0</span>', mb_substr( $content, max( $start - $count, 0 ), $count * 2 ) );
    }
);

?>

<!-- .l-main | メインコンテンツ -->
<main class="l-main p-new01">
  <div class="c-breakcrumds">
    <div class="l-container">
      <?php if (function_exists('bcn_display')) { bcn_display(); }?>
    </div>
  </div>

  <div class="search-title">
          <div class="search-title1">検索</div>
          <div class="search-title2">Search</div>
  </div>
  
  
  <div class="search-content">
      <div class="search-content2">
        <hr class="c-line-bottom" />
             <form id="searchFrom" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <div class="search_content_style1">
                        <div class="search_content_style1_1">
                         <input type="text" name="s" id="search_content_input" placeholder="検索" value="<?php echo $_GET['s'] ?>">
                </div>
                <div class="search_content_style1_2">
                    <button onclick="$("searchFrom").submit();" class="search_content_button">
                    <svg t="1691662394048" class="icon-search" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="31988" width="30" height="30"><path d="M726.460377 809.298113c-68.588679 51.441509-153.6 81.630189-245.856603 81.630189-226.777358 0-410.566038-183.788679-410.566038-410.566038s183.788679-410.566038 410.566038-410.566038 410.566038 183.788679 410.566037 410.566038c0 92.256604-30.430189 177.267925-81.630188 245.856604l127.516981 127.516981c22.701887 22.701887 22.943396 59.65283-0.24151 82.837736-22.943396 22.943396-60.377358 22.460377-82.837736 0.241509L726.460377 809.298113zM480.603774 773.796226c162.05283 0 293.192453-131.381132 293.192452-293.192452S642.415094 187.411321 480.603774 187.411321 187.411321 318.792453 187.411321 480.603774c0 162.05283 131.139623 293.192453 293.192453 293.192452z m0 0" p-id="31989" fill="#8a8a8a"></path></svg>
                    </button>
                </div>
              </div>          
            </form>
        <hr class="c-line-bottom" />




              
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <?php
                            $postTypeId=get_post_type();
                            $postTypeName="";
                            if($postTypeId==="service"){
                                $postTypeName="ストラーダ税理士法人";
                            }elseif($postTypeId==="servicesb"){
                                $postTypeName="ストラーダビジネスサポート";
                            }elseif($postTypeId==="servicesg"){
                                $postTypeName="ストラーダ行政書士";
                            }elseif($postTypeId==="servicesr"){
                                $postTypeName="ストラーダ社会保険労務士";
                            }elseif($postTypeId==="servicetr"){
                                $postTypeName="タックス・リアルティ";
                            }
                        ?>
                        <div class="search-result-diva">
                            

                            <a href="<?php the_permalink(); ?>" class="search-result-a">
                                
                                <div class="search-result-title">
                                  <div class="search-result-title1">
                                    <?php echo $postTypeName; ?>
                                  </div>
                                  
                                  <div class="search-result-title2">
                                    <?php echo "業務内容 >"; ?>
                                    <?php echo the_title(); ?>
                                  </div>
                                </div>
                                <div class="search-result-content">
                                    <?php echo the_content(); ?>
                                </div>
                                
                                <hr class="c-line-bottom" />
                             </a>
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <div class="search-nodata">
                        <p>検索条件に一致する記事がありませんでした。</p>
                    </div>
                <?php endif; ?>
    


        <div class="search-page">
            <?php
            if (function_exists("pagination")) {
                pagination($wp_query->max_num_pages);
            }
            ?>
        </div>




  </div>
</main>

<?php
session_start();
$url_type = $_SESSION['url_type'];
if($url_type){
    get_footer($url_type);
}else{
    get_footer();
}
?>