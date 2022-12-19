<?php
    $main_Title = get_field('main_title');
    $first_Text = get_field('first_text');
    $secon_description = get_field('secon_text_description');
    $unit_franchise_opportunities_link = get_field('unit_franchise_opportunities_link');
?>
<div class="unit-franchise-opportunity">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-6 col-md-3 franchise_image_mobile">
                <?php 
                    $image = get_field('image_service');
                    if( !empty( $image ) ): 
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-6 col-md-3">
                <?php if($main_Title): ?>
                    <h2 class="text-primary mb-3 title">
                        <?php echo esc_attr($main_Title); ?>
                    </h2>
                <?php endif; ?>
                
                <?php if(!empty($first_Text)): ?>
                    <p class="text-grey fw-400 fs-18">
                        <?php echo esc_attr($first_Text); ?>
                    </p> 
                <?php endif; ?>    

                <?php if(!empty($secon_description)): ?>
                    <p class="text-grey fw-600 fs-18">
                        <?php echo esc_attr($secon_description); ?>
                    </p> 
                <?php endif; ?>         
            </div>
            <div class="col-md-3 franchise_image_web">
                <?php 
                    $image = get_field('image_service');
                    if( !empty( $image ) ): 
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6 pl-4">
                <?php 
                    if( have_rows('list_of_benefits') ):
                ?>
                    <ul class="modern-list">
                        <?php while( have_rows('list_of_benefits') ): the_row(); 
                            $list_item = get_sub_field('benefit');
                        ?>
                            <li class="text-primary fw-600 fs-22">
                                <span>
                                    <?php echo $list_item; ?>
                                </span>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php  endif; ?>
                
                <?php $sub_Title = get_field('sub_title'); 
                    if(!empty($sub_Title)):
                ?>
                    <h2 class="fs-28 text-primary fw-700 mb-4">
                        <?php echo $sub_Title; ?>
                    </h2>
                <?php endif; ?>
                <?php 
                    if(!empty($unit_franchise_opportunities_link)):
                        $unit_franchise_opportunities_link_target = $unit_franchise_opportunities_link['target'] ? $unit_franchise_opportunities_link['target'] : '_self';
                        ?>
                            <a class="font-family-soucer-sans-pro unit-franchise-history__link mr-md-5 mb-md-4" href="<?php echo $unit_franchise_opportunities_link['url']; ?>" target="<?php echo $unit_franchise_opportunities_link_target; ?>"><?php echo $unit_franchise_opportunities_link['title']; ?></a>
                        <?php
                    endif;
                ?>
            </div>
        </div>
    </div>
</div>