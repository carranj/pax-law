<?php get_header(); ?>


<div class="row">
  <div class="col-md-12">
    <h1><?php wp_title(''); ?></h1>
    <?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>


      <?php
        the_content();


      endwhile;
    else : ?>
      <h1>Oh No!</h1>
      <p>No Content is appearing for this page!</p>
    <?php endif; ?>
  </div>
</div>




<?php get_footer(); ?>