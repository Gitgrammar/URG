<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title><?php bloginfo('name');?>
    <?php if(!is_home()):?>
      <?php if(is_day()):?>
        <?php the_time('|Y年m月d日');?>
      <?php else:?>
        <?php wp_title('|',true,'');?>
      <?php endif;?>
    <?php endif;?>
  </title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css"/>
  <?php wp_head();?>
</head>
<body>
  <div id="container">
    <header>
     英語レッスンURGへようこそ！
    </header>
    <div id="searchBox">
    <?php get_search_form();?> 
    </div>
    <nav>
    <div id="logo">
        <a href="<?php echo home_url();?>">
          <img src="<?php echo get_template_directory_uri();?>/images/home.png">
        </a>
      </div>
      <?php
      $args=array(
        'menu'=>'global-nav',
        'container'=>false
      );
      wp_nav_menu($args);
      ?> <li id="inquire" class="prupru"><a href="http://localhost/URG/%e3%81%8a%e5%95%8f%e3%81%84%e5%90%88%e3%82%8f%e3%81%9b/">お問い合わせ</a></li>
      </ul>
    </nav>