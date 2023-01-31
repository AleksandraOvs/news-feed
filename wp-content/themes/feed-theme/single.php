<?php get_header(); the_post();?>
<section class="section">
        <div class="container">
          <h1><?php the_title(); ?></h1>
          <p>single site photos</p>
        </div>
        <?php the_content(); ?>
    </section>

<?php get_footer() ?>