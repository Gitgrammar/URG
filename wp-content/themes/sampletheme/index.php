<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name');?></title>
  </head>
  <body>
    <h1><?php bloginfo('description');?></h1>
    <?php
    if(have_posts()):
      while(have_posts()):
        the_post();
    ?>
    <article>
      <?php the_category();?>
      <?php //the_time('Y-m-d');?>
      <?php echo $post->post_date;?>
      <?php the_title();?>
      <?php the_content();?>
    </article>
    <?php
      endwhile;
    endif;
    ?>
  </body>
</html>