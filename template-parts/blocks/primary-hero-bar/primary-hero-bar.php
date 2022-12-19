<?php

/**
 *  her text Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'hero-text-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero-text-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}
$textHero = get_field('text_of_hero');
$addSubtitle= get_field('add_sub_title');
$addText = get_field('add_text_buttom');
?>

<section id="<?php echo esc_attr($id); ?>" class="hero-text-block <?php echo esc_attr($className); ?>">
    <div class="container py-4">
        <div class="row py-md-2">
            <div class="col-12 col-md-9 col-lg-10">
                <?php 
                    if($addSubtitle == "Yes"): 
                        $subtitle = get_field("subtitle");
                        if($subtitle){
                ?>
                    <h4 class="subtitle_bar pt-3"><?php echo $subtitle; ?></h4>
                <?php } endif; ?>
                <h2 class="the_title_hero">
                    <?php echo $textHero; ?>
                </h2>

                <?php 

                    if($addText  == "Yes"): 
                        $text = get_field("text_buttom_hero");
                        if($text){
                ?>
                    <div class="the_text">
                        <p> <?php echo $text; ?></p>
                    </div>
                <?php } endif; ?>
            </div>
        </div>
    </div>
</section>