<?php get_header();?>
    <div id="mainWrapper">
      <div id="mainContents">
        <?php get_template_part('loop','page');?>
      </div>
      <aside id="sideContents">
            <?php get_sidebar('category');?>
            <?php get_sidebar('date');?>
        </aside>
    </div><!--mainWrapper-->
    <?php get_footer();?>
  <?php get_footer;?>

