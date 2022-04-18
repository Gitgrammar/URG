<?php get_header();?>
  <div id="mainWrapper">
      <div id="mainContents">
        <h1 id="searchResult">「<?php the_search_query();?>」の検索結果</h1>
        <?php if($wp_query->found_posts > 0):?>
          <?php get_template_part('loop','excerpt');?>
        <?php else:?>
          <p id="resultZero">検索結果はありませんでした。</p>
        <?php endif;?>
      </div>
      <aside id="sideContents">
        <?php get_sidebar('category');?>
        <?php get_sidebar('date');?>
      </aside>
    </div><!--mainWrapper-->
<?php get_footer();?>