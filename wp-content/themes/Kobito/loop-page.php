<?php if(have_posts()):?>
  <?php while(have_posts()):the_post();?>
    <article id="page-<?php the_ID();?>" class="page">
    <h1><?php the_title();?></h1>
    <div>
      <?php the_content();?>
    </div>
  </article>
  <?php endwhile;?>
<?php endif;?>
