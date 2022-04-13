<?php if(have_posts()):?>
          <div id="blogBox">
          <?php while(have_posts()):the_post();?>
            <article class="blogItem">
            <?php if(has_post_thumbnail()):?>
            <div>
              <a href="<?php the_permalink();?>"><?php the_post_thumbnail('thumbnail');?></a>
            </div>
            <?php endif;?>
            <div>
              <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
              <?php the_excerpt();?>
            </div>
            <a href="<?php the_permalink();?>">more...</a>
          </article>
          <?php endwhile;?>
        </div><!-- #blogBox -->
        <?php endif;?>
