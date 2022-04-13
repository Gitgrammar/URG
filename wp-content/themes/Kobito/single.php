<?php get_header();?>
    <div id="mainWrapper">
      <div id="mainContents">
        <?php if(have_posts()):?>
          <div id="blogBox">
          <?php while(have_posts()):the_post();?>
            <article class="blogItem">
            <div>
              <h1><?php the_title();?></h1>
              <div class="blogInfo">
              <?php the_category(' ');?>
                <time datetime="<?php the_time('Y-m-d');?>">
                  投稿日:<?php the_time('Y年m月d日(l)');?>
                </time>
              </div>
              <?php the_content();?>
              <nav>
                <span><?php previous_post_link();?></span>
                <span><?php next_post_link();?></span>
              </nav>
            </div>
          </article>
          <?php endwhile;?>
        </div><!-- #blogBox -->
        <?php endif;?>
      </div>
      <aside id="sideContents">
        <?php get_sidebar('category');?>
        <?php get_sidebar('date');?>
      </aside>
    </div><!--mainWrapper-->
<?php get_footer();?>
