<?php

/**
 *  Table Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

 // Create id attribute allowing for custom "anchor" value.
$id = 'table-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'table-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

if( !empty($block['align']) ) {
    $className .= ' align-' . $block['align'];
}

//acf fields
$main_Title = get_field('block_title');
$bottom_text = get_field('description_bottom_block');
$linkAplication = get_field('link_btn');
$link_url = $linkAplication['url'];
$link_title = $linkAplication['title'];
$link_target = $linkAplication['target'] ? $linkAplication['target'] : '_self';
?>

<div id="unit-franchise-opportunities-table" class="unit-franchise-opportunity-table <?php echo esc_attr($className); ?>">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-12">
                <?php if($main_Title): ?>
                    <h2 class="text-primary fs-36 mb-3"><?php echo esc_attr($main_Title); ?></h2>
                <?php endif; ?>
                <div class="modern-list" id="careersOperationsTable">
                    <?php if( have_rows('opportunities',  pll_current_language('slug')) ): ?>
                        <?php
                            while( have_rows('opportunities', pll_current_language('slug')) ): the_row(); 
                            $franchise_id = get_sub_field('franchise_id');
                            $location = get_sub_field('location');
                        ?>
                            <div class="item">
                                <p class="opportunity-id"><?php echo $franchise_id; ?></p>
                                <p class="description mb-3"><?php echo $location; ?></p>
                                <a id="aplication-btn" class="button-secondary with-row fill-out fill-out--mobile row-button text-white py-2 px-3 fs-14 fw-600 apply-button-mobile d-none" data-opportunity-id="<?php echo $franchise_id; ?>" data-opportunity-location="<?php echo $location; ?>" onClick="buildSingleOpportunity(this, event)" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                    <?php echo pll__('APPLY NOW'); ?> <span />
                                </a>
                                <div class="form-check item__opportunity-selection-checkbox">
                                    <input class="form-check-input checkbox-multi-opportunity-mobile d-none" type="checkbox" id="<?php echo $franchise_id; ?>_mobile" /><label for="<?php echo $franchise_id; ?>_mobile" class="checkbox-uf-opportunity-label-mobile d-inline"></label>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="mt-2 mb-2 text-right">
                        <button class="button-primary" id="nextPage"><?php echo pll__('Next'); ?></button>
                        <button class="button-primary" id="showAll"><?php echo pll__('Show all'); ?></button>
                    </div>
                </div>
            <div>

            <div class="col-12 mb-4"> 
                <table class="modern-table mb-0">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo pll__('Selection'); ?></th>
                            <th scope="col"><?php echo pll__('Opportunity ID#'); ?></th>
                            <th scope="col"><?php echo pll__('Location'); ?></th>
                            <th scope="col" class="d-none"><?php echo __('Action'); ?></th>
                        </tr>
                    </thead>
                    <?php if( have_rows('opportunities', pll_current_language('slug')) ): ?>
                        <tbody>
                        <?php
                            while( have_rows('opportunities', pll_current_language('slug')) ): the_row(); 
                            $franchise_id = get_sub_field('franchise_id');
                            $location = get_sub_field('location');
                        ?>
                            <tr>
                                <td>
                                    <div class="form-check h-100 pl-5">
                                        <input class="form-check-input checkbox-multi-opportunity-desktop d-none" type="checkbox" id="<?php echo $franchise_id; ?>_desktop"><label for="<?php echo $franchise_id; ?>_desktop" class="checkbox-uf-opportunity-label-desktop d-inline"></label>
                                    </div>
                                </td>
                                <td><?php echo $franchise_id; ?></td>
                                <td><?php echo $location; ?></td>
                                <td class="d-none">
                                    <a id="aplication-btn" class="button-secondary with-row fill-out fill-out--mobile row-button text-white py-2 px-3 fs-14 fw-600 apply-button-desktop" data-opportunity-id="<?php echo $franchise_id; ?>" data-opportunity-location="<?php echo $location; ?>" onClick="buildSingleOpportunity(this, event)" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php echo pll__('APPLY NOW'); ?> <span />
                                    </a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    <?php endif; ?>
                    
                </table>
                <small id="" class="form-text text-muted font-italic"><?php echo pll__('Either you want to apply for more than one opportunity or apply as a general applicant, please use the "APPLY BUTTON" below the current franchise opportunities table.'); ?></small>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3 class="text-primary fs-22"><?php echo $bottom_text; ?></h3>
            </div>
            <div class="col-md-6 content-application">
                <div>
                    <label class="blank-label"></label>
                    <a id="general-unit-franchise-application-button" class="button-secondary with-row fill-out fill-out--mobile row-button text-white px-3 fs-14 fw-600" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo pll__('APPLY NOW'); ?> <span />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

