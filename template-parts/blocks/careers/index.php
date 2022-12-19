<?php
    $career_opportunities_title = get_field('career_opportunities_title');
?>

<section class="careers">
    <div class="container">
        <div class="row">
            <?php if($career_opportunities_title): ?>
                <div class="col-12 col-md-12">
                    <h3 class="text-primary title"><?php echo $career_opportunities_title; ?></h3>
                </div>
            <?php endif; ?>
        </div>
        <div class="row container-careers">

            <?php
                if( have_rows('career_opportunities_block') ):
                    while( have_rows('career_opportunities_block') ) : the_row();
                        $career_opportunities_block_image = get_sub_field('career_opportunities_block_image');
                        $career_opportunities_block_title = get_sub_field('career_opportunities_block_title');
                        ?>
                            <div class="col-6 col-md-4">
                                <div class="item">
                                    <img src="<?php echo $career_opportunities_block_image['url']; ?>" alt="<?php echo $career_opportunities_block_image['alt']; ?>">
                                    <div class="bg-primary-50-op content-text-careers">
                                        <p><?php echo $career_opportunities_block_title; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>






