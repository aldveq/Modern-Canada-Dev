<?php

/**
 *  Map Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'maps-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'maps-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}

// Load values and assing defaults.
$text = get_field('text_description') ?: 'Modern Cleaning is Canada’s largest and fastest growing janitorial services company, delivering exceptional cleaning services to retailers, offices, medical clinics, distribution centers, warehouses and data centers for more than 20 years.';
$image = get_field('backgound_image') ?: 295;
$mapImage = get_field('map_image') ?: 295;
$text_color = get_field('color_text_desktop');
$colorStyle = "color: ".$text_color.";";
?>

<div id="<?php echo esc_attr($id); ?>" class="card <?php echo esc_attr($className); ?>">
    <div class="content-images">
        <?php
            if( !empty( $image ) ): ?>
                <img class="card-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php
            if( !empty( $image ) ): ?>
                <img class="card-img image-map" src="<?php echo esc_url($mapImage['url']); ?>" alt="<?php echo esc_attr($mapImage['alt']); ?>" />
        <?php endif; ?>
    </div>

    <div class="card-img-overlay px-3 px-md-5 pb-0 pt-md-5">
        <div class="container px-0 py-4 pt-md-2 py-lg-4">
            <div class="row no-gutters px-0 py-0">
                <div class="col-12 col-lg-12 px-0 py-0">
                    <p class="maps-block-text" style="<?php echo $colorStyle; ?>"><?php echo $text; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>