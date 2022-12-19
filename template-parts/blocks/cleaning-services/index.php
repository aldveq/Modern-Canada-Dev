<?php 
    $cleaning_services_description = get_field('cleaning_services_description');
?>

<div class="desktop-industries-we-serve-container my-4">
    <div class="container">
        <?php
            if($cleaning_services_description):
                ?>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-start align-items-center desktop-industries-we-serve-container__desc">
                            <?php echo $cleaning_services_description; ?>
                        </div>
                    </div>
                <?php
            endif;
        ?>
        <div class="card-deck row">

                <?php

                    $args_cleaning_services = array(  
                        'post_type' => 'cleaning-service',
                        'post_status' => 'publish',
                        'posts_per_page' => 8,
                        'orderby' => 'menu_order'
                    );

                    $the_cleaning_service_query = new WP_Query($args_cleaning_services);

                    if ($the_cleaning_service_query->have_posts()) {
                        while($the_cleaning_service_query->have_posts()) {
                            $the_cleaning_service_query->the_post();
                            $cleaning_service_content = get_field('cleaning_service_content', get_the_ID());
                            ?>
                                <div class="col-12 col-lg-6 mb-4">
                                    <div class="card desktop-industries-we-serve-container__desktop-card desktop-industries-we-serve-container__desktop-card--h100 mb-3 h-100 mx-0">
                                        <div class="row no-gutters">
                                            <div class="col-12 col-md-4 col-lg-12 desktop-industries-we-serve-container__desktop-card-img-container">
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img desktop-industries-we-serve-container__desktop-card-img h-100" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ; ?>">
                                            </div>
                                            <div class="col-12 col-md-8 col-lg-12">
                                                <div class="card-body desktop-industries-we-serve-container__card-body">
                                                    <span class="desktop-industries-we-serve-container__desktop-card-img-container-service desktop-industries-we-serve-container__desktop-card-title font-family-soucer-sans-pro text-center mb-5"><?php echo the_title(); ?></span>
                                                    <?php 
                                                        if($cleaning_service_content):
                                                            $cleaning_service_editor = $cleaning_service_content['cleaning_service_editor'];
                                                            $cleaning_service_enable_button = $cleaning_service_content['cleaning_service_enable_button'];
                                                            
                                                            if($cleaning_service_enable_button == 'yes'):
                                                                $cleaning_service_button = $cleaning_service_content['cleaning_service_button'];
                                                                $cleaning_service_button_target = $cleaning_service_button['target'] ? $cleaning_service_button['target'] : '_self';
                                                                ?>
                                                                    <div class="the_content my-3">
                                                                        <?php  echo $cleaning_service_editor; ?>
                                                                    </div>
                                                                    
                                                                    <a href="<?php echo $cleaning_service_button['url']; ?>" target="<?php echo $cleaning_service_button_target; ?>" class="modern-website-button modern-website-button__primary"><span class="modern-website-button__text"><?php echo $cleaning_service_button['title']; ?></span><span class="modern-website-button__icon"></span></a>

                                                                <?php
                                                            else:
                                                                ?>
                                                                     <div class="the_content my-3">
                                                                        <?php  echo $cleaning_service_editor; ?>
                                                                    </div>
                                                                <?php
                                                            endif;

                                                        endif;
                                                    ?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                        }
                    }
                    wp_reset_postdata();
                    wp_reset_query();
                ?>
        </div>
    </div>
</div>