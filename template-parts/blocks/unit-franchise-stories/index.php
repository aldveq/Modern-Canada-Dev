<?php 
    $countSlide=0;
?>

<!-- HTML -->
<?php if( have_rows('slider_info') ): ?>
<div class="unit-franchise-history">
    <div class="swiper-container swiper-unit-franchise-right h-100">
        <div class="swiper-wrapper unit-franchise-history__swiper-wrapper">
            <?php while( have_rows('slider_info') ): the_row(); 
                $main_Title_Slide = get_sub_field('main_title_slide');
                $first_Des = get_sub_field('first_description');
                $second_Description = get_sub_field('second_description_italic');
                $autor = get_sub_field('text_autor');
                $image = get_sub_field('image_left_unit_franchise');
                $unit_franchise_stories_link = get_sub_field('unit_franchise_stories_link');
                $unit_franchise_stories_link_target = $unit_franchise_stories_link['target'] ? $unit_franchise_stories_link['target'] : '_self';
            ?>
                <div class="swiper-slide ">
                    <div class="content-slide">
                        <div class="row d-none d-md-flex">
                            <div class="col-12 col-md-6">
                                <?php 
                                    if( !empty( $image ) ): ?>
                                        <img class="image-history" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>

                            <div class="col-12 col-md-6 content-info">
                                <div class="container-history pb-md-0 px-0 pl-md-2 pr-md-5">
                                    <?php if($main_Title_Slide): ?>
                                        <h2 class="text-primary history-title">
                                            <?php echo esc_attr($main_Title_Slide); ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if($first_Des): ?>
                                        <p class="first-description text-grey mb-5 pr-md-5 mb-md-4">
                                            <?php echo esc_attr($first_Des); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if(!empty($second_Description)): ?>
                                        <p class="second-description text-grey pr-md-5">
                                            <?php echo esc_attr($second_Description); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if(!empty($autor)): ?>
                                        <p class="text-primary author pr-md-5 mb-3">
                                            <?php echo esc_attr($autor); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if(!empty($unit_franchise_stories_link)): ?>
                                        <a class="font-family-soucer-sans-pro unit-franchise-history__link mr-md-5 mb-md-4" href="<?php echo $unit_franchise_stories_link['url']; ?>" target="<?php echo $unit_franchise_stories_link_target; ?>"><?php echo $unit_franchise_stories_link['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row d-md-none">
                            <div class="col-12 bg-grey block-right-web px-0 d-flex justify-content-center pl-md-4">
                                <div class="container-history pt-4 pb-5 px-0 pl-md-2">
                                    <?php if($main_Title_Slide): ?>
                                        <h2 class="text-primary px-4 history-title">
                                            <?php echo esc_attr($main_Title_Slide); ?>
                                        </h2>
                                    <?php endif; ?>

                                    <?php if($first_Des): ?>
                                        <p class="first-description text-grey mb-3 px-4">
                                            <?php echo esc_attr($first_Des); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php 
                                        if( !empty( $image ) ): ?>
                                            <img class="image-history my-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    <?php if(!empty($second_Description)): ?>
                                        <p class="second-description px-4 text-grey">
                                            <?php echo esc_attr($second_Description); ?>
                                        </p>
                                    <?php endif; ?>

                                    <?php if(!empty($autor)): ?>
                                        <p class="text-primary px-4 author">
                                            <?php echo esc_attr($autor); ?>
                                        </p>
                                    <?php endif; ?>
                                    <?php if(!empty($unit_franchise_stories_link)): ?>

                                        <a class="font-family-soucer-sans-pro unit-franchise-history__link ml-4" href="<?php echo $unit_franchise_stories_link['url']; ?>" target="<?php echo $unit_franchise_stories_link_target; ?>"><?php echo $unit_franchise_stories_link['title']; ?></a>
                                        
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <?php $countSlide++; endwhile; ?>                    
        </div>

        <?php if($countSlide < 2): else: ?>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-unit-franchise-pagination"></div>
            <!-- Add Arrows -->
            
            <div class="swiper-button-next swiper-unit-franchise-next"></div>
            <div class="swiper-button-prev swiper-unit-franchise-prev"></div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>