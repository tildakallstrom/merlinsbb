<?php get_header(); ?>
<section class="news">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1 class="newsh1">
        <?php the_title(); ?>
      </h1>
      <span class="date">
        <?php echo get_the_date(); ?>
      </span>
      <p class="p">
        <?php the_content(); ?>
      </p>

      <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
      }
      ?>
      <a class="back" href="https://aangens.tildakallstrom.se/news/">Back <<< /a><br>
</section>
<?php endwhile; 
 endif; 
  get_footer(); ?>