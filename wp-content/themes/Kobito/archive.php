<?php get_header();?>
    <div id="mainWrapper">
      <div id="mainContents">
      <?php if(is_day()):?>
          <h1 class="archiveTitle"><?php the_time('Y年m月d日');?></h1>
        <?php else:?>
          <h1 class="archiveTitle"><?php wp_title('');?></h1>
        <?php endif;?>
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
        <?php get_template_part('loop','excerpt');?>
      </div>
      <aside id="sideContents">
            <?php get_sidebar('category');?>
            <?php get_sidebar('date');?>
        </aside>
    </div><!--mainWrapper-->
    <?php get_footer();?>
  <?php get_footer;?>

