<?php 
/**
 *  Hero image with text left Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
 // Create id attribute allowing for custom "anchor" value.
   $id = 'image-with-text-' . $block['id'];
   if( !empty($block['anchor']) ) {
      $id = $block['anchor'];
   }
   
   // Create class attribute allowing for custom "className" and "align" values.
   $className = 'image-with-text';
   if( !empty($block['className']) ) {
      $className .= ' ' . $block['className'];
   }

   $image = get_field('image');
   $sub_Title = get_field('sub_title');
   $main_Title = get_field('main_title');
   $text_Description = get_field('text_description');

   $add_element_in_the_end_block = get_field('add_element_in_the_end_block');
?>

<section id="<?php echo esc_attr($id); ?>" class="image-with-left-text bg-primary section-bg p0 section-dark data-height-fix <?php echo esc_attr($className); ?>">
   <div class="section-caption">
      <div class="container">
         <div class="row">
            <div class="col-12 col-md-6 pr-md-4 pr-lg-5 container-text">
               <?php
                  if(!empty($sub_Title)){ 
               ?>
                  <p class="white-color fs-14 fw-600">
                     <?php echo esc_attr($sub_Title); ?>
                  </p>
               <?php } ?>
               <?php
                  if(!empty($main_Title)){ 
               ?>
                  <h3 class="white-color fs-36 fw-700 mb-4">
                     <?php echo esc_attr($main_Title); ?>
                  </h3>
               <?php } ?>
               <?php
                  if(!empty($text_Description)){ 
               ?>
                  <p class="text-description-block-text-left white-color fs-14 fw-600"><?php echo esc_attr($text_Description); ?></p>
               <?php } ?>

               <?php
                  if($add_element_in_the_end_block == "Arrow Down"):
               ?>
                  <div class="content-arrow">
                     <div class="line"></div>
                        <div class="right-line"></div>
                     <div class="left-line"></div>
                  </div>
               <?php 
                  elseif($add_element_in_the_end_block == "Button"): 
                     $link = get_field('link_button');
                     if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
               ?>
                  <!--  Button -->
                  <div>
                     <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" class="row-button outline-button">
                        <?php echo esc_html( $link_title ); ?>
                        <span />
                     </a>
                  </div>
                  <!-- End Button -->
               <?php
                     endif;
                  endif; 
               ?>
               
            </div>
         </div>
      </div>
   </div>
   <div class="row container-image">
      <div class="col-12 col-sm-6 z-index-n1 d-md-none d-lg-block">
      </div>
      <div class="col-12 col-md-12 col-lg-6 pl-0 pr-0">
         <?php 
            if( !empty( $image ) ): ?>
               <img class="image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
      </div>
   </div>
</section>