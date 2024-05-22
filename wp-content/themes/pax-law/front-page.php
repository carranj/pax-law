<?php get_header(); ?>


<section id="home-intro" class="d-flex justify-content-center" style="background-image:url('https://carrancomarketing.com/paxlaw/wp-content/uploads/2024/05/peaceful-courthouse-scaled.jpg')">
<div class="row">
    <div class="col-12 text-center">
    <h1>Planning. Protecting.</h1>
    <h2>Bringing you peace of mind</h2>
    <a class="btn homeintro-btn" href="#">Real Estate</a>
    <a class="btn homeintro-btn" href="#">Wills and Trusts</a>
    <a class="btn homeintro-btn" href="#">Business Law</a>
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