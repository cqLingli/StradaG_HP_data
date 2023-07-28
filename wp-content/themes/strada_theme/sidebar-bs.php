
<div class="l-sidebar">
        	 <div class="l-commonCategories">
                 <p class="c-tlt04">カテゴリー</p>
        	      <ul class="c-list__cat">
                      <?php

                      $terms = get_terms( 'casestudy_type', array(
                          'hide_empty' => false,
                          'order' => 'ASC',
                          'orderby' => 'term_id'
                      ) );

                      foreach ($terms as $term) {
                      $tax_name = $term->name;
                      $tax_slug = $term->slug;
                          ?>
                          <li><a href=""
                                  <?php
                                  echo $tax_name;
                              ?>
 </a>
                          </li>
                      <?php }
                      ?>
              </ul>

        </div>
	<div class="l-commonPopular-Article"><p class="c-tlt04">人気記事</p>

		<div class="p-column__list">
                        <div class="item">
              <div class="image">
                    <img width="900" height="599" src="//localhost/wordpress/wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工.jpg" class="lazy-hidden attachment-kv-size size-kv-size wp-post-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工.jpg 900w, http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工-300x200.jpg 300w, http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工-768x511.jpg 768w" sizes="(max-width: 900px) 100vw, 900px"><noscript><img width="900" height="599" src="//localhost/wordpress/wp-content/plugins/a3-lazy-load/assets/images/lazy_placeholder.gif" data-lazy-type="image" data-src="http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工.jpg" class="lazy lazy-hidden attachment-kv-size size-kv-size wp-post-image" alt="" decoding="async" loading="lazy" srcset="" data-srcset="http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工.jpg 900w, http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工-300x200.jpg 300w, http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工-768x511.jpg 768w" sizes="(max-width: 900px) 100vw, 900px" /><noscript><img width="900" height="599" src="http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工.jpg" class="attachment-kv-size size-kv-size wp-post-image" alt="" decoding="async" loading="lazy" srcset="http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工.jpg 900w, http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工-300x200.jpg 300w, http://localhost/wordpress/wp-content/uploads/2021/06/電子機器　加工-768x511.jpg 768w" sizes="(max-width: 900px) 100vw, 900px" /></noscript>              </div>
              <div class="txt">
                <div class="content">
                  【確定申告】国民年金保険料控除の証明書で領収書は必要？                </div>
                <p class="date-cat">
                  <span class="date">2021.06.29</span>
                </p>
              </div>
              <a href="http://localhost/wordpress/columns/tax-knowledge/292/"></a>
            </div>
            </div>
	</div>
</div>



