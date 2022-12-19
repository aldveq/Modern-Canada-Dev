<?php 
    $join_modern_title = get_field('join_modern_title');
?>

<section class="join-modern">
    <div class="container">
        <div class="row">
            <?php if($join_modern_title): ?>
                <div class="col-12 col-md-12">
                    <h3 class="text-primary title"><?php echo $join_modern_title; ?></h3>
                </div>
            <?php endif; ?>
        </div>
        <div class="row">

            <?php
                if( have_rows('join_modern_reasons') ):
                    while( have_rows('join_modern_reasons') ) : the_row();
                        $join_modern_reason_image = get_sub_field('join_modern_reason_image');
                        $join_modern_reason_text = get_sub_field('join_modern_reason_text');
                        ?>
                            <div class="col-4 col-md-4 item">
                                <div class="container-image">
                                    <img src="<?php echo $join_modern_reason_image['url']; ?>" alt="<?php echo $join_modern_reason_image['alt']; ?>">
                                </div>
                                <p><?php echo $join_modern_reason_text; ?></p>
                            </div>
                        <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>
