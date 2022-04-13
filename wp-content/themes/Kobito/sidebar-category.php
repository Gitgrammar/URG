<section class="categoryBox">
    <div class="catHeader">カテゴリー一覧</div>
    <ul>
    <?php
    $args=array(
        'title_li'=>'',
        'show_count'=>true,
    );
    wp_list_categories($args);
    ?>
    </ul>
</section>