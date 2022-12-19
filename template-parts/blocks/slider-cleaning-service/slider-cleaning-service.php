<?php

/**
 *  Slider Service Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'cleaning-service-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cleaning-service-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}


$args = array(  
    'post_type' => 'cleaning-service',
    'post_status' => 'publish',
    'posts_per_page' => 8,
    'orderby' => 'title',
    'order' => 'ASC',
);

$all_service = new WP_Query( $args );

// Load values and assing defaults.
// $text = get_field('text_description') ?: 'Modern Cleaning is Canada’s largest and fastest growing janitorial services company, delivering exceptional cleaning services to retailers, offices, medical clinics, distribution centers, warehouses and data centers for more than 20 years.';
?>

<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> d-flex flex-column">
    <?php 
        if ( $all_service->have_posts() ) { 
    ?>
    <div class="bg-movil py-4 py-md-0 px-3 px-md-0">
        <div class="swiper-container gallery-services-top">
            <div class="swiper-wrapper">
                <?php
                    while ( $all_service->have_posts() ) : $all_service->the_post();
                    if ( has_post_thumbnail() ) {
                        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $image_id = get_post_thumbnail_id();
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
                        
                        if ( ! empty( $featured_img_url ) ) {
                ?>
                        <div class="swiper-slide">
                            <div class="row no-gutters">
                                <!-- col image -->
                                <div class="col-12 col-md-6">
                                    <img class="w-100 h-100 image-service" style="object-fit: cover;" src="<?php echo $featured_img_url; ?>" alt="<?php if ( ! empty( $image_alt  ) ) { echo $image_alt ; } ?>">
                                </div>
                                <!-- col-content -->
                                <div class="col-12 col-md-6 col-content-service">
                                    <div class="content-info">
                                        <h2 class="the_title_service"><?php echo get_the_title(); ?></h2>
                                        <?php if( have_rows('content', get_the_ID()) ): ?>
                                            <?php while( have_rows('content', get_the_ID()) ): 
                                                the_row(); 
                                                $link = get_sub_field('button');
                                            ?>
                                                <div class="the_content_repeater">
                                                    <?php echo get_sub_field('the_content'); ?>
                                                </div>
                                                
                                                <?php 
                                                    if( $link ): 
                                                        $link_url = $link['url'];
                                                        $link_title = $link['title'];
                                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                                ?>
                                                    <div class="content-btn">
                                                        <div class="link-btn-slider text-hero-container__external-link-cta-container text-hero-container__external-link-cta-container--cleaning_quote">
                                                            <a class="text-hero-container__external-link-cta font-family-soucer-sans-pro" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                                                <span>
                                                                    <?php echo esc_html( $link_title ); ?>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                            <?php
                                                    endif;
                                                endwhile; 
                                            ?>

                                        <?php endif; ?>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                <?php 
                        }    
                    }
                    endwhile;  
                ?>           
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev custom-btn-swipers"></div>
            <div class="swiper-button-next custom-btn-swipers"></div>
        </div>
    </div>
    
    <div class="container">
        <div class="row no-gutters">
            <div class="col-12 py-3 pb-md-5">
                <div class="swiper-container gallery-services-thumb">
                    <div class="swiper-wrapper">
                        <?php
                            while ( $all_service->have_posts() ) : $all_service->the_post();
                            if ( has_post_thumbnail() ) {
                                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                
                                if ( ! empty( $featured_img_url ) ) {
                        ?>
                            <div class="swiper-slide" style="background-image: url('<?php echo $featured_img_url; ?>');">
                                    <h4 class="thumb-title"><?php echo get_the_title(); ?></h4>
                            </div>
                        <?php 
                                }    
                            }
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    }   
    wp_reset_postdata();
    ?>
    
</section>