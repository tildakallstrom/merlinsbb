<?php get_header(); ?>
<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

      
<?php
if (have_posts()) {

    the_post();
    the_content();
}

?>
<?php
query_posts('posts_per_page=20');
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <article class="newsarticle">
            <div>
                <h2 class="newsh3"> <?= the_title(); ?></h2>
                <p class="newsp"> <?= the_excerpt(); ?> </p>
    </div>
                <div>
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?> </div><br>
                <a href="<?= the_permalink(); ?>">Läs mer...</a><br><br>
        </article>
<?php
    }
}
?>




<?php get_footer(); ?>