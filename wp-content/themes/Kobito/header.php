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
      <ul>
        <li><a href="">ホーム</a></li>
        <li><a href="">レッスンメニュー</a></li>
        <li id="ameblo" class="blog"><a href="https:ameblo.jp/youaregreatenglish">アメブロ</a></li>
        <li id="student" class="customer"><a href="https://m.youtube.com/watch?v=bZq6-L0cd_U&feature=youtube.be">お客様の声</a></li>
        <li><a href="">サービス案内</a></li>
        <li id="inquire" class="prupru"><a href="https://lin.ee/upqJDG3">お問い合わせ</a></li>
      </ul>
    </nav>