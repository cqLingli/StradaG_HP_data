<form role="search" method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
      <input type="text" class="search-field"
          placeholder="<?php echo esc_attr_x( 'キーワードを入力してEnter', 'placeholder' ) ?>"
          value="<?php echo get_search_query() ?>" name="s" />
    <label class="label__submit"><input type="submit" value="<?php echo esc_attr_x( '', 'submit button' ) ?>" /></label>
</form>