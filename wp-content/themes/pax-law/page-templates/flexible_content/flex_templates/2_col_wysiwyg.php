<?php
    if( get_row_layout() == 'two-col_wysiwyg'):
        // Columns
        $column_sizes= get_sub_field('column_sizes');
        $has_title = get_sub_field('has_title_2_column');
        $col_arr = explode (",", $column_sizes);
        $col1_size = $col_arr[0];
        $col2_size = $col_arr[1];
        $responsize_breakpoint = get_sub_field('responsive_breakpoint');
        $left_column_content = get_sub_field('left_col1_of_2');
        $right_column_content = get_sub_field('right_col2_of_2');
?>
    <?php
    if ($has_title) :
    ?>
        <div class="row">
            <div class="col-md-12">
                <h2><?php echo $title ?></h2>
            </div>
        </div>
    <?php
    endif;
    ?>
    
    <div class="row">
        <div class="col<?php
        if($responsize_breakpoint !== 'none'){
            echo $responsize_breakpoint;
        }
        ?>-<?php echo $col1_size?>">
            <?php echo $left_column_content; ?>
        </div>
        <div class="col<?php
        if($responsize_breakpoint !== 'none'){
            echo $responsize_breakpoint;
        }
        ?>-<?php echo $col2_size?>">
            <?php echo $right_column_content; ?>
        </div>    
    </div>

<?php endif; 