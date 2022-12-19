<?php 
    /**
     *  Section with Two List Template.
     *
     * @param   array $block The block settings and attributes.
     * @param   string $content The block inner HTML (empty).
     * @param   bool $is_preview True during AJAX preview.
     * @param   (int|string) $post_id The post ID this block is saved to.
     */
    // Create id attribute allowing for custom "anchor" value.
    $id = 'two-list-block-' . $block['id'];
    if( !empty($block['anchor']) ) {
        $id = $block['anchor'];
    }
    
    // Create class attribute allowing for custom "className" and "align" values.
    $className = 'two-list-block';
    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }

    $title_list_one = get_field('title_list_one');
    $textDescOne = get_field('text_description_one');

    $title_list_two = get_field('title_list_two');
?>

<div class="section-with-two-list">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6 divider-right pr-4">
                <?php 
                    if(!empty($title_list_one)):
                ?>
                    <h3 class="text-primary title fs-36 fw-700 mb-5">
                        <?php echo $title_list_one; ?>
                    </h3>
                <?php endif; ?>

                <?php if(!empty($textDescOne)): ?>
                    <p class="description fs-18 fw-400">
                        <?php echo $textDescOne; ?>
                    </p>
                <?php endif; ?>
                
                <?php if( have_rows('list_one') ) { ?>
                    <ul class="modern-list">
                        <?php  
                            while( have_rows('list_one') ) { 
                                the_row();
                            $listText = get_sub_field('list_one_item');
                        ?>
                            <li class="fw-400 fs-18">
                                <span>
                                    <?php echo $listText; ?>
                                </span>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>

            <div class="col-12 col-md-6 pl-5">
                <?php 
                    if(!empty($title_list_two)):
                ?>
                    <h3 class="text-primary title fs-36 fw-700 mb-5">
                        <?php echo $title_list_two; ?>
                    </h3>
                <?php endif; ?>

                <?php if( have_rows('list_two') ) { ?>
                    <ul class="modern-list">
                        <?php  
                            while( have_rows('list_two') ) { 
                                the_row();
                            $listText = get_sub_field('list_two_item');
                        ?>
                            <li class="fw-400 fs-18">
                                <span>
                                    <?php echo $listText; ?>
                                </span>
                            </li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
        </div>
    </div>
</div>