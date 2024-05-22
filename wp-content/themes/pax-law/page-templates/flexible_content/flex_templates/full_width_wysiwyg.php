<?php
    if( get_row_layout() == 'full_width_wysiwyg' ):
        $has_title= get_sub_field('has_title');
        $title = get_sub_field('title');
        $full_width_content = get_sub_field('full_width_wysiwyg');
?>
        <div class="row">
            <div class="col-md-12">

            <?php if($has_title):?>
                <h2><?php echo $title ?></h2>
            <?php endif;

            echo $full_width_content;
            ?>
            </div>
        </div>
<?php endif; ?>
            