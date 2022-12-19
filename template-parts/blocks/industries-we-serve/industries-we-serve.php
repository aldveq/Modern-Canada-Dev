<?php
    $industries_title = get_field('industries_title');
    $industries_description = get_field('industries_description');
    $industries_link = get_field('industries_link');
    $industries_link_target = !empty($industries_link['target']) ? $industries_link['target'] : '_self';
?>

<div class="mobile-industries-we-serve-container d-md-none mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mobile-industries-we-serve-container__mobile-main-title font-family-soucer-sans-pro"><?php echo $industries_title; ?></h1>
                <p><?php echo $industries_description; ?></p>
            </div>
        </div>
    </div>
    <div class="mobile-industries-we-serve-container__accordion-container py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion mobile-industries-we-serve-container__accordion-card-container mb-3" id="accordionIndustries">
                        <?php
                            global $post;

                            $args_mobile = array(  
                                'post_type' => 'industries',
                                'post_status' => 'publish'
                            );

                            $the_industry_query_mobile = new WP_Query($args_mobile);

                            if ($the_industry_query_mobile->have_posts()) {
                                while($the_industry_query_mobile->have_posts()) {
                                    $the_industry_query_mobile->the_post();
                                    $the_industry_custom_id_mobile = $post->post_name;
                                    ?>
                                        <div class="card mobile-industries-we-serve-container__card">
                                            <div class="card-header mobile-industries-we-serve-container__card-header px-2" id="heading-<?php echo $the_industry_custom_id_mobile; ?>">
                                                <h2 class="mobile-industries-we-serve-container__tab-title font-family-soucer-sans-pro mb-0">
                                                    <button class="btn btn-link btn-block text-left mobile-industries-we-serve-container__tab-button" type="button" data-toggle="collapse" data-target="#collapse-<?php echo $the_industry_custom_id_mobile; ?>" aria-controls="collapse-<?php echo $the_industry_custom_id_mobile; ?>">
                                                        <?php echo the_title(); ?>
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapse-<?php echo $the_industry_custom_id_mobile; ?>" class="collapse" aria-labelledby="heading-<?php echo $the_industry_custom_id_mobile; ?>" data-parent="#accordionIndustries">
                                                <div class="card-body mobile-industries-we-serve-container__tab-body py-1">
                                                    <a href="<?php echo the_permalink(); ?>" target="_self"><img class="card-body mobile-industries-we-serve-container__service-img mb-1 pl-0" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ; ?>"></a>
                                                    <?php echo the_excerpt(); ?>
                                                    <a href="<?php echo the_permalink(); ?>" target="_self" class="mobile-industries-we-serve-container__service-single-link">Apply Free Trial</a>
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
                    <?php 
                        if($industries_link): 
                    ?>

                        <a href="<?php echo $industries_link['url']; ?>" target="<?php echo $industries_link_target; ?>" class="modern-website-button modern-website-button__primary"><span class="modern-website-button__text"><?php echo $industries_link['title']; ?></span><span class="modern-website-button__icon"></span></a>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="desktop-industries-we-serve-container d-none d-md-block my-4">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center mb-4">
                <h1 class="font-family-soucer-sans-pro font-weight-bold primary-text-color"><?php echo $industries_title; ?></h1>
                <?php 
                    if($industries_link): 
                ?> 

                    <a href="<?php echo $industries_link['url']; ?>" target="<?php echo $industries_link_target; ?>" class="modern-website-button modern-website-button__primary"><span class="modern-website-button__text"><?php echo $industries_link['title']; ?></span><span class="modern-website-button__icon"></span></a>                    

                <?php endif; ?>
            </div>
            <div class="col-12 d-flex justify-content-start align-items-center desktop-industries-we-serve-container__desc">
                <?php echo $industries_description; ?>
            </div>
        </div>
        <div class="card-deck row">

                <?php

                    $args_desktop = array(  
                        'post_type' => 'industries',
                        'post_status' => 'publish',
                        'orderby' => 'menu_order'
                    );

                    $the_industry_query_desktop = new WP_Query($args_desktop);

                    if ($the_industry_query_desktop->have_posts()) {
                        while($the_industry_query_desktop->have_posts()) {
                            $the_industry_query_desktop->the_post();
                            ?>
                                <div class="col-12 col-lg-6 mb-4">
                                    <div class="card desktop-industries-we-serve-container__desktop-card mb-3 h-100 mx-0">
                                        <div class="row no-gutters h-100">
                                            <div class="col-md-6 desktop-industries-we-serve-container__desktop-card-img-container">
                                                <a href="<?php echo the_permalink(); ?>" target="_self"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img desktop-industries-we-serve-container__desktop-card-img h-100" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ; ?>"></a>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card-body">
                                                    <a href="<?php echo the_permalink(); ?>" target="_self"><span class="desktop-industries-we-serve-container__desktop-card-img-container-service font-family-soucer-sans-pro text-center"><?php echo the_title(); ?></span></a>
                                                    <?php echo the_excerpt(); ?>
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
