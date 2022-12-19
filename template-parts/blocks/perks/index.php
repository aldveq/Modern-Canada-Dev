<?php

/**
 *  Perks Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'perks-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'perks-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}

//acf fields
$main_Title = get_field('main_title_block');
$imageRight = get_field('image_rigth');
?>

<section class="perks bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 block-left">
                <?php if($main_Title): ?>
                    <h2 class="text-white fs-36 fw-700 title"><?php echo esc_attr($main_Title); ?></h2>
                <?php endif; ?> 

                <?php if( have_rows('perks') ): ?>
                <div class="row">
                    <?php while( have_rows('perks') ): the_row(); 
                        $icon = get_sub_field('icon');
                        $textPerks = get_sub_field('text_perks');
                    ?>
                        <div class="col-4 col-md-4">
                            <?php if( !empty( $icon ) ): ?>
                                <img src="<?php echo esc_url($icon['url']); ?>" alt="icons perks">
                            <?php endif; ?>
                            <?php if( $textPerks ): ?>
                                <div class="item">
                                    <p class="text-white link-item">
                                        <?php echo $textPerks; ?>
                                    </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 block-right">
                <?php if(!empty( $imageRight)): ?>
                    <img src="<?php echo esc_url($imageRight['url']); ?>" alt="<?php echo esc_attr($imageRight['alt']); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>