<?php
    $text_hero_cta_image = get_field('text_hero_cta_image');
    $text_hero_cta_description = get_field('text_hero_cta_description');
    $cleaning_services_section = get_field('cleaning_services_section');
    $franchise_advisor_section = get_field('franchise_advisor_section');
?>

<div class="text-hero-cta-container" style="background-image: url(<?php echo $text_hero_cta_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 mr-md-auto">
                <h1 class="text-hero-cta-container__main-title font-family-soucer-sans-pro mb-1">
                    <?php echo $text_hero_cta_description; ?>
                </h1>
                <div class="row">

                    <?php 
                        if($cleaning_services_section):
                            $cleaning_services_section_link_target = $cleaning_services_section['cleaning_services_section_link']['target'] ? $cleaning_services_section['cleaning_services_section_link']['target'] : '_self';
                            $cleaning_services_section_request_quote_link_target = $cleaning_services_section['cleaning_services_section_request_quote_link']['target'] ? $cleaning_services_section['cleaning_services_section_request_quote_link']['target'] : '_self'; 
                        ?>
                            <div class="col-12 text-hero-contaner__external-link-container">
                                <div class="row">
                                    <div class="col-5 col-lg-6 col-xl-6">
                                        <p class="text-hero-container__external-link-info-title font-family-soucer-sans-pro mb-2"><?php echo $cleaning_services_section['cleaning_services_section_title']; ?></p>
                                        <a class="text-hero-container__external-link-info-link text-hero-container__external-link-info-link--cleaning_quote font-family-soucer-sans-pro" href="<?php echo $cleaning_services_section['cleaning_services_section_link']['url']; ?>" target="<?php echo $cleaning_services_section_link_target; ?>"><?php echo $cleaning_services_section['cleaning_services_section_link']['title']; ?></a>
                                    </div>
                                    <div class="col-7 col-lg-6 col-xl-6 pl-xl-5">
                                        <div class="text-hero-container__external-link-cta-container text-hero-container__external-link-cta-container--cleaning_quote">
                                            <a class="text-hero-container__external-link-cta font-family-soucer-sans-pro" href="<?php echo $cleaning_services_section['cleaning_services_section_request_quote_link']['url']; ?>" target="<?php echo $cleaning_services_section_request_quote_link_target; ?>"><span><?php echo $cleaning_services_section['cleaning_services_section_request_quote_link']['title']; ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endif;
                    ?>

                    <?php
                        if($franchise_advisor_section):
                            $franchise_advisor_section_link_target = $franchise_advisor_section['franchise_advisor_section_link']['target'] ? $franchise_advisor_section['franchise_advisor_section_link']['target'] : '_self';
                            $franchise_advisor_section_connect_link_target = $franchise_advisor_section['franchise_advisor_section_connect_link']['target'] ? $franchise_advisor_section['franchise_advisor_section_connect_link']['target'] : '_self';
                            ?>
                                <div class="col-12 text-hero-contaner__external-link-container">
                                    <div class="row">
                                        <div class="col-5 col-lg-6 col-xl-6">
                                            <p class="text-hero-container__external-link-info-title font-family-soucer-sans-pro mb-2"><?php echo $franchise_advisor_section['franchise_advisor_section_title']; ?></p>
                                            <a class="text-hero-container__external-link-info-link text-hero-container__external-link-info-link--franchise_advisor font-family-soucer-sans-pro" href="<?php echo $franchise_advisor_section['franchise_advisor_section_link']['url']; ?>" target="<?php echo $franchise_advisor_section_link_target; ?>"><?php echo $franchise_advisor_section['franchise_advisor_section_link']['title']; ?></a>
                                        </div>
                                        <div class="col-7 col-lg-6 col-xl-6 pl-xl-5">
                                            <div class="text-hero-container__external-link-cta-container text-hero-container__external-link-cta-container--franchise_advisor">
                                                <a class="text-hero-container__external-link-cta text-hero-container__external-link-cta--franchise_advisor font-family-soucer-sans-pro" href="<?php echo $franchise_advisor_section['franchise_advisor_section_connect_link']['url']; ?>" target="<?php echo $franchise_advisor_section_connect_link_target; ?>"><span><?php echo $franchise_advisor_section['franchise_advisor_section_connect_link']['title']; ?></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>