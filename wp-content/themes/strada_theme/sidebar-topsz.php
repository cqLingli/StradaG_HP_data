

        	 <div class="l-commonCategories">
                 <p class="c-tlt04">カテゴリー</p>
        	      <ul class="c-list__cat">
                      <?php
                      $categories = get_categories();
                      foreach ($categories as $term) {
                          ?>
                  <li><a href="<?php echo home_url('columns').'/category/'.$term->slug; ?>">
                          <?php echo $term->name; ?>
                          <span class="contents_number"><?php echo $term->count; ?>
                              <span style="float: right;">CONTENTS</span>
                          </span>

                      </a></li>
                      <?php }
                      ?>
              </ul>

        </div>




