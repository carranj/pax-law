<?php
    get_header();
    $homepage_intro_photo = get_field('homepage_intro_photo');
    $homepage_large_text = get_field('homepage_large_text');
    $homepage_secondary_text = get_field('homepage_secondary_text');
?>
<section id="home-intro" class="d-flex justify-content-center" style="background-image:url('<?php echo esc_url($homepage_intro_photo['url']); ?>')">
    <div class="container-fluid intro-container">
        <div class="row">
            <div class="col-12 text-center">
                <h1><?php echo $homepage_large_text ?></h1>
                <h2><?php echo $homepage_secondary_text ?></h2>
                <div class="row">
                <?php if( have_rows('homepage_intro_buttons') ): while( have_rows('homepage_intro_buttons') ) : the_row();
                    $homepage_intro_button_text = get_sub_field('homepage_intro_button_text');
                    $homepage_button_link = get_sub_field('homepage_button_link');
                ?>
                    <div class="col-lg">
                        <a class="btn homeintro-btn" href="<?php echo esc_url($homepage_button_link) ?>"><?php echo $homepage_intro_button_text?></a>
                    </div>
                <?php endwhile; else : endif; ?>
                </div>    
            </div>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Areas of Practice</h2>
        </div>
    </div>
    <div class="row">
    <?php if( have_rows('practice_areas') ): while( have_rows('practice_areas') ) : the_row();
        $practice_title = get_sub_field('practice_name');
        $practice_description = get_sub_field('practice_description');
        $practice_link = get_sub_field('field_664e2bebd1e3e');
        $practice_image = get_sub_field('practice_image');
    ?>
    <div class="col-md-4">
        <div class="grid">
            <figure class="effect-sadie">
                <img src="<?php echo esc_url($practice_image['url']); ?>" alt="<?php echo esc_attr($practice_image['alt']); ?>" />
                <!-- <img src="http://localhost/pax-law/wp-content/uploads/2024/05/real-estate-agent-giving-keys-to-new-owner-of-house-2431838959.jpg" alt="img02"/> -->
                <figcaption>
                    <h2><?php echo $practice_title; ?></h2>
                    <p><?php echo $practice_description; ?></p>
                    <a href="<?php echo esc_url( $practice_link ); ?>">View More ?></a>
                </figcaption>			
            </figure>
        </div>
    </div>
    
    <?php endwhile; else :
            // Do something...
    endif; ?>
        
    </div>
</section>

<?php get_footer(); ?>