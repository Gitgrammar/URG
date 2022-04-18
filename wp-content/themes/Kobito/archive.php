<?php get_header();?>
  <div id="mainWrapper">
      <div id="mainContents">
        <?php if(is_day()):?>
          <h1 class="archiveTitle"><?php the_time('Y年m月d日');?></h1>
        <?php else:?>
          <h1 class="archiveTitle"><?php wp_title('');?></h1>
        <?php endif;?>
        <?php get_template_part('loop','excerpt');?>
      </div><!--mainContents-->
      <aside id="sideContents">
        <?php get_sidebar('category');?>
        <?php get_sidebar('date');?>
      </aside>
    </div><!--mainWrapper-->
<?php get_footer();?>