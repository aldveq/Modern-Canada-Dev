<?php

/**
 *  Text with image with text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'text-with-image-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'text-with-image-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}

$cleaning_expertise_block_first_column = get_field('cleaning_expertise_block_first_column');
$cleaning_expertise_block_second_column = get_field('cleaning_expertise_block_second_column');

?>

<section id="<?php echo esc_attr($id); ?>" class="modern-advantage <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row pt-md-5">

            <?php 
                if($cleaning_expertise_block_first_column):
                    $cleaning_expertise_block_first_column_subtitle = $cleaning_expertise_block_first_column['cleaning_expertise_block_first_column_subtitle'];
                    $cleaning_expertise_block_first_column_title = $cleaning_expertise_block_first_column['cleaning_expertise_block_first_column_title'];
                    $cleaning_expertise_block_first_column_description_text = $cleaning_expertise_block_first_column['cleaning_expertise_block_first_column_description_text'];
                    ?>
                        <div class="col-12 col-md-6 pb-5">
                            <h5 class="subtitle-moder-advantage"><?php echo $cleaning_expertise_block_first_column_subtitle; ?></h5>              
                            <h2 class="the_title-moder-advantage"><?php echo $cleaning_expertise_block_first_column_title; ?></h2>
                            <div class="the_content pb-md-4">
                                <?php echo $cleaning_expertise_block_first_column_description_text; ?>
                            </div>
                        </div>      
                    <?php
                endif;
            ?>

            <?php 
                if($cleaning_expertise_block_second_column):
                    $cleaning_expertise_block_second_column_subtitle = $cleaning_expertise_block_second_column['cleaning_expertise_block_second_column_subtitle'];
                    $cleaning_expertise_block_second_column_title = $cleaning_expertise_block_second_column['cleaning_expertise_block_second_column_title'];
                    $cleaning_expertise_block_second_column_description_text = $cleaning_expertise_block_second_column['cleaning_expertise_block_second_column_description_text'];
                    ?>
                        <div class="col-12 col-md-6 pb-5">
                            <h5 class="subtitle-moder-advantage"><?php echo $cleaning_expertise_block_second_column_subtitle; ?></h5>              
                            <h2 class="the_title-moder-advantage"><?php echo $cleaning_expertise_block_second_column_title; ?></h2>
                            <div class="the_content pb-md-4">
                                <?php echo $cleaning_expertise_block_second_column_description_text; ?>
                            </div>
                        </div>      
                    <?php
                endif;
            ?>
        
        </div>
    </div>
</section>