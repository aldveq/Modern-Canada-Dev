<?php

/**
 *  hero image with text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'hero-image-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-image-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}

$imageHero = get_field('image_hero');
$img_url="";
$image_alt="";

if( $imageHero ):
    // Image variables.
    $img_url = $imageHero['url'];
    $image_alt = $imageHero['alt'];
endif;
$imageRight= get_field('image_right'); 
$verticalAlingText = get_field('vertical_align_text');
$ClassVerticalAlign= "align-items-start";

if($verticalAlingText != "Top"){
    $ClassVerticalAlign= "align-items-center";
}else{
    $ClassVerticalAlign= "align-items-start";
}

$hero_image_text_link = get_field('hero_image_text_link');

if($hero_image_text_link):
    $hero_image_text_link_target = $hero_image_text_link['target'] ? $hero_image_text_link['target'] : '_self';
endif;


?>

<section id="<?php echo esc_attr($id); ?>" class="hero-with-description <?php echo esc_attr($className); ?>">

    <div class="bg-movil">
        
        <div class="row no-gutters <?php if($imageRight == "Yes"){ echo 'flex-md-row-reverse'; } ?>">
            <!-- col image -->
            <div class="col-12 col-lg-6">
                <img class="w-100 image-hero <?php echo is_page('why-modern') || is_page('pourqoui-modern') ? 'image-hero-alt' : ''; ?>" src="<?php echo esc_url($img_url); ?>" alt="<?php if ( !empty($image_alt) ) { echo $image_alt ; } ?>">
            </div>
            <!-- col-content -->
            <div class="col-12 col-lg-6 col-content d-flex <?php echo $ClassVerticalAlign; ?>">
                <div class="content-info p-3">
                    <?php 
                        $subtitle = get_field('sub_title');
                        if($subtitle){ 
                    ?>
                        <h5 class="subtitle"><?php echo $subtitle; ?></h5>
                    <?php } ?>

                    <?php 
                        $mainTitle = get_field('main_title');
                        if($mainTitle){ 
                    ?>
                        <h2 class="the_title"><?php echo $mainTitle; ?></h2>
                    <?php } ?>

                    <?php 
                        $description = get_field('descriptions');
                        if( $description ){  
                    ?>
                        <div class="the_content mb-5">
                            <?php echo $description; ?>
                        </div>
                    <?php } ?>

                    <?php if($hero_image_text_link): ?>
                        <a href="<?php echo $hero_image_text_link['url']; ?>" target="<?php echo $hero_image_text_link_target; ?>" class="modern-website-button modern-website-button__primary <?php echo isShortText($hero_image_text_link['title']) ? 'short-text' : ''; ?>"><span class="modern-website-button__text"><?php echo $hero_image_text_link['title']; ?></span><span class="modern-website-button__icon"></span></a>
                    <?php endif ?>
                </div>
                
            </div>
        </div>
    </div>
</section>