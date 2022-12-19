<?php

/**
 *  cards Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'cards-services-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'cards-services';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}
?>

<section id="<?php echo esc_attr($id); ?>" class="cards-section <?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-deck card-deck-image pb-0 pt-4 py-md-5">

                    <?php
                        if( have_rows('services') ):
                            while( have_rows('services') ) : the_row();
                                $parent_title = get_sub_field('title_service');
                                $cardImage = get_sub_field('image_service');
                                $img_url="";
                                $image_alt="";
                                $addBtn= get_sub_field('add_button');
                                
                                if( $cardImage ):
                                    $img_url = $cardImage['url'];
                                    $image_alt = $cardImage['alt'];
                                endif;
                    ?>

                        <div class="card cards-services">
                            <?php if($img_url): ?>
                                <img class="card-img-top" src="<?php echo esc_url($img_url); ?>" alt="<?php echo $image_alt; ?>">
                            <?php endif; ?>
                            <div class="content-card">
                                <div class="card-body px-2 py-2">
                                    <?php if($parent_title): ?>
                                        <h5 class="card-title"><?php echo $parent_title; ?></h5>
                                    <?php endif; ?>

                                    <?php
                                        // Loop over sub repeater rows.
                                        if( have_rows('list_of_descriptions') ):
                                    ?>
                                        <ul class="card-list">
                                    <?php 
                                        while( have_rows('list_of_descriptions') ) : the_row(); 
                                        $listLi = get_sub_field('list');
                                    ?>
                                        <li class="list-li">
                                            <?php echo $listLi; ?>
                                        </li>    
                                    <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <?php 
                                    if($addBtn == "Yes"): 
                                        $textBTN = get_sub_field('text_button');
                                        $linkBTN = get_sub_field('link');
                                        $openNewTab = get_sub_field('open_in_new_tab');
                                ?>
                                    <div class="card-footer px-2 py-0 border-0">
                                        <div class="content-btn">
                                            <div class="text-hero-container__external-link-cta-container text-hero-container__external-link-cta-container--cleaning_quote btn-card-service">
                                            <a class="text-hero-container__external-link-cta font-family-soucer-sans-pro" href="<?php echo $linkBTN; ?>" target="<?php echo ($openNewTab == "Yes")? '_blank' : '';   ?>">
                                                    <span>
                                                        <?php echo $textBTN; ?>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                        </div>

                    <?php
                            endwhile;
                        endif;
                    ?>
                    

                </div>
            </div>
        </div>
    </div>
</section>