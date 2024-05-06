<?php get_header(); ?>

<?php
$i = 0;
if (have_posts()) : while (have_posts()) : the_post();

        $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), '');
        if ($i % 3 == 0) : ?>
            <div class="row">
            <?php endif; ?>

            <div class="col-md-4">
                <div class="grid">
                    <a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_image[0]; ?>" class="img-responsive" /></a>
                </div>
            </div>

            <?php if ($i % 3 == 2) : ?>
            </div>
<?php endif;

            $i++;
        endwhile;
    endif;
    wp_reset_postdata(); ?>
    <?php get_footer(); ?>