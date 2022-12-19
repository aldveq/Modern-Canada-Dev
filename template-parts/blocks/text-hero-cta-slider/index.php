<?php
  $text_hero_cta_slider_cleaning_services_section = get_field('text_hero_cta_slider_cleaning_services_section');
  $text_hero_cta_slider_franchise_advisor_section = get_field('text_hero_cta_slider_franchise_advisor_section');
?>

<section class="text-hero-cta-slider">
     <!-- Swiper -->
  <div class="swiper-container text-hero-cta-slider-container">
    <div class="swiper-wrapper">

      <?php
        if( have_rows('text_hero_cta_slider_slides') ):
          while( have_rows('text_hero_cta_slider_slides') ) : the_row();
              $text_hero_cta_slider_text = get_sub_field('text_hero_cta_slider_text');
              $text_hero_cta_slider_image = get_sub_field('text_hero_cta_slider_image');

              ?>
                    <div class="swiper-slide">
                      <div class="text-hero-cta-slider__slide-container">
                        
                        <div class="text-hero-cta-slider__slide-img" style="background-image: url(<?php echo $text_hero_cta_slider_image['url']; ?>);">
                        </div>

                        <div class="text-hero-cta-slider__slide-desc">
                          <h1 class="text-hero-cta-slider__heading px-3 px-md-5"><?php echo $text_hero_cta_slider_text; ?></h1>
                        </div>
                        
                      </div>
                    </div>
              <?php

          endwhile;
        endif;
      ?>
    
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination text-hero-cta-slider-pagination"></div>
  </div>

  <div class="text-hero-cta-slider__cta-container">
    <div class="container">

      <div class="row">

        <?php
          if($text_hero_cta_slider_cleaning_services_section):
            $title = $text_hero_cta_slider_cleaning_services_section['text_hero_cta_slider_cleaning_services_section_title'];
            $services_section_link = $text_hero_cta_slider_cleaning_services_section['text_hero_cta_slider_cleaning_services_section_link'];
            $services_quote_link = $text_hero_cta_slider_cleaning_services_section['text_hero_cta_slider_cleaning_services_section_request_quote_link'];
          
            $services_section_link_target = $services_section_link['target'] ? $services_section_link['target'] : '_self';
            $services_quote_link_target = $services_quote_link['target'] ? $services_quote_link['target'] : '_self';

            ?>

              <div class="col-12 col-sm-6 text-hero-contaner__external-link-container">
                <div class="row">
                  
                  <div class="col-5 col-sm-12 mb-sm-3">
                    <p class="text-hero-container__external-link-info-title font-family-soucer-sans-pro mb-2"><?php echo $title; ?></p>
                    <a class="text-hero-container__external-link-info-link text-hero-container__external-link-info-link--cleaning_quote font-family-soucer-sans-pro" href="<?php echo $services_section_link['url']; ?>" target="<?php echo $services_section_link_target; ?>"><?php echo $services_section_link['title']; ?></a>
                  </div>

                  <div class="col-7 col-sm-12">
                    <a href="<?php echo $services_quote_link['url']; ?>" class="modern-website-button modern-website-button__primary" target="<?php echo $services_quote_link_target; ?>"><span class="modern-website-button__text"><?php echo $services_quote_link['title']; ?></span><span class="modern-website-button__icon"></span></a>
                  </div>

                </div>
              </div>

            <?php

          endif;
        ?>

        <?php
          if($text_hero_cta_slider_franchise_advisor_section):
            $text_hero_cta_slider_franchise_advisor_section_title = $text_hero_cta_slider_franchise_advisor_section['text_hero_cta_slider_franchise_advisor_section_title'];
            $text_hero_cta_slider_franchise_advisor_section_link = $text_hero_cta_slider_franchise_advisor_section['text_hero_cta_slider_franchise_advisor_section_link'];
            $text_hero_cta_slider_franchise_advisor_section_connect_link = $text_hero_cta_slider_franchise_advisor_section['text_hero_cta_slider_franchise_advisor_section_connect_link'];

            $text_hero_cta_slider_franchise_advisor_section_link_target = $text_hero_cta_slider_franchise_advisor_section_link['target'] ? $text_hero_cta_slider_franchise_advisor_section_link['target'] : '_self';
            $text_hero_cta_slider_franchise_advisor_section_connect_link_target = $text_hero_cta_slider_franchise_advisor_section_connect_link['target'] ? $text_hero_cta_slider_franchise_advisor_section_connect_link['target'] : '_self';


            ?>
              <div class="col-12 col-sm-6 text-hero-contaner__external-link-container">
                <div class="row">

                  <div class="col-5 col-sm-12 mb-sm-3">
                    <p class="text-hero-container__external-link-info-title font-family-soucer-sans-pro mb-2"><?php echo $text_hero_cta_slider_franchise_advisor_section_title; ?></p>
                    <a class="text-hero-container__external-link-info-link text-hero-container__external-link-info-link--franchise_advisor font-family-soucer-sans-pro" href="<?php echo $text_hero_cta_slider_franchise_advisor_section_link['url']; ?>" target="<?php echo $text_hero_cta_slider_franchise_advisor_section_link_target; ?>"><?php echo $text_hero_cta_slider_franchise_advisor_section_link['title']; ?></a>
                  </div>

                  <div class="col-7 col-sm-12 ">
                    <a href="<?php echo $text_hero_cta_slider_franchise_advisor_section_connect_link['url']; ?>" target="<?php echo $text_hero_cta_slider_franchise_advisor_section_connect_link_target; ?>" class="modern-website-button modern-website-button__secondary"><span class="modern-website-button__text"><?php echo $text_hero_cta_slider_franchise_advisor_section_connect_link['title']; ?></span><span class="modern-website-button__icon"></span></a>
                  </div>

                </div>
              </div>
            <?php

          endif;
        ?>
        

        

      </div>

    </div>
  </div>

</section>