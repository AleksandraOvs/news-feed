<?php get_header(); ?>
    <section class="section">
        <div class="container">
            <?php
                if(have_posts() ){
                    while( have_posts() ){
                        the_post();
                    ?>
                    <article <?php post_class(); ?> id="post-<?php the_ID();?>">
                        <h2 class="text-secondary text-center"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
            <?php        
                    }
                }
            ?>
        </div>
    </section>
<?php get_footer(); ?>