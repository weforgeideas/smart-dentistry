<?php get_header(); ?>
<main style="padding:8rem 0 4rem;">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article><?php the_content(); ?></article>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>
