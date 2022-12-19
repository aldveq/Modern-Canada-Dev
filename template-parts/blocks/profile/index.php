<?php

/**
 *  Profile Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'profile-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'profile-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}

//acf fields
$main_Title = get_field('main_title_block');
$subtitle = get_field('subtitle');
$imageleft = get_field('image_left');
$text_description = get_field('text_description');
$second_title = get_field('second_title');
$secondTextDes = get_field('second_description_text');
?>

<section class="modern-profile">
    <div class="row profile-image-mobile">
        <div class="col-12">
            <?php if(!empty( $imageleft)): ?>
                <img src="<?php echo esc_url($imageleft['url']); ?>" alt="<?php echo esc_attr($imageleft['alt']); ?>">
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row profile-image-web">
            <div class="col-12 col-md-6 content-image">
                <?php if(!empty( $imageleft)): ?>
                    <img src="<?php echo esc_url($imageleft['url']); ?>" alt="<?php echo esc_attr($imageleft['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6">
                <?php if(!empty($subtitle)): ?>
                    <h5 class="text-primary fs-14 fw-600">
                        <?php echo $subtitle; ?>
                    </h5>
                <?php endif; ?>
                <?php if(!empty($main_Title)): ?>
                    <h2 class="text-primary fs-36 fw-700 mb-4">
                        <?php echo $main_Title; ?>
                    </h2>
                <?php endif; ?>

                <?php if(!empty($text_description)): ?>
                    <div class="description">
                        <?php echo $text_description; ?>
                    </div>
                <?php endif; ?>

                <div class="requirements-content mb-4">
                    <?php if(!empty($second_title)): ?>
                        <h2 class="text-primary fs-36 fw-700 mb-4"><?php echo $second_title; ?></h2>
                    <?php endif; ?>
                    
                    <?php if(!empty($secondTextDes)): ?>
                        <p class="text-grey fs-18 fw-400 mb-0">
                            <?php echo $secondTextDes; ?>
                        </p>
                    <?php endif; ?>
                </div>
                <?php
                    $link = get_field('button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <div class="content-btn">

                        <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="modern-website-button modern-website-button__primary"><span class="modern-website-button__text"><?php echo esc_html( $link_title ); ?></span><span class="modern-website-button__icon"></span></a>

                    </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>