<section class="categoryBox">
    <div class="catHeader">日別一覧</div>
    <ul>
    <?php
    $args=array(
        'type'=>'daily',
        'show_post_count'=>true,
    );
    wp_get_archives($args);
    ?>
    </ul>
</section>